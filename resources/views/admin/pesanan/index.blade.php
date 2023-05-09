@extends('layouts.admin')

@section('content')
<section class="py-5 mb-5">
        <div class="container">
            <h3 class="mb-3 fw-semibold text-brown">Data Produk <span></span></h3>
            <div class="my-2">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="bg-brown">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pesanan</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat</th>
                                    <th>status</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach ($pesan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->kode_transaksi}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->status == '0' ?'menunggu pembayaran' :'Dalam Pengiriman'}}</td>
                                    <td>Rp.{{number_format($item->total)}}</td>
                                    <td>
                                        <a href="{{url('adminview-pesan/'.$item->id)}}" class="btn btn-hover" style="background-color: white ">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                                
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