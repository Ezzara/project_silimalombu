@extends ('layouts.adminapp')
@section ('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Detail Pemesanan/Konfirmasi Pembayaran</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Konfirmasi Pembayaran
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="row mt-3">


                </div>

                <div class="row mt-3 ">
                    <table class="table bg-light">
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>Telepon</th>
                            <th>ID Order</th>
                            <th>Nominal Transfer</th>
                            <th>Tanggal Transaksi</th>
                            <th>Upload Bukti Transfer</th>
                            <th>Tools</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->nama_penerima }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nominal }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td><img src="/image/{{ $data->bukti }}" width="100px"></td>
                            <td>
                                <form action="{{ route('order.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete">Delete</button>
                                </form>
                            </td>


                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="row mt-3">
                    <button class="btn pr-4 pl-4 mr-3" style=" background-color: #3E8412;color:white">Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"> Kembali</a>
                </div>



            </blockquote>
        </div>
    </div>
</div>
</div>

@endsection