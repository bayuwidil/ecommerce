@extends ('layouts.inc.front')

@section('content')
<section class="banner-part mt-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12 mb-1">
                            <div class="home-grid-promo">
                                <a href="#"><img src="../asset/img/banner1.png" alt="promo"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="#"><img src="../asset/img/banner2.png" alt="promo"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active rounded-circle indicators-btn" aria-current="true" aria-label="Slide 1" style="height: 15px; width: 15px;"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class="rounded-circle indicators-btn" style="height: 15px; width: 15px;"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class="rounded-circle indicators-btn" style="height: 15px; width: 15px;"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="../asset/img/slider.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../asset/img/slider2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../asset/img/slider3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="button-slider carousel-control-prev my-auto rounded-circle ms-3" id="slider" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span  aria-hidden="true"><i class="fa fa-arrow-left fw-bolder" aria-hidden="true"></i></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="button-slider carousel-control-next my-auto rounded-circle me-3" id="slider" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span aria-hidden="true"><i class="fa fa-arrow-right fw-bolder" aria-hidden="true"></i></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-3">
            <div class="d-flex justify-content-between align-items-center p-0">
                <h3 class="text-one fw-bolder text-one me-3 p-0" style="font-size: 1.2rem;">Kategori Produk</h3>
                <a class="nav-link text-five fw-semibold" href="#" style="font-size: .8rem;">Lihat Detail</a>
            </div>
            
            <div class="category-slider mt-0">
                <div class="row text-center row-bagr slider">
                @foreach($category as $item)
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 slider-items">
                        <div class="menu-kategori" id="category-text">
                            <a href="{{url('view-category/'.$item->nama_kategori)}}" id="category-link"><img src="{{asset('asset/uploads/category/'.$item->image)}}" alt="" class="w-100 mt-3" style="border-radius: 8px;"></a>
                            <p class="mt-2 text-four fw-bold">{{$item->nama_kategori}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="next_btn">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-right fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="prev_btn">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-left fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
        </div>
        
        </div>
    </section>

    <section>
        <div class="container mb-4">
            <div class="d-flex justify-content-between align-items-center p-0">
                <h3 class="text-one fw-bolder text-one me-3 p-0" style="font-size: 1.2rem;">Produk Terlaris !</h3>
                <a class="nav-link text-five fw-semibold" href="#" style="font-size: .8rem;">Lihat Semua</a>
            </div>
            <div class="category-slider mt-0">
                <div class="row text-center row-bagr best-seller p-2">
                @foreach($product as $item)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6 mx-1" id="produk-col">
                        <div class="card card-product text-center shadow-sm">
                            <a href="{{url('detail-prod/'.$item->id)}}" class="text-decoration-none text-one">
                                <img src="{{asset('asset/uploads/product/'.$item->image)}}" class="card-img-top" alt="...">
                                <div class="card-body text-start">
                                    <div class="category-text bg-brown ps-1">
                                        <a href="#" class=" card-info text-decoration-none text-three">{{$item->category->nama_kategori}}</a></p>
                                    </div>
                                    <div id="more-char">
                                        <span class="fw-semibold text-one">{{$item->name}}</span>
                                    </div>
                                    <p class="fw-bold my-2 text-one" style="font-size: 1rem;">Rp.{{number_format($item->harga)}},-</p>
                                    <p class="card-info text-two m-0" style="font-size: .7rem;"><i class='bx bxs-star text-warning'></i> 5.0 | Terjual 122</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="next_btn-best">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-right fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="prev_btn-best">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-left fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-3">
            <div class="d-flex justify-content-between align-items-center p-0">
                <h3 class="text-one fw-bolder text-one me-3 p-0" style="font-size: 1.2rem;">Produk Unggulan Kami !</h3>
                <a class="nav-link text-five fw-semibold" href="#" style="font-size: .8rem;">Lihat Semua</a>
            </div>
            <div class="category-slider mt-0">
                <div class="row text-center row-bagr popular p-2">
                @foreach($product as $item)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6 mx-1" id="produk-col">
                        <div class="card card-product text-center shadow-sm">
                            <a href="{{url('detail-prod/'.$item->id)}}" class="text-decoration-none text-one">
                                <img src="{{asset('asset/uploads/product/'.$item->image)}}" class="card-img-top" alt="...">
                                <div class="card-body text-start">
                                    <div class="category-text bg-brown ps-1">
                                        <a href="#" class=" card-info text-decoration-none text-three">{{$item->category->nama_kategori}}</a></p>
                                    </div>
                                    <div id="more-char">
                                        <span class="fw-semibold text-one">{{$item->name}}</span>
                                    </div>
                                    <p class="fw-bold my-2 text-one" style="font-size: 1rem;">Rp.{{number_format($item->harga)}},-</p>
                                    <p class="card-info text-two m-0" style="font-size: .7rem;"><i class='bx bxs-star text-warning'></i> 5.0 | Terjual 122</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="next_btn-popular">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-right fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="prev_btn-popular">
                    <button class="rounded-circle">
                        <span aria-hidden="true" class="button-slider"><i class="fa fa-arrow-left fw-bolder" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-4">
            <h3 class="text-one fw-bolder text-one me-3" style="font-size: 1.2rem;">Produk Terbaru Untuk Anda</h3>
            <div class="row text-center row-bag">
            @foreach($product as $item)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6 mx-1" id="produk-col">
                        <div class="card card-product text-center shadow-sm">
                            <a href="{{url('detail-prod/'.$item->id)}}" class="text-decoration-none text-one">
                                <img src="{{asset('asset/uploads/product/'.$item->image)}}" class="card-img-top" alt="...">
                                <div class="card-body text-start">
                                    <div class="category-text bg-brown ps-1">
                                        <a href="#" class=" card-info text-decoration-none text-three">{{$item->category->nama_kategori}}</a></p>
                                    </div>
                                    <div id="more-char">
                                        <span class="fw-semibold text-one">{{$item->name}}</span>
                                    </div>
                                    <p class="fw-bold my-2 text-one" style="font-size: 1rem;">Rp.{{number_format($item->harga)}},-</p>
                                    <p class="card-info text-two m-0" style="font-size: .7rem;"><i class='bx bxs-star text-warning'></i> 5.0 | Terjual 122</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                <div class="my-3" id="loadMore">
                    <a href="#" class="btn btn-hover w-50 btn-sm"> <i class="fa fa-eye me-2" aria-hidden="true"></i> Lihat Lebih Banyak</a>
                </div>
            </div>
        </div>
    </section>

@endsection