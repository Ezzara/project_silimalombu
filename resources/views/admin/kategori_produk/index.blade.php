@extends('layouts.adminapp')
@section('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Data Kategori Produk</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Kategori Produk
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row">
                    <div class="col-md-6">
                        <!--Kosong untuk field-->
                    </div>
                    <div class="col-md-4">
                        <!--Kosong untuk field-->
                    </div>
                    <div class="col-md-2"><a href="{{}}" class="lead text-secondary">+
                            Tambah Kategori</a></div>

                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>Kode</th>
                            <th>Nama Kategori</th>
                            <th>Tools</th>
                            <!--looping <a href>-->
                        </tr>
                        @foreach ($kategori as $kategoris)
                        <tr>
                            <td> {{ $kategoris->id }} </td>
                            <td> {{ $kategoris->nm_kategori}}</td>
                            <td></td>
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