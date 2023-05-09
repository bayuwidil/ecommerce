@extends ('layouts.inc.front')

@section('content')
<h3>{{$category->nama_kategori}}</h3>
<section class="banner-part mt-2 mb-5">
    <div class="row text-center row-bagr ">
                @foreach($produk as $item)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6 mx-1" id="produk-col">
                        <div class="card card-product text-center shadow-sm">
                            <a href="{{url('detail-prod/'.$item->id)}}" class="text-decoration-none text-one">
                                <img src="{{asset('asset/uploads/product/'.$item->image)}}" class="card-img-top" alt="...">
                                <div class="card-body text-start">
                                    <div class="category-text bg-brown ps-1">
                                        <a href="#" class=" card-info text-decoration-none text-three">{{$category->nama_kategori}}</a></p>
                                    </div>
                                    <div id="more-char">
                                        <span class="fw-semibold text-one">{{$item->name}}</span>
                                    </div>
                                    <p class="fw-bold my-2 text-one" style="font-size: 1rem;">Rp.{{$item->harga}},-</p>
                                    <p class="card-info text-two m-0" style="font-size: .7rem;"><i class='bx bxs-star text-warning'></i> 5.0 | Terjual 122</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
    </div>
</section>
@endsection