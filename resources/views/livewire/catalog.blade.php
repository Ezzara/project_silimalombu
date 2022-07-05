<div class="container-lg-12">
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mr-5">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Silahkan cari produk..." wire:model="search">
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <!-- untuk fitur filter -->
        <div class="col-md-2">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item">Filters</li>
                <li class="list-group-item">

                    <select class="form-select " size="6" aria-label="size 5 select example" wire:model="option">
                        <option value="">Semua</option>
                        @foreach ($kategori as $kategori)
                        <option value="{{ $kategori->id }}" name="filter">
                            {{ $kategori->nm_kategori }}
                        </option>
                        @endforeach
                    </select>
                </li>

            </ul>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-8 ">
            <div class="row">

                @foreach($product as $produk)
                <div class="column mb-5">
                    <a href="{{ route('pembeli.show',$produk->id) }}" class="text-dark" style="text-decoration:none">
                        <div class="card shadow-sm" style="width: 20rem;">
                            <img class="card-img-top mx-auto" src="/image/{{$produk->gambar}}" alt="Card image cap" style="width:100%; height:270px ;">
                            <div class=" card-body">
                                <h3 class=""><b>Rp.{{$produk->harga}}</b></h3>
                                <p class="card-text lead  mt-2 ">{{$produk->nm_produk}}</p>
                                <p class="card-text text-secondary">{{$produk->keterangan}}</p>
                            </div>
                        </div>
                        <!-- <img class=" rounded " src="/image/{{$produk->gambar}}" alt="" style="width:205px; height:205px ;"> -->
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>