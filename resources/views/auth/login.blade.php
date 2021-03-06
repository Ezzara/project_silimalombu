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
        <div class="col-lg-4 "></div>
        <div class="col-lg-4"></div>

    </div>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4 ">

            <img class="mx-auto d-block" src="{{ asset('image/logo.png') }}" alt="" style="width: 35% ;">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <p>Username/Email</p>
                <input class="form-control shadow-sm" type="text" id="email" name="email">
                <p>Password</p>
                <input class="form-control shadow-sm" type="password" id="" name="password">

                <a href="" class="text-dark float-right">Lupa Password?</a>

                <br>
                <br>


                <input type="submit" class="btn mx-auto d-block pr-5 pl-5 pt-2 pb-2" style="background-color: #3E8412;color:white" value="Masuk">
            </form>
            <br>
            <p class="mx-auto d-block text-center">Belum memiliki akun? <span><a class="text-dark font-weight-bold" href="{{route('register')}}">Daftar</a></span></p>



        </div>
        <div class="col-lg-4 "></div>
    </div>
</div>
@endsection