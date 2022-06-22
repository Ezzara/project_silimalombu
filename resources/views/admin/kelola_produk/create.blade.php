@extends('layouts.adminapp')
@section('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Kelola Produk/Tambah Data</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Masukkan Data
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="id_produk" class="col-sm-2 col-form-label">ID Produk :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nm_produk">
                        </div>
                    </div>

                    <div class=" row">
                        <label for="harga_produk" class="col-sm-2 col-form-label">Harga Produk :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="jumlah_stok" class="col-sm-2 col-form-label">Jumlah Stok :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jmlah_stok">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="gambar" class="col-sm-2">Gambar :</label>
                        <div class="col-sm-2">
                            <input type="file" class="btn" name="gambar" value="Pilih Gambar">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="keterangan"></textarea>
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kd_kategori">
                                <option value="1">Oils</option>
                                <option value="2">Buah</option>
                                <option value="3">Sayur</option>
                                <option value="4">Makanan</option>
                                <option value="5">Lainnya</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white" value="Simpan">

                    <a href="{{route('produk.index')}}" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"> Kembali</a>
                </form>

            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection