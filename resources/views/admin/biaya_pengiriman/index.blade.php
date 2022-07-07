@extends('layouts.adminapp')
@section('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Data Biaya Pengiriman</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Biaya Pengiriman
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">

                    <div class="col-md-10">
                        <!--Kosong untuk field-->
                    </div>
                    <div class="col-md-2"><a href="{{route('biaya.create')}}" class="lead text-secondary">+ Tambah Data</a></div>

                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>Kode</th>
                            <th>Nama Provinsi</th>
                            <th>Biaya Kirim (Rp.)</th>
                            <th>Tools</th>
                            <!--looping <a href>-->
                        </tr>
                        @foreach ($biaya as $biaya)
                        <tr>
                            <td>
                                {{ $biaya->id }}
                            </td>
                            <td>
                                {{ $biaya->nm_provinsi }}
                            </td>
                            <td>
                                {{ $biaya->biaya_kirim }}
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-2">
                                        <a class="btn" href="{{ route('biaya.edit', $biaya->id) }}" style="background-color: green; color:white">Edit</a><br>
                                    </div>
                                    <div class="col-md">
                                        <form action="{{ route('biaya.destroy', $biaya->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn" type="submit" title="delete">Delete
                                            </button>


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