@extends ('layouts.userapp')
@section ('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10 mt-5">
                <h3>Keranjang Belanja</h3>
                <div class="rounded shadow-md mt-4 py-3" style="background-color:#DDFFC8 ;">
                    <table class="table table-borderless">
                        <tr>
                            <th></th>
                            <th>Produk</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Harga Total</th>
                            <th>Aksi</th>
                        </tr>
                        @if(session('cart'))
                            @foreach (session('cart') as $id => $produk)
                            {{--@foreach (session('cart') as $produk)--}}
                            <tr>
                                <td class="text-center"><img class="shadow rounded " src="/image/{{$produk['image']}}" alt="" style="width:205px; height:205px ;"></td>
                                {{--<td>ini{{session()->get('cart')['quantity']}}</td>--}}
                                <td>Rp.{{$produk['price']}}</td>
                                <td>{{$produk['quantity']}}</td>
                                <td>Rp.{{$produk['price'] * $produk['quantity']}}</td>
                                <td>
                                <a href="{{route('cart.remove')}}"class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <br>
                @php ( $key = uniqid())
                <form action="{{ route('keranjang.store') }}" method="post">
                    @csrf
                   
                    <input type="hidden" name="kd_order" value="{{ $key }}">
                    <input type="hidden" name="nm_produk" value="{{$produk['name']}}">
                    <input type="hidden" name="jumlah" value="{{$produk['quantity']}}">
                    <input type="hidden" name="harga_satuan" value="{{$produk['price']}}">
                    <input type="hidden" name="harga_total" value="{{$produk['price'] * $produk['quantity']}}">
                    <input type="hidden" name="gambar" value="{{$produk['image']}}">
                    <input type="submit" class="btn btn-success mr-3 float-right" value="Bayar">
                </form>
                <a class="btn btn-success mr-3 float-right" href="{{ url()->previous() }}"> Kembali</a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

@endsection