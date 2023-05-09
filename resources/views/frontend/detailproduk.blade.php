@extends ('layouts.inc.front')

@section('content')
<section class="mt-2 mb-3">
        <div class="container product_data">
            <div class="row row-produk">
                <h3 class="mb-3 mt-4 fw-semibold text-brown">Detail Produk <span id="explore"></span></h3>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="figure product mb-3">
                        <div class="main-img">
                        @if($product->image)
                            <img src="{{ asset('asset/uploads/product/'.$product->image) }}" class="figure-img img-fluid pro-img" id="big" alt="product" >
                        @endif
                        </div>
                        <div class="thumb-im figure-caption d-flex justify-content-between">
                            @if($product->image)
                            <div class="box active" onclick="changeImage(this)">
                                <img src="{{ asset('asset/uploads/product/'.$product->image) }}" class="figure-img img-fluid" id="small">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!--Info + Proses Beli Produk-->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-3 rounded-3">
                    <div class="page-info mb-3">
                        <p class="fw-semibold text-two">Beranda > <span class="text-five">{{$product->category->nama_kategori}}</span> >{{$product->name}}</p>
                    </div>
                    <h3 class="fw-bold text-one">{{$product->name}}</h3>
                    <p class="text-one m-0 fw-normal mb-2"><i class='bx bxs-star fs-6 text-warning'></i> <b>5.0</b> (5 reviews) | Terjual 22</p>
                    <h2 class="text-muted fw-semibold text-five mb-4">Rp.{{$product->harga}}</h2>
    
                    
                        <div class="quantity">
                            <div class="add-btn d-flex align-items-center justify-content-between">
                                <span class="fw-semibold text-one me-3">Kuantitas</span>
                                <input type="hidden" value="{{$product->id}}" class="id_produk">
                                <div class="quantity d-flex align-items-center me-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="jumlah" class="form-control text-center qty-input"  value="1" max="{{$product->stok}}" style="width: 50px; text-align: center; border: none;">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                                <span class="text-one">Tersisa {{$product->stok}}</span>
                            </div>
                            
                        </div>
                        <br>
                        <div class="add-produk d-flex align-items-center">
                            <button type="button" class="btn btn-hover text-five btn text-three shop me-3 addToChartBtn" name="beli" style="width: 250px;"> <i class="fa fa-cart-plus me-2" aria-hidden="true"></i>Keranjang</button>
                            <button class="btn btn text-three shop" id="change-log" name="beli" style="width: 250px;"> <i class="fa-solid fa-heart"></i> Wishlist</button>
                        </div>
                    
                    <div class="about mt-4 mb-3">
                        <ul class="nav nav-pills mb-3 fs-5" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="fw-semibold active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="fw-semibold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Spesifikasi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active text-two" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="content">
                                    <p>Gelas unik dari kayu jati yang aman untuk digunakan, dibuat langsung oleh perajin kami dari Jogja</p>
                                    <ul>
                                        <li>Serat setiap kayu berbeda-beda, wajar jika terjadi perbedaan warna serat antara foto dengan barang yang diterima</li>
                                        <li>Pengiriman dilakukan maksimal H+2 setelah pembayaran</li>
                                        <li>Hari Minggu dan libur nasional tidak ada pengiriman</li>
                                        <li>Jika terdapat keluhan/saran/kritik bisa contact kami via chat, insyallah akan kami layani sebaik mungkin</li>
                                    </ul>
                                    <div class="important-info text-two">
                                        <h6 class="text-one fw-semibold">Note !</h5>
                                        <p>
                                            Penukaran atau pengembalian produk dapat kami proses jika ada bukti video unboxing atau pembukaan barang dari awal. Mohon maaf jika tidak terdapat bukti tersebut, maka penukaran atau pengembalian produk tidak dapat dilayani. Harap maklum dan terimakasih !
                                        </p>
                                    </div>
                                </div>
                                <a class="more text-five text-decoration-none horizontal-line label-sign mb-3">
                                    <span class="" id=""></span>
                                </a>

                                <div class="share text-two">
                                    <span class="">Bagikan Halaman Ini : </span>
                                    <button type="button" class="rounded-circle bg-brown fs-6 text-three" style="width: 40px; height: 40px;" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="copyURL()">
                                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                                    </button>                             
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog d-flex justify-content-center align-items-center">
                                            <div class="modal-content w-50 d-flex justify-content-center align-items-center">
                                                <div class="modal-body">
                                                Link Berhasil Tersalin !
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button trigger moda -->
                            </div>
                            <div class="tab-pane fade text-two" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            {!! htmlspecialchars_decode (nl2br($product->deskripsi)) !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

