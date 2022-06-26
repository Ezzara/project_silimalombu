@extends ('layouts.adminapp')
@section ('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Data Biaya Pengiriman /Input Data</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Masukkan Data
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="{{route('biaya.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="kode_biaya" class="col-sm-2 col-form-label">Kode:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_biaya" name="id">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_provinsi" class="col-sm-2 col-form-label">Nama Provinsi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_provinsi" name= "nm_provinsi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_kategori" class="col-sm-2 col-form-label">Biaya Kirim :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_kategori" name="biaya_kirim">
                        </div>
                    </div>
                    <br>



                    <input type="submit" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"
                        value="Simpan">

                    <a href="{{ url()->previous() }}" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"> Kembali</a>
                </form>

            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection