@extends('layouts.admin')

@section('content')
    <div class="row">
            <h2 class="mb-3 fw-normal text-six">Dashboard<span id="explore"></span></h2>                        
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-list-ul"></i>
                        </div>
                        <p class="size-p mb-1">Jumlah Kategori</p>
                        <h3 class="fw-bolder mb-0">{{$kategori}}</h3>
                        <p class="size-p mb-0 mt-1"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-box-archive"></i>
                        </div>
                        <p class="size-p mb-1">Jumlah Produk</p>
                        <h3 class="fw-bolder mb-0">{{$produk}}</h3>
                        <p class="size-p mb-0 mt-1"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p class="size-p mb-1">Jumlah Pesanan</p>
                        <h3 class="fw-bolder mb-0">{{$pesanan}}</h3>
                        <p class="size-p mb-0 mt-1"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <p class="size-p mb-1">Jumlah Customer</p>
                        <h3 class="fw-bolder mb-0">{{$user}}</h3>
                        <p class="size-p mb-0 mt-1"></p>
                    </div>
                </div>
            </div>
        </div>
@endsection 