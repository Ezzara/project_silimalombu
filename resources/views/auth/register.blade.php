@extends('layouts.userlogin')

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
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4 ">
            <img class="mx-auto d-block" src="{{ asset('image/logo.png') }}" alt="" style="width: 35% ;">
            <form class="" method="POST" action="{{ route('register') }}">
                @csrf
                <p>Username</p>
                <input class="form-control shadow-sm mb-2" type="text" id="username" name="uname" value="">
                <p>Email</p>
                <input class="form-control shadow-sm mb-2" type="email" id="email" name="email" value="">
                <p>Password</p>
                <input class="form-control shadow-sm mb-2" type="password" id="password" name="password" value="">
                <p>Nama</p>
                <input class="form-control shadow-sm mb-2" type="text" id="nama" name="name" value="">
                <p>Telepon</p>
                <input class="form-control shadow-sm" type="text" id="telepon" name="telepon" value="">

                <br><br>

                <input type="submit" class="btn mx-auto d-block pr-5 pl-5 pt-2 pb-2" style="background-color: #3E8412;color:white" value="Daftar">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection