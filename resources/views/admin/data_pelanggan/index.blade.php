@extends('layouts.adminapp')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Data Pelanggan</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Pelanggan
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">


                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Tools</th>
                        </tr>
                        @foreach ($user as $user)
                        <tr>
                            <td>{{ $user->uname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->telepon }}</td>
                            <td>{{ $user->jenis_kelamin }}</td>
                            <td>{{ $user->tgl_lahir }}</td>
                            <td>{{ $user->alamat_lengkap }}</td>
                            <td><img src="{{ asset('image/'.$user->foto_profil) }}" style="width:100px"></td>
                            <td>
                                <form action="{{ route('admin.user.delete', $user->id)}}" method="post">

                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                </form>
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