@extends('layouts.admin')

@section('content')

        <div class="container">
            <h3 class="mb-3 fw-semibold text-brown">Export Data Produk <span id="explore"></span></h3>
            <div class="my-2">
            <div class="row">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Pelapis</th>
                                    <th>Deskripsi</th>
                                    <th>Stok</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $item)
                                <tr>
                                    <td style="width: 100px;">{{$item->name}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->harga}}</td>
                                    <td>{{$item->berat}}</td>
                                    <td>{{$item->material}}</td>
                                    <td>{{$item->size}}</td>
                                    <td>{{$item->pelapis}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>{{$item->stok}}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
    @endsection 
    