@extends('layouts.app')

@section('content')
<section class=" vh-75">
        <div class="container d-flex justify-content-center align-items-center py-3">
        </div>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-7 col-lg-7 col-xl-7">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                            <img src="../asset/img/Untitled-1.png" class="p-0 w-75"  alt="">
                        </div>
                        <div class="col-md-12 text-center m-0">
                            <h3 class="fw-bold text-one">Belanja Kerajinan di SanggarPeni</h5>
                            <p class="text-two">Temukan aneka kerajinan yang anda cari disini !</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-5 col-lg-5 col-xl-5">
                    <div class="card bg-white shadow-sm" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-4">
                                <h4 class="fw-bold text-one mb-3">Daftar Sekarang !</h3>
                                <p class="text-two">Sudah punya akun di Sanggarpeni ? <a href="{{ route('login') }}" class="text-decoration-none text-five fw-bold">Masuk</a></p>
                            </div>
                            <div class="row">
                            <form method="POST" class="px-1" action="{{ route('register') }}">
                            @csrf
                                    <div class="col-md-12 d-grid gap-2 mb-4">
                                        <a href="edit biodata.html" class="btn text-one fw-semibold fs-6 d-flex justify-content-center align-items-center" id="btn-google">
                                            <img src="../asset/img/google-logo.png" class="me-2" style="height: 20px;" alt=""> Sign up with Google</a>
                                    </div>
                                    <div class="col-md-12 d-grid gap-2" style=" margin-bottom: -10px;">
                                        <p class="horizontal-line label-sign text-two">Atau daftar dengan</p>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-0 pt-0" style="text-align:left;">
                                            <label for="validationDefault01" class="form-label label-sign text-two" >Nama </label>
                                                <input id="name" type="text" class="form-control text-two bg-white shadow-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                        <div class="col-md-12 mb-3 mt-0 pt-0" style="text-align:left;">
                                            <label for="validationDefault01" class="form-label label-sign text-two" >Email </label>
                                            <input type="email" class="form-control text-two bg-white shadow-sm @error('email') is-invalid @enderror" name="email" id="validationDefault01" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-4" style="text-align:left;">
                                            <label for="validationDefault02" class="form-label label-sign text-two">Password</label>
                                            <input type="password" class="form-control text-two fs-6 bg-white shadow-sm no-outline border-1 @error('password') is-invalid @enderror" name="password" id="validationDefault01" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-4" style="text-align:left;">
                                            <label for="validationDefault02" class="form-label label-sign text-two">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="col-md-12 d-grid gap-2 mb-4">
                                            <button class="btn btn-sign fw-semibold fs-6" type="submit">Daftar</button>
                                        </div>
                                </form>	
                            </div>
                            <div class="term-condition">
                                <p class="text-two label-sign">Dengan mendaftar, saya menyetujui <a href="#" class="text-decoration-none text-five fw-bold">Syarat & Ketentuan</a> serta <a href="#" class="text-decoration-none text-five fw-bold">Kebijakan Privasi</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
