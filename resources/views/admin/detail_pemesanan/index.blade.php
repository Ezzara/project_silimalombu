@extends('layouts.adminapp')
@section('content')
<div class="col-lg pl-5 pt-5 mt-2">
    <p>Detail Pemesanan</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Detail Pemesanan
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">


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
                            <th>Ubah Status</th>

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
                                @if($order->status == "Belum di Verifikasi")
                                <form action="{{ route('order.update', $order->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="submit" value="{{ $order->status }} ">
                                </form>

                                @else
                                {{ $order->status }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('order.update', $order->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <select name="verif">
                                            <option value="Sudah di Verifikasi">Sudah di Verifikasi</option>
                                            <option value="Biaya Kurang">Biaya Kurang</option>
                                            <option value="Biaya Lebih">Biaya Lebih</option>
                                            
                                        </select>
                                        <input type="submit">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
                <div>
                    <a href="{{route('admin.detail')}}">Lihat Detail Data</a>
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