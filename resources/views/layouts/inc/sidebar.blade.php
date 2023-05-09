<div class="sidebar-nav" >
        <div class="navbar navbar-dark bg-blue fixed-top flex justify-content-between align-items-center py-3" id="sidebar">
            <div class="container">
                <div class="button-sidebar d-flex justify-content-center align-items-center">
                    <a class="fs-4 text-white text-decoration-none me-2 d-flex align-items-center" id="sidebar-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class='bx bx-menu fs-1'></i>
                    </a>
                    <span class="text-white fs-3">SanggarPeni</span>
                </div>

                <div class="offcanvas offcanvas-start px-2 bg-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 250px; min-height: 100vh;">
                    <div class="offcanvas-header"> 
                        <h5 class="offcanvas-title fw-semibold text-four" id="offcanvasExampleLabel"><img src="../asset/img/wepik-photo-mode-202276-162011.png" class="img-thumbnail shadow p-0 m-0" id="image-height" alt=""> SanggarPeni</h6> 
                
                        <button type="button" class="border-0 bg-white d-flex align-items-center fs-6 p-0" data-bs-dismiss="offcanvas"><i class='bx bx-x text-four fs-4'></i></button>
                    </div>
                    <div class="offcanvas-body fs-6" >
                        <div class="dropdown mt-3">
                            <ul class="navbar-nav ms-4">
                                <li class="mb-3" >
                                    <a href="{{ url('dashboard') }}" class="text-decoration-none text-four {{Request::is('dashboard') ? 'active':'' }}">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-grid-alt me-2' ></i>
                                            Dashboard
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3" >
                                    <a href="{{url('categories')}}" class="text-decoration-none text-four {{Request::is('categories') ? 'active':'' }}">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-list-plus me-2' ></i>
                                            Kategori
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url('products')}}" class="text-decoration-none text-four {{Request::is('products') ? 'active':'' }}">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-box me-2'></i>
                                            Data Produk
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url('pesanan')}}" class="text-decoration-none text-four {{Request::is('pesanan') ? 'active':'' }}">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-cart me-2'></i>
                                            Pesanan
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ url('datauser') }}" class="text-decoration-none text-four {{Request::is('datauser') ? 'active':'' }}">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-user me-2' ></i>
                                            Data User
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="" class="text-decoration-none text-four">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-bell me-2'></i>
                                            Notifikasi
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="" class="text-decoration-none text-four">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-wallet me-2'></i>
                                            Pembayaran
                                        </span>
                                    </a>
                                </li>
                                
                                <li class="mb-3">
                                    <a href="" class="text-decoration-none text-four">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-comment-detail me-2'></i>
                                            Penilaian Produk
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-four">
                                        <span class="iem-text d-flex justify-content-start align-items-center">
                                            <i class='bx bx-mail-send me-2'></i>
                                            Ekspedisi
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="offcanvas-footer py-3 d-flex justify-content-between align-items-center fs-6"> 
                            <a class="text-decoration-none text-four px-3 bx bx-log-out" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </div>
                </div>
                <div class="profile">
                    <ul class="navbar-nav">
                        <li>
                            <a href="#" class="text-decoration-none text-three d-flex justify-content-between align-items-center fs-6">
                                <span class="iem-text d-flex align-items-center">
                                    <img src="../asset/img/wepik-photo-mode-202276-162011.png" class="img-thumbnail shadow rounded-circle p-0 m-0" id="image-height" alt="">{{ Auth::user()->name }}
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>