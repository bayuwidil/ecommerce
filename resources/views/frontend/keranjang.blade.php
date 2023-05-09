@extends ('layouts.inc.front')

@section('content') 
        <div class="container">
            @php 
            $total = 0;
            $berat = 0;
            $jumlah = 0;
            @endphp
            <div class="row row-produk">
                <h3 class="mb-3 mt-4 fw-semibold text-brown">Keranjang <span id="explore"></span></h3>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="table-scroll">
                    <table class="table text-center">
                        
                        <thead class="text-two">
                            <tr>
                                <th scope="col" class="text-start fw-normal py-3">Produk</th>
                                <th scope="col" class="fw-normal py-3">Harga</th>
                                <th scope="col" class="fw-normal py-3">Jumlah</th>
                                <th scope="col" class="fw-normal py-3">Berat</th>
                                <th scope="col" class="fw-normal py-3">SubBerat</th>
                                <th scope="col" class="fw-normal py-3">SubTotal</th>
                                <th scope="col" class="fw-normal py-3">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($chartitem as $item)
                        <tbody class="text-one product_data">
                            <tr>
                                <td class="text-start fw-semibold"><img src="{{ asset('asset/uploads/product/'.$item->product->image) }}" class="rounded-3 shadow-sm me-2 img-sizing" alt="">{{$item->product->name}}</td>
                                <td class="align-middle fw-semibold">Rp.{{number_format($item->product->harga)}}-,</td>
                                <td class="id_produk align-middle fw-semibold " value="{{$item->id_produk}}">{{number_format($item->jumlah)}}</td>
                                <td class="align-middle fw-semibold">{{$item->product->berat}}gr</td>
                                <td class="align-middle fw-semibold">{{$item->product->berat * $item->jumlah}}gr</td>
                                <td class="align-middle fw-semibold">Rp.{{number_format($item->product->harga * $item->jumlah)}}-,</td>
                                <td class="align-middle fw-semibold"><a href="{{url('hapus/'.$item->id)}}"><i class="fa fa-trash text-danger" ></i></a></td>
                            </tr>
                        </tbody>
                        @php  
                        $total += ($item->product->harga * $item->jumlah);
                        $berat += ($item->product->berat * $item->jumlah);
                        $jumlah += $item->jumlah;
                        @endphp
                        @endforeach
                    </table>
                </div>
                

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="count p-3 border rounded-3 shadow-set text-one">
                        <h6 class="fw-semibold">Sub Total Keranjang</h5>
                            <div class="calculator p-3">
                                <table class="table text-center">
                                    <tbody class="text-one">
                                        <tr>
                                            <td class="text-start text-two" colspan="2">Jumlah Produk :</td>
                                            <td class="align-middle fw-semibold text-end">{{$jumlah}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start text-two" colspan="2">Jumlah Berat :</td>
                                            <td class="align-middle fw-semibold text-end">{{$berat}}gr</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start text-two" colspan="2">Total Sementara :</td>
                                            <td class="align-middle fw-semibold text-end">Rp.{{number_format($total)}}-,</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{url('/checkout')}}" class="btn btn text-three shop w-100" id="change-log" name="beli"> Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
    
