@extends('layouts.admin')

@section('content')
<section class="py-5 mb-5">
        <div class="container">
            <h3 class="mb-3 fw-semibold text-brown">Data Produk <span></span></h3>
            <div class="my-2">
                <button type="button" class="btn btn-success d-flex justify-content-center align-items-center" id="change-2"><a href="{{url('add-product')}}" style="text-decoration: none; color:white;">
                    <i class='bx bx-plus fw-bolder me-2' ></i>
                    <span>Tambah</span>
                    </a>
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="bg-brown">
                                <tr>
                                    <th>Nama</th>
                                    <th>Kode Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Pelapis</th>
                                    <th>Foto</th>
                                    <th>Deskripsi</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td style="width: 100px;">{{$item->name}}</td>
                                    <td>{{$item->kode_produk}}</td>
                                    <td>{{$item->category->nama_kategori}}</td>
                                    <td>{{$item->harga}}</td>
                                    <td>{{$item->berat}}</td>
                                    <td>{{$item->material}}</td>
                                    <td>{{$item->size}}</td>
                                    <td>{{$item->pelapis}}</td>
                                    <td><img src="{{asset('asset/uploads/product/'.$item->image)}}" class="cate-image" alt="image here" ></td>
                                    <td>{!! htmlspecialchars_decode (nl2br($item->deskripsi)) !!}</td>
                                    <td>{{$item->stok}}</td>
                                    <td>
                                        <div class="action d-flex justify-content-center align-items-center">
                                            <a href="{{url('edit-produk/'.$item->id)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                            <a href="{{url('delete-product/'.$item->id)}}"><i class='bx bxs-trash text-red fs-3' ></i></a>
                                        </div>

                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            var table = $('#example').DataTable({
                
                
                
            });
            
            table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

        });
    </script>
@endsection 