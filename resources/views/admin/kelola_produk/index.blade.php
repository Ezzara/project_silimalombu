@extends('layouts.adminapp')
@section('content')
<div class="col-lg pl-5 pt-5 mt-2">
    <p>Kelola Produk</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Kelola Produk
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">

                    <div class="col-md-10">
                        <!--Kosong untuk field-->
                    </div>
                    <div class="col-md-2"><a href="{{ route('produk.create') }}" class="lead text-secondary">+ Tambah Data</a></div>

                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>NO</th>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Berat (gram)</th>
                            <th>Harga (Rp)</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Tools</th>
                            <!--looping <a href>-->
                        </tr>
                        @foreach ($data as $produks)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $produks->id }}</td>
                            <td>{{ $produks->nm_produk }}</td>
                            <td>{{ $produks->nm_kategori }}</td>
                            <td>{{ $produks->jmlh_stok }}</td>
                            <td>{{ $produks->berat }}</td>
                            <td>{{ $produks->harga }}</td>
                            <td><img src="/image/{{ $produks->gambar }}" width="100px"></td>
                            <td>{{ $produks->keterangan }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">

                                        <a class="btn" href="{{ route('produk.edit', $produks->id) }}" style="background-color: green; color:white">Edit</a><br>
                                    </div>
                                    <div class="col-sm-3">
                                        <form action="{{ route('produk.destroy', $produks->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit" title="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
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