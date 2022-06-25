@extends ('layouts.userApp')
@section ('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            <!--spasing-->
        </div>
        <div class="col-md-5 mt-5" style="border-right: 1px solid gainsboro;">
            <h2 class=" text-center">Detail Pemesanan</h2>
            <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_penerima">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                </div>
                <input type="hidden" name="id" value="1">
                <input type="email" class="form-control mt-3" placeholder="Email" name="email">
                <input type="tel" class="form-control mt-3" placeholder="Telepon" name="telepon">
                <input type="text" class="form-control mt-3" placeholder="Provinsi" name="kelurahan">
                <input type="text" class="form-control mt-3" placeholder="Kabupaten/Kota" name="kab_kota">
                <input type="text" class="form-control mt-3" placeholder="Kecamatan" name="kecamatan">
                <div class="form-row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" id="" placeholder="Desa/Kelurahan" name="kelurahan">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="" placeholder="Kodepos" name="kd_pos">
                    </div>
                </div>
                <input type="text" class="form-control mt-3" id="" placeholder="Alamat Lengkap" name="alamat_lengkap">
                <div class="mt-5">
                    <input type="submit" class="btn mx-auto text-white" value="Buat Pesanan" style="background-color:#3E8412"> <a href="" class="mx-auto text-dark">Kembali ke keranjang</a>
                </div>


        </div>
        <div class="col-md-5 mt-5">
            <table class="table table-borderless">
                <tr class="">
                    <td rowspan="2"><img class="shadow rounded " src=" oils.jpeg" alt="" style="width:100px ;"></td>
                    <td>Produk</td>
                    <td>Harga Satuan</td>
                    <td>Jumlah</td>
                    <td>Subtotal Produk</td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Minyak Kemiri</td>
                    <td>Rp.42.000</td>
                    <td>1</td>
                    <td>Rp.42.000 </td>
                </tr>

            </table>

            <div class="row">
                <input class="col-sm-9 ml-3 form-control text-left" type="text" id="" placeholder="Kode Promo"> <button class="btn text-white col-sm-2" style="background-color:#3E8412 ;">Pakai</button>
            </div>

            <p class="mt-3">Pengiriman : JNE Reguler</p>
            <label class="mr-sm-2" for="inlineFormCustomSelect">Provinsi Tujuan :</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option value="1">DKI Jakarta (Rp.24.000)</option>
                <option value="2">Sumatera Selatan (Rp.10.000)</option>
                <option value="3">Kalimantan Barat (Rp.26.000)</option>
            </select>
            <label class="mt-3">Catatan :</label>
            <input class="form-control text-left" type="text" id="" placeholder="Tinggalkan pesan untuk penjual (Opsional)">

            <div class="text-right mt-3">
                <p>Subtotal Produk Rp.42.000</p>
                <p>Ongkos Kirim Rp.0</p>
                <p>Total Pembayaran <b>Rp.42.000</b></p>
            </div>
            <div class="rounded my-auto p-3" style="background-color: #DDFFC8 ;">
                <h3>
                    Transfer Pembayaran
                </h3>
                <img src="/image/bca.png" alt="logo bca" class="mt-2">

                <div class="row">
                    <div class="col-sm-3">
                        <p class="lead">Bank</p>
                        <p class="lead">No. Rekening</p>
                        <p class="lead">Penerima</p>
                    </div>
                    <div class="col text-left">
                        <p class="lead font-weight-normal">BCA</p>
                        <p class="lead font-weight-normal">2040777861</p>
                        <p class="lead font-weight-normal">Ratnauli Gultom</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-1">
            <!--spasing-->
        </div>
        </form>

    </div>
</div>
@endsection