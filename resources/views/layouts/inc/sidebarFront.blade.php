<nav class="navbar bg-blue navbar-expand-lg p-2 h-50">
            <div class="container">
                <h1><a class="navbar-brand text-three fw-normal fs-3" href="/">SanggarPeni </a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex  ms-auto my-4 my-lg-0 m-0" action="{{url('searchproduk')}}" method="POST">
                    @csrf    
                    <div class="input-group mb-0">
                            <input type="search" class="form-control" id="search_produk" name="nama_produk" placeholder="Cari apa ?" aria-label="Search" aria-describedby="button-addon2" style="width:20vw;">
                            <button class="btn btn-brown btn-outline-secondary m-0 input-group-text" type="submit" id="button-addon2"><i class="fa fa-search text-white" aria-hidden="true"></i></button>
                        </div>
                    </form>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-between align-items-center">
                        <li class="nav-item dropdown" >
                            <a class="nav-link active dropdown-toggle text-three" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-list-ul" aria-hidden="true"></i> Kategori</a>
                            <ul class="dropdown-menu text-white" id="dropdown-width "  style="font-size: 14px; width: 250px;"> 
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Perlengkapan Rumah</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Makanan & Minuman</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Hobi & Koleksi</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Souvenir & Pesta</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Aksesoris Fashion</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Perawatan & Kecantikan</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-four px-3" href="#">Mainan Anak</a></li>
                            </ul>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @guest
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-between align-items-center">
                                <li class="nav-item me-2">
                                    <div class="d-grid gap-2 w-100 p-1">
                                        <a class="nav-link text-three btn px-3" id="change-log" href="/login">Masuk</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="d-grid gap-2 w-100 py-1">
                                        <a class="nav-link btn px-3" id="change-sign" href="/register">Daftar</a>
                                    </div>
                                </li>
                            @endguest
                            @auth
                            <li class="nav-item">
                                <a class="nav-link text-three" href="{{url('keranjang')}}"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Keranjang
                                    <span class="badge badge-pill bg-brown cart-count">0</span>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link text-three" href="#"> <i class="fa fa-bell-o" aria-hidden="true"></i> Notifikasi</a>
                        </li>     
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-three " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../asset/img/wepik-photo-mode-202276-162011.png" class="img-thumbnail shadow rounded-circle p-0 m-0" id="image-height" alt=""> {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu text-white" style="font-size: 14px; width: 200px;"> 
                                <li>
                                    <div class="row px-3 text-two">
                                        <div class="col-md-4">
                                            <img src="../asset/img/wepik-photo-mode-202276-162011.png" class="img-thumbnail shadow rounded-circle p-0 m-0" style="height: 40px;" alt="">
                                        </div>
                                        <div class="col-md-8 text-left" >
                                            <p class="p-0 mb-0 text-one fw-semibold p-0 m-0" style="font-size: 13px;">{{ Auth::user()->name }}</p>
                                            <a class="text-decoration-none text-two p-0" style="font-size:10px;" href="{{url('data-diri')}}">Lihat Profil <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                <li><hr class="dropdown-divider"></li>
                                <li class="mb-1"><a class="text-decoration-none text-two px-3" href="/belanja">Riwayat Belanja</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-two px-3" href="#">Wishlist</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-two px-3" href="#">Kebijakan Privasi</a></li>
                                <li class="mb-1"><a class="text-decoration-none text-two px-3" href="#">Syarat & Ketentuan</a></li>
                                <li class="mb-1"><hr class="dropdown-divider"></li>
                                
                                <li><a class="text-decoration-none text-two px-3 text-left" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                            @endauth
                        
                    </ul>
                </div>
            </div>
        </nav>

