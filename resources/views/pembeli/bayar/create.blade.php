@extends ('layouts.userapp')
@section ('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center mt-5">Konfirmasi Pembayaran</h2>
            <p class="text-center text-secondary">Setelah melakukan pembayaran, wajib melakukan konfirmasi pembayaran.
            </p>
            <form action="{{route('biaya.store')}}" method="post">
                @csrf
                <label for="">Nama Pengirim</label>
                <input type="text" class="form-control" name='nama'>

                <label for="">Telepon</label>
                <input type="text" class="form-control" name='telpon'>

                <label for="">Nominal Transfer</label>
                <input type="text" class="form-control" name='nominal'>

                <label for="">Tanggal Transaksi</label>
                <input type="text" class="form-control">

                <label class="mt-3" for="bukti">Upload Bukti Transfer</label>
                <div>
                    <input type="file" class="btn" id="bukti" value="Pilih Gambar">
                </div>
                <div class="text-center mt-3">
                    <input class="btn px-5 py-2 text-white" type="submit" name="bukti" id="" value="Kirim"
                        style="background-color:#3E8412 ;">
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection