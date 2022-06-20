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
                    <li class="list-group-item "> <a href="" class="text-dark">Looping foreach</a></li>
                </ul>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="d-flex justify-content-around"> 
                    <div class="d-flex flex-column">
                    @foreach($produk as $produk)
                        <a href="" class="text-center"><img class=" rounded " src="/image/{{$produk->gambar}}" alt="" style="width:75% ;"></a>
                        <h4 class="mx-auto">{{$produk->nm_produk}}</h4>
                        <h4 class="mx-auto">{{$produk->harga}}</h4>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection