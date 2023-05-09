<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\RajaOngkir;

class TambahOngkirController extends Controller
{
    public $belanja;
    private $apiKey = '4f464d784cc4a53acfa919eda993c9c1';
    public $provinsi_id, $kota_id, $nama_jasa,$daftarProvinsi,$daftarKota;
    public $result=[];
    public $akun;
    public function mount($id)
    {
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $this->akun = Keranjang::find($id);

        if(Auth::user()->id != $this->akun->id_user){
            return redirect()->route('/');
        }
        $this->belanja = Keranjang::find($id);
        
    } 

    public function getOngkir(){
        if(!$this->provinsi_id || !$this->kota_id || !$this->nama_jasa){
            return redirect()->route('checkout');
        }

        $produk = Product::find($this->belanja->produk_id);
        
        

        // biaya ongkir
        $rajaOngkir = new RajaOngkir($this->apiKey);
        $cost = $rajaOngkir->ongkosKirim([
            'origin'=>457,
            'destination'=>$this->kota_id,
            'weight'=>$produk->berat,
            'courier'=>$this->nama_jasa
        ])->get();

        
        // nama jasa
        $this->nama_jasa = $cost[0]['name'];

        
        foreach($cost[0]['costs'] as $row){
            $this->result[] = array(
                'description' => $row['description'],
                'biaya'=>$row['cost'][0]['value'],
                'etd'=>$row['cost'][0]['etd']
            );
        }
        
        

    }


    public function save_ongkir($biaya){
        $this->belanja->total += $biaya;
        $this->belanja->update();

        return redirect()->route('/checkout');
    }



    public function render()
    {
        
        $rajaOngkir = new RajaOngkir($this->apiKey);
        $this->daftarProvinsi = $rajaOngkir->provinsi()->all();

        if($this->provinsi_id){
            $this->daftarKota = $rajaOngkir->kota()->dariProvinsi($this->provinsi_id)->get();
        }

        return view('/frontend/tambah-ongkir');
    }
}
