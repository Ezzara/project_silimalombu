@extends ('layouts.userApp')
@section ('content')
<div class="container-fluid mb-5 pb-5   ">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="text-center mt-5">
                <h2>Notifikasi</h2>
                @foreach ($order as $order)
                <div class="rounded text-left mt-5" style="border: 1px solid">
                    <p class=" mt-3 ml-5">
                        pesanan nomor {{ $order->id}} {{ $order->status }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2">

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