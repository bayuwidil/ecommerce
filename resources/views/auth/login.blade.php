@extends('layouts.app')

@section('content')
<section class="py-3 vh-75">
        <div class="container d-flex justify-content-center align-items-center mb-3">
        </div>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white shadow-sm" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-3">
                                <h4 class="fw-bold text-one mb-3">Masuk Akun</h3>
                                <p class="text-two">Belum punya akun di Sanggarpeni ? <a href="{{ route('register') }}" class="text-decoration-none text-five fw-bold">Daftar</a></p>
                            </div>
                            <div class="row">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                        <div class="col-md-12 mb-3" style="text-align:left;">
                                            <label for="validationDefault01" class="form-label label-sign text-two" >{{ __('Email Address') }}</label>
                                            <input type="email" class="form-control text-two bg-white shadow-sm @error('email') is-invalid @enderror" name="email" id="validationDefault01" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3" style="text-align:left;">
                                            <label for="validationDefault02" class="form-label label-sign text-two">{{ __('Password') }}</label>
                                            <input type="password" class="form-control text-two bg-white shadow-sm no-outline border-1 @error('password') is-invalid @enderror" name="password" id="validationDefault01" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mb-3 d-flex justify-content-between">
                                            <div class="remember d-flex justify-content-between">
                                                <input type="checkbox" value="" class="remember me-1" id="checkbox">
                                                <label class="text-two" for="checkbox">
                                                    Ingat Saya !
                                                </label>
                                            </div>

                                            @if (Route::has('password.request'))
                                                <a class="text-decoration-none text-five fw-normal" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="col-md-12 d-grid gap-2 mb-3 py-1">
                                            <button class="btn btn-sign fw-semibold fs-6" type="submit">Masuk</button>
                                        </div>
                                        <div class="col-md-12 d-grid gap-2" style="margin-bottom: -3px;">
                                            <p class="horizontal-line text-two label-sign">Atau masuk dengan</p>
                                        </div>
                                        <div class="col-md-12 d-grid gap-2 w-100 py-1">
                                            <a href="edit biodata.html" class="btn text-one fw-semibold fs-6 d-flex justify-content-center align-items-center w-100" id="btn-google">
                                                <img src="../asset/img/google-logo.png" class="me-2" style="height: 20px;" alt=""> 
                                                Sign in with Google
                                            </a>
                                        </div>
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
