@extends('layouts.userapp')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-5">Profil Saya</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6" style="border-right: 1px solid gainsboro;">
            <form action="" class="text-secondary">

                <div class="form-group row">
                    <label for="colUsername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colUsername" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="colPassword">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2 col-form-label"></div>
                    <div class="col-sm-10">
                        <a href="" class="text-secondary text-center ml-2"><u><b> Ganti Password</b></u></a>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colNama" value="{{ Auth::user()->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colEmail" value="{{ Auth::user()->email }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colTelepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="colTelepon" value="{{ Auth::user()->telepon }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10 mt-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="text" 
                                class="custom-control-input" value="{{ Auth::user()->jenis_kelamin }}"
                                disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colTelepon" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <input type="disabled" class="form-control" id="inputZip" placeholder="Tahun" value="{{ Auth::user()->tgl_lahir }}">
                </div>

                <div class="form-group row">
                    <label for="colAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colAlamat" value="{{ Auth::user()->alamat_lengkap }}">
                    </div>
                </div>

                <input type="submit" value="Simpan" class="btn float-right text-white px-4 py-2"
                    style="background-color:#3E8412">

            </form>
        </div>

        <div class="col-md-4 text-center my-auto">
            <img src="avatar.png" alt="">
            <div class="center">
                <button class="btn mt-4" onclick="document.getElementById('getFile').click()">Pilih Gambar</button>
                <input type='file' id="getFile" style="display:none">
            </div>
            <div class="text-secondary mt-3">
                <p>Ukuran Gambar: maks 1 MB</p>
                <p>Format Gambar: .JPEG, .PNG</p>
            </div>
        </div>
    </div>
    <div class=" col-md-1">
    </div>
</div>

@endsection