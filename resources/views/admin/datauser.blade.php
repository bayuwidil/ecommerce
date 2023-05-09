@extends('layouts.admin')

@section('content')
<section class="py-5 mb-5">
        <div class="container">
            <h3 class="mb-5 fw-semibold text-brown">Data Users <span id="explore"></span></h3>
            <div class="row">
                <div class="col-12">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="bg-brown">
                                <tr>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->telepon}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a href="{{url('view-users/'.$item->id)}}" class="btn btn-brown" style="color: white;">view</a>
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
    @endsection