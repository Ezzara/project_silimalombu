@extends ('layouts.userapp')

@push('script')
    @livewireScripts
@endpush

@section ('content')
<div class="container-fluid">
    <div class="row">
        <h3 class="mx-auto my-5 pl-5"> Semua Produk</h3>
    </div>

    @livewire('catalog')

    {{--
    <form action="{{route('pembeli.produk')}}" method="get">
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mr-5">

                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Silahkan cari produk..." name="keyword" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-white bg-black" type="submit">Cari</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <!-- untuk fitur filter -->
        <div class="col-md-2 mx-auto">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item"><a href="" class="text-dark">Filters</a></li>

                @foreach ($kategori as $kategori)
                <input type="radio" value="{{ $kategori->id }}" name="filter">
                <label>{{ $kategori->nm_kategori }}</label>
                @endforeach
            </ul>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-8 mx-auto">

            @foreach ($produk->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $produk)
                <div class="col-md-4">
                    <a href="{{ route('pembeli.show',$produk->id) }}" class="text-center"><img class=" rounded " src="/image/{{$produk->gambar}}" alt="" style="width:205px; height:205px ;"></a>
                    <p class="mx-auto font-weight-bold mt-2">{{$produk->nm_produk}}</p>
                    <p class="mx-auto">Rp.{{$produk->harga}}</p>
                </div>
                @endforeach
            </div>
            @endforeach

        </div>
        <div class="col-md-1"></div>
    </div>
    </form>

    --}}

</div>
@endsection