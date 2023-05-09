@extends('layouts.admin')

@section('content')
<section class="py-5 mb-5">
        <div class="container">
            <h3 class="mb-5 fw-semibold text-brown">Data Users <span id="explore"></span></h3>
            <div class="row">
                <div class="col-12">
                    <a href="{{url('datauser')}}" class="btn btn-brown btn-sm " style="color: white; margin-left:95%;">back</a>
                    <div class="data_table">
                        @foreach( $user as $item)
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault01" class="form-label fw-semibold text-one">Nama </label>
                            <input type="text" class="form-control text-two" name="name" id="validationDefault01" value="{{$item->name}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Username</label>
                            <input type="text" class="form-control text-two" name="username" id="validationDefault02" value="{{$item->username}}">
                        </div>
                        <div class="col-md-12 mb-2 mb-3">
                            <label for="validationDefault02 mb-0" class="form-label fw-semibold text-one">Tanggal Lahir</label>
                            <input type="text" class="form-control text-two" name="ttl" id="validationDefault01"  aria-describedby="inputGroupPrepend2" value="{{$item->ttl}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Jenis Kelamin</label>
                            <input type="text" class="form-control text-two" name="gender" id="validationDefault02" value="{{$item->gender}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01" class="form-label fw-semibold text-one">Email </label>
                            <input type="email" class="form-control text-two" name="email" id="validationDefault01" value="{{$item->email}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Telepon</label>
                            <input type="text" class="form-control text-two" name="telepon" id="validationDefault02" value="{{$item->telepon}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault01" class="form-label fw-semibold text-one">Provinsi </label>
                            <input type="text" class="form-control text-two bg-background" name="provinsi" id="validationDefault01" value="{{$item->provinsi}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Kabupaten/Kota</label>
                            <input type="text" class="form-control text-two" name="kabupaten" id="validationDefault02" value="{{$item->kabupaten}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01" class="form-label fw-semibold text-one">Kecamatan </label>
                            <input type="text" class="form-control text-two" name="kecamatan" id="validationDefault01" value="{{$item->kota}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Kode Pos</label>
                            <input type="text" class="form-control text-two" name="pos" id="validationDefault02" value="{{$item->pos}}">
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Alamat Lengkap</label>
                            <textarea class="form-control text-two shadow-sm" placeholder="Leave a comment here" name="alamat" style="min-height: 100px">
                            {{$item->alamat}}
                            </textarea>
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection