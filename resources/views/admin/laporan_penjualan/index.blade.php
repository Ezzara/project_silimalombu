@extends ('layouts.adminapp')
@section ('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Laporan Penjualan</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Laporan Penjualan
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">

                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>Kode</th>
                            <th>ID Order</th>
                            <th>Username</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Alamat</th>
                            <th>Tanggal Transaksi</th>
                        </tr>
                        @foreach ($data as $keranjang)
                        <tr>
                            <td>{{ $keranjang->id }}</td>
                            <td>{{ $keranjang->kd_order }}</td>
                            <td>{{ $keranjang->username }}</td>
                            <td>{{ $keranjang->nm_produk }}</td>
                            <td>{{ $keranjang->jumlah }}</td>
                            <td>{{ $keranjang->alamat_lengkap }}</td>
                            <td>{{ $keranjang->alamat_lengkap }}</td>

                        </tr>
                        @endforeach
                    </table>
                </div>




            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection