@extends('layouts.admin')

@section('content')
<section class="py-5 mb-5">
        <div class="container">
            <h3 class="mb-5 fw-semibold text-brown">Ubah Data Produk <span id="explore"></span></h3>
            <form action="{{url('update-product',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                            @if($product->image)
                                <img src="{{ asset('asset/uploads/product/'.$product->image) }}" class="cate-image" alt="">
                            @endif
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 mb-3">
                                <input type="file" class="form-control text-two" name="image" id="validationDefault01">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 text-two">
                                <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Nama Produk</label>
                                <input type="text" value="{{$product->name}}" class="form-control text-two" name="name" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="kategori" class="form-label fw-semibold text-on">Kategori</label>
                                <select class="form-select">
                                    <option value="">{{$product->category->nama_kategori}}</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Harga</label>
                                <input type="text" value="{{$product->harga}}" class="form-control text-two" name="harga" id="validationDefault01"  required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Berat</label>
                                <input type="text" value="{{$product->berat}}" class="form-control text-two" name="berat" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Material</label>
                                <input type="text" value="{{$product->material}}" class="form-control text-two" name="material" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Size</label>
                                <input type="text" value="{{$product->size}}" class="form-control text-two" name="size" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Pelapis</label>
                                <input type="text" value="{{$product->pelapis}}" class="form-control text-two" name="pelapis" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Stok</label>
                                <input type="number" value="{{$product->stok}}" class="form-control text-two" name="stok" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12"> <!--Maksimal penulisan 500 character-->
                                <label for="validationDefault02" class="form-label fw-semibold text-one" id="editor">Deskripsi</label>
                                <textarea class="form-control text-two shadow-sm" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" required>
                                {{$product->deskripsi}}
                                </textarea>
                                <!--
                                    Tambahkan query htmlspecialchars_decode($produk[deskripsi]) saat menampilkan data dari DB agar tag html hilang
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5 mb-3">
                        <button class="btn btn-hover" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endsection 