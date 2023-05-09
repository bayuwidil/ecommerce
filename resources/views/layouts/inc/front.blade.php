<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SanggarPeni</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="../asset/css/style-slick.css">
    <link rel="stylesheet" href="../asset/css/style-detail.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <div class="header d-flex align-items-center p-0">
            <div class="container" >
                <div class="item-header-1 d-flex justify-content-between align-items-center" style="font-size:12px; ">
                    <div class="d-flex">
                        <span class="me-3"><i class="fa fa-mobile-phone" aria-hidden="true"></i> Download SanggarPeni App</span>
                        <!--
                        <span>
                            <a href="" class="me-2 text-two"><i class="fa-brands fa-facebook"></i></a>
                            <a href="" class="me-2 text-two"><i class="fa-brands fa-instagram"></i></a>
                            <a href="" class="me-2 text-two"><i class="fa-brands fa-youtube"></i></a>
                        </span>
                        -->
                    </div>
                    <div class="d-flex">
                        <span class="me-2">Tentang Kami</span>
                        <span>Kontak</span>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.inc.sidebarFront')
    <section class="py-5 mb-5">
        <div class="container">
        @yield('content')
        </div>
        </section>                  

        <footer class="bg-blue text-light pt-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="card border-0 bg-dark">
                        <div class="card-body bg-blue text-justify" style="text-align: justify;"> 
                            <h5 class="card-text fw-bold">SanggarPeni</h5>
                            <p class="card-text">Sanggar Peni merupakan produsen kerajinan batik kayu. Memproduksi aneka macam kerajinan, seperti aksesoris, home decor hingga perabotan rumah tangga. Sanggar Peni telah berdiri sejak tahun 1989</p>
                        </div>
                    </div>
                </div>   
    
                <div class="col-md-4">
                    <div class="card border-0 bg-dark">
                        <div class="card-body bg-blue text-left">
                            <h5 class="card-text fw-bold"><a name="kontak">Kontak Kami</a></h5>
                            <div class="d-flex justify-content-start mb-2">
                                <div class="">
                                    <i class="fas fa-envelope me-3"></i>
                                </div>
                                <div class="">
                                    <p class="card-text">sanggarpeni@yahoo.com</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-2">
                                <div class="">
                                    <i class="fas fa-phone me-3"></i>
                                </div>
                                <div class="">
                                    <p class="card-text">+6285743779847</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-2">
                                <div class="">
                                    <i class="fa-solid fa-location-dot me-3"></i>
                                </div>
                                <div class="">
                                    <p class="card-text">Krebet RT 05, Krebet, Sendangsari, Kec. Pajangan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="col-md-4">
                    <div class="card border-0 bg-dark">
                        <div class="card-body bg-blue text-left">
                            <h5 class="card-text fw-bold">Akses Menu</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><a href="$" class="text-decoration-none text-light">Beranda</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Kategori</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Keranjang</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Notifikasi</a></p>
                                    <p class="card-text mb-3"><a href="#" class="text-decoration-none text-light">Profil</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text"><a href="$" class="text-decoration-none text-light">Wishlist</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Riwayat Belanja</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Syarat & Ketentuan</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Kebijakan Privasi</a></p>
                                    <p class="card-text"><a href="#" class="text-decoration-none text-light">Tentang</a></p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>      
            </div>
    
            <div class="row ">
                <div class="col-md-4">
                    <div class="card border-0 bg-dark">
                        <div class="card-body bg-blue text-justify" style="text-align: justify;"> 
                            <h5 class="card-text fw-bold">Download Aplikasi</h5>
                            <p class="card-text">Selain dapat diakses melalui website, Sanggarpeni juga dapat diakses menggunakan aplikasi mobile. Yuk download aplikasi SanggarPeni !</p>
                            <div class="d-flex justify-content-start">
                                <div class="me-3">
                                    <a href="#" class="text-decoration-none"><img src="../asset/img/Google_Play-Badge-Logo 1.png" style="width: 8vw;" alt=""></a>
                                </div>
                                <div class="">
                                    <a href="#" class="text-decoration-none"><img src="../asset/img/App_Store_(iOS)-Badge-Logo 1.png" style="width: 8vw;" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
                <div class="col-md-8">
                    <div class="card border-0 bg-dark">
                        <div class="card-body bg-blue text-justify" style="text-align: justify;"> 
                            <h5 class="card-text fw-bold">Mitra SanggarPeni</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div> 
            </div>
    
        </div>
        <div class="py-1 mt-4 text-center justify-content-center bg-brown">
            <span class="ps-1">&copy;All Copyrights SanggarPeni</span>
        </div>
    </footer>
    
    
    <!--alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <!--Click Img Product-->
    <script type="text/javascript" src="../asset/js/click-img.js"></script>

    <!--Input Button-->
    <script type="text/javascript" src="../asset/js/add-btn.js"></script>

    <!-- JQuery -->
        
        <!--Load More-->
        <script type="text/javascript" src="../asset/js/load-more.js"></script>
    
    <!-- Slick JS CDN-->    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- End -->
    
    <!-- Script for Slick-->
    <script type="text/javascript" src="../asset/js/slider.js"></script>
    <script type="text/javascript" src="../asset/js/slider-popular.js"></script>
    <script type="text/javascript" src="../asset/js/slider-best-seller.js"></script>
    <!-- End -->
    
    <!-- Script Bootstrap + Icon -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <!-- End -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="../asset/js/app.js"></script>
    <script>
        var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/produk-list",
        success: function (response) {
            //console.log(response);
            startAutoComplete(response);
        }
    });
    function startAutoComplete(availableTags) {
        $( "#search_produk" ).autocomplete({
        source: availableTags
        });
    }
    </script>

    <script>
        let more = document.querySelectorAll('.more');
        for (let i = 0; i<more.length; i++) {
            more[i].addEventListener('click', function(){
                more[i].parentNode.classList.toggle('active-link')
            })
        }
    </script>

    <script>
        function copyURL() {      
        var elem = document.createElement("textarea");      
        document.body.appendChild(elem);      
        elem.value = location.href;      
        elem.select();      
        document.execCommand("copy");      
        document.body.removeChild(elem);      
        //window.alert("Link berhasil anda salin !");
        }
    </script>
    <script> 
  $(document).ready(function (){

    
    $('.addToChartBtn').click(function (e){
      e.preventDefault();

      var id_produk = $(this).closest('.product_data').find('.id_produk').val();
      var jumlah = $(this).closest('.product_data').find('.qty-input').val();
        
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      $.ajax({
        method: "POST",
        url: "/add-to-keranjang",
        data: {
            'id_produk': id_produk,
            'jumlah': jumlah,
        },
        dataType: "json",
        success: function (response){
            swal(response.status);
        }
      });
    });

    
      $('.increment-btn').click(function (e){
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10){
          value++;
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
      });

      $('.decrement-btn').click(function (e){
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1){
          value--;
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
      });
      
      
    
  });
</script>


@livewireScripts
</body>
</html>
