<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\Pesan_item;
use App\Models\PesanItem;
use App\Models\Product;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CheckoutController extends Controller
{
    public function index(){
        $chartitem = Keranjang::where('id_user',Auth::id())->get();
        $provinces = Province::pluck('name', 'province_id');
        $q = DB::table('pesan')->select(DB::raw('MAX(RIGHT(kode_transaksi,4)) as kode'));
        $kt = "";
        if($q->count() > 0){
            foreach($q->get() as $k){
                $tmp = ((int) $k->kode)+1;
                $kt = sprintf("%04s",$tmp);
            }
        }
        else{
            $kt = "0001";
        }
        
        return view('frontend.checkout', compact('chartitem','provinces','kt'));
    }

    
    public function cities(Request $request){
        $cities = $this->getCities($request->query('province_id'));
        return response()->json(['cities'=> $cities]);
    }

    /**
	 * Get cities by province ID
	 *
        @param Request $request shipping cost params
	 *
	 * @return array
	 */
	public function shippingCost(Request $request)
	{
		$destination = $request->input('city_id');
		
		return $this->_getShippingCost($destination, $this->_getTotalWeight());
	}

	/**
	 * Set shipping cost
	 *
	 * @param Request $request selected shipping cost
	 *
	 * @return string
	 */
	public function setShipping(Request $request)
	{
		\Cart::removeConditionsByType('shipping');

		$shippingService = $request->get('shipping_service');
		$destination = $request->get('city_id');

		$shippingOptions = $this->_getShippingCost($destination, $this->_getTotalWeight());

		$selectedShipping = null;
		if ($shippingOptions['results']) {
			foreach ($shippingOptions['results'] as $shippingOption) {
				if (str_replace(' ', '', $shippingOption['service']) == $shippingService) {
					$selectedShipping = $shippingOption;
					break;
				}
			}
		}

		$status = null;
		$message = null;
		$data = [];
		if ($selectedShipping) {
			$status = 200;
			$message = 'Success set shipping cost';

			$this->_addShippingCostToCart($selectedShipping['service'], $selectedShipping['cost']);

			$data['total'] = number_format(\Cart::getTotal());
		} else {
			$status = 400;
			$message = 'Failed to set shipping cost';
		}

		$response = [
			'status' => $status,
			'message' => $message
		];

		if ($data) {
			$response['data'] = $data;
		}

		return $response;
	}

	/**
	 * Get selected shipping from user input
	 *
	 * @param int    $destination     destination city
	 * @param int    $totalWeight     total weight
	 * @param string $shippingService service name
	 *
	 * @return array
	 */
	private function _getSelectedShipping($destination, $totalWeight, $shippingService)
	{
		$shippingOptions = $this->_getShippingCost($destination, $totalWeight);

		$selectedShipping = null;
		if ($shippingOptions['results']) {
			foreach ($shippingOptions['results'] as $shippingOption) {
				if (str_replace(' ', '', $shippingOption['service']) == $shippingService) {
					$selectedShipping = $shippingOption;
					break;
				}
			}
		}

		return $selectedShipping;
	}

	/**
	 * Apply shipping cost to cart data
	 *
	 * @param string $serviceName Service name
	 * @param float  $cost        Shipping cost
	 *
	 * @return void
	 */
	private function _addShippingCostToCart($serviceName, $cost)
	{
		$condition = new \Darryldecode\Cart\CartCondition(
			[
				'name' => $serviceName,
				'type' => 'shipping',
				'target' => 'total',
				'value' => '+'. $cost,
			]
		);

		\Cart::condition($condition);
	}

	/**
	 * Get shipping cost option from api
	 *
	 * @param string $destination destination city
	 * @param int    $weight      total weight
	 *
	 * @return array
	 */
	private function _getShippingCost($destination, $weight)
	{
		$params = [
			'origin' => env('RAJAONGKIR_ORIGIN'),
			'destination' => $destination,
			'weight' => $weight,
		];

		$results = [];
		foreach ($this->couriers as $code => $courier) {
			$params['courier'] = $code;
			
			$response = $this->rajaOngkirRequest('cost', $params, 'POST');
			
			if (!empty($response['rajaongkir']['results'])) {
				foreach ($response['rajaongkir']['results'] as $cost) {
					if (!empty($cost['costs'])) {
						foreach ($cost['costs'] as $costDetail) {
							$serviceName = strtoupper($cost['code']) .' - '. $costDetail['service'];
							$costAmount = $costDetail['cost'][0]['value'];
							$etd = $costDetail['cost'][0]['etd'];

							$result = [
								'service' => $serviceName,
								'cost' => $costAmount,
								'etd' => $etd,
								'courier' => $code,
							];

							$results[] = $result;
						}
					}
				}
			}
		}

		$response = [
			'origin' => $params['origin'],
			'destination' => $destination,
			'weight' => $weight,
			'results' => $results,
		];
		
		return $response;
	}

	/**
	 * Get total of order items
	 *
	 * @return int
	 */
	private function _getTotalWeight()
	{
		if (\Cart::isEmpty()) {
			return 0;
		}

		$totalWeight = 0;
		$items = \Cart::getContent();

		foreach ($items as $item) {
			$totalWeight += ($item->quantity * $item->associatedModel->weight);
		}

		return $totalWeight;
	}

	/**
	 * Update tax to the order
	 *
	 * @return void
	 */
	private function _updateTax()
	{
		\Cart::removeConditionsByType('tax');

		$condition = new \Darryldecode\Cart\CartCondition(
			[
				'name' => 'TAX 10%',
				'type' => 'tax',
				'target' => 'total',
				'value' => '10%',
			]
		);

		\Cart::condition($condition);
	}

    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 501, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();


        return response()->json($cost);
    }

    public function pesan(Request $request){
        $pesan = new Pesan();
        $pesan->id_user = Auth::id();
        $pesan->name = $request->input('name');
        $pesan->email = $request->input('email');
        $pesan->telepon = $request->input('telepon');
        $pesan->province_origin = $request->input('province_origin');
        $pesan->city_origin = $request->input('city_origin');
        $pesan->province_destination = $request->input('province_destination');
        $pesan->city_destination = $request->input('city_destination');
        $pesan->kecamatan = $request->input('kecamatan');
        $pesan->postcode = $request->input('postcode');
        $pesan->alamat = $request->input('alamat');
        $pesan->courier = $request->input('courier');
        $pesan->kode_transaksi = $request->input('kode_transaksi');
        $pesan->total = $request->input('total');
        $pesan->save();

        $chartitem = Keranjang::where('id_user',Auth::id())->get();
        foreach ( $chartitem as $item){
            PesanItem::create([
                'pesan_id'=>$pesan->id,
                'id_produk'=>$item->id_produk,
                'jumlah'=>$item->jumlah,
                'harga'=>$item->product->harga,
            ]);
            $prod = Product::where('id',$item->id_produk)->first();
            $prod->stok = $prod->stok - $item->jumlah;
            $prod->update();
        }

        if(Auth::user()->kecamatan == NULL){
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('name');
            $user->telepon = $request->input('telepon');
            $user->province_id = $request->input('province_id');
            $user->city_id = $request->input('city_id');
            $user->kecamatan = $request->input('kecamatan');
            $pesan->province_destination = $request->input('province_destination');
            $pesan->city_destination = $request->input('city_destination');
            $user->postcode = $request->input('postcode');
            $user->alamat = $request->input('alamat');
            $user->durasi = $request->input('durasi'); 
            $user->update();
        }

        $chartitem = Keranjang::where('id_user',Auth::id())->get();
        Keranjang::destroy($chartitem);

        return redirect('/')->with('success', "Order Placed Successfully");

    }
}
