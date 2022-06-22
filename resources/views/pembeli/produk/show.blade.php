@extends ('layouts.userapp')
@section ('content')
<div class="container-fluid">
    <div class="row my-5 pb-5">
        <!--blank space-->
    </div>
    <div class="row ">
        <div class="col-md-3 text-right">
            <img class="shadow rounded " src="/image/{{$produk->gambar}}" alt="" style="width:70% ;">
        </div>
        <div class="col-md-3 text-left ml-5">
            <h4><u>{{ $produk->nm_produk}}</u></h4>
            <p>Rp. {{ $produk->harga}}</p>
            <div class="rounded" style="background-color: #DDFFC8 ; width: 75%">
                <p>
                    Keterangan :
                </p>
                <p>
                    {{$produk->keterangan}}
                </p>
            </div>
            <p>Stock: <b>10</b></p>
            <form action= "{{ route('add.to.cart', $produk->id) }}" method="GET" >
                @csrf
                <span>Masukkan Jumlah: </span><input type="number" style="width: 10%;" name='jumlah'>  
                <input type="submit" class="btn shadow-md mt-3 ml-5 py-2 text-white" value="Masukkan Keranjang"
                    style="background-color: #3E8412;">
            </form>
        </div>
        <div class="col-md-6 ">

        </div>

    </div>
</div>
@endsection