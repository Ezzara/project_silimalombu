@extends ('layouts.userapp')
@section ('content')
<div class="container-fluid">
    <div class="row">
        <h3 class="mx-auto my-5"> Semua Produk</h3>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="float-right mr-5">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Silahkan cari produk..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-white bg-black" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- untuk fitur filter -->
        <div class="col-md-2 mx-auto">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item"><a href="" class="text-dark">Filters</a></li>
                <li class="list-group-item "> <a href="" class="text-dark"></a></li>
            </ul>
        </div>
        <div class="col-md-10 mx-auto">
            <div class="d-flex justify-content-around">
                <div class="row">

                    @foreach($produk as $produk)
                    <div class="column">
                        <a href="{{ route('produk.show',$produk->id) }}" class="text-center"><img class=" rounded " src="/image/{{$produk->gambar}}" alt="" style="width:205px; height:205px ;"></a>
                        <p class="mx-auto font-weight-bold mt-2">{{$produk->nm_produk}}</p>
                        <p class="mx-auto">Rp.{{$produk->harga}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection