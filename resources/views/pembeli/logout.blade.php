@extends('layouts.userapp')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="rounded align-self-center mt-5 ">
                <h4 class="text-center ">Apakah anda yakin untuk keluar?</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="text-center mt-5">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="btn px-5 mr-2 text-white" style="background-color: #3E8412 ;">
                    Ya
                </a>
                <a href="{{ url()->previous() }}" class="btn px-5 mr-2 text-white" style="background-color: #3E8412 ;">Tidak</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5"></div>
    </div>
</div>
@endsection