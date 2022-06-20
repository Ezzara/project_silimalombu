@extends('layouts.adminapp')
@section('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Detail Pemesanan</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Detail Pemesanan
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
                            <th>NO</th>
                            <th>ID Order</th>
                            <th>Nama Penerima</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Provinsi</th>
                            <th>Kab/Kota</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Kode Pos</th>
                            <th>Alamat Lengkap</th>
                            <th>Kode Promo</th>
                            <th>Catatan</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($order as $order)
                        <tr>

                            <td>
                                {{ ++$i}}
                            </td>
                            <td>
                                {{ $order->id}}
                            </td>
                            <td>
                                {{ $order->nama_penerima }}
                            </td>
                            <td>
                                {{ $order->username }}
                            </td>
                            <td>
                                {{ $order->email }}
                            </td>
                            <td>
                                {{ $order->telepon }}
                            </td>
                            <td>
                                {{ $order->kd_provinsi }}
                            </td>
                            <td>
                                {{ $order->kab_kota }}
                            </td>
                            <td>
                                {{ $order->kecamatan }}
                            </td>
                            <td>
                                {{ $order->kelurahan }}
                            </td>
                            <td>
                                {{ $order->kd_pos }}
                            </td>
                            <td>
                                {{ $order->alamat_lengkap }}
                            </td>
                            <td>
                                {{ $order->kd_promo }}
                            </td>
                            <td>
                                {{ $order->catatan }}
                            </td>
                            <td>
                                {{ $order->status }}
                            </td>

                        </tr>
                    @endforeach
                    </table>
                </div>

                <div class="row mt-3">
                    <button class="btn pr-4 pl-4 mr-3" style=" background-color: #3E8412;color:white">Simpan</button>
                    <a href="" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"> Batal</a>
                </div>



            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection