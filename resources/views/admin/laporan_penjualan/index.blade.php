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
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Produk" name="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-white bg-white" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>

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
                        <tr>
                            <td>
                                <!--foreach data-->
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    </table>
                </div>

                <div class="row mt-3">
                    <button class="btn pr-4 pl-4 mr-3" style=" background-color: #3E8412;color:white">Simpan</button>
                </div>



            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection