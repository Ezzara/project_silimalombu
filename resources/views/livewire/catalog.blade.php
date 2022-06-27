<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mr-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" 
                            placeholder="Silahkan cari produk..." 
                            wire:model="search">
                    </div>
                
            </div>
        </div>
    </div>

    <div class="row">
        <!-- untuk fitur filter -->
        <div class="col-md-2 mx-auto">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item"><a href="" class="text-dark">Filters</a></li>
                
                <select wire:model="option">
                    <option value=" ">Any</option>
                    @foreach ($kategori as $kategori)
                        <option value="{{ $kategori->id }}" name="filter">
                            {{ $kategori->nm_kategori }}
                        </option>
                    @endforeach
                </select>
                
            </ul>
        </div>


        <div class="col-md-10 mx-auto">
            <div class="d-flex justify-content-around">
                <div class="row">

                    @foreach($product as $produk)
                    <div class="column">
                        <a href="{{ route('pembeli.show',$produk->id) }}" class="text-center"><img class=" rounded " src="/image/{{$produk->gambar}}" alt="" style="width:205px; height:205px ;"></a>
                        <p class="mx-auto font-weight-bold mt-2">{{$produk->nm_produk}}</p>
                        <p class="mx-auto">Rp.{{$produk->harga}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>