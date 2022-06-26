@extends ('layouts.userapp')
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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center mt-5">Konfirmasi Pembayaran</h2>
            <p class="text-center text-secondary">Setelah melakukan pembayaran, wajib melakukan konfirmasi pembayaran.
            </p>
            <form action="{{route('bayar.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nama Pengirim</label>
                <input type="text" class="form-control" name="nama">

                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon">

                <label for="">Nominal Transfer</label>
                <input type="text" class="form-control" name="nominal">

                <label for="">Tanggal Transaksi</label>
                <input type="text" class="form-control">

                <label class="mt-3" for="bukti">Upload Bukti Transfer</label>
                <div>
                    <input type="file" class="btn" name="bukti">
                </div>
                <div class="text-center mt-3">
                    <input class="btn px-5 py-2 text-white" type="submit" id="" value="Kirim"
                        style="background-color:#3E8412 ;">
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection