@extends('layouts.admin')

@section('content')
        <div class="container">
            <h3 class="mb-3 fw-semibold text-brown">Update Kategori<span id="explore"></span></h3>
            <div class="row p-3">
                <div class="col-md-6 p-3 rounded-4">
                    <form action="{{url('update-category',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                        <div class="mb-3">
                            <label for="input-nama_kategori" class="form-label text-one fw-semibold">Nama Kategori</label>
                            <input type="text" class="form-control text-two" id="" name="nama_kategori" value="{{$category->nama_kategori}}">
                        </div>
                        @if($category->image)
                        <div class="mb-3">
                            <img src="{{ asset('asset/uploads/category/'.$category->image) }}" class="cate-image" alt="">
                        @endif
                            <input type="file" class="form-control text-two" name="image" id="validationDefault01" >
                        </div>
                        <div class="col-md d-flex justify-content-center mb-3 text-two">
                            <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-hover w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                        
                    

@endsection 

