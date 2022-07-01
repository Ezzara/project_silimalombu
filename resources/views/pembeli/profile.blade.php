@extends('layouts.userapp')
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
        <div class="col-md-12">
            <h3 class="mt-5">Profil Saya</h3>
        </div>
    </div>
    <hr>
    <form action="{{route('profile.update')}}" class="text-secondary" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-6" style="border-right: 1px solid gainsboro;">

                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="colUsername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colUsername" value="{{ Auth::user()->uname }}" name="uname">
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
                        <a href="{{ route('pembeli.profile.ganti') }}" class="text-secondary text-center ml-2"><u><b> Ganti Password</b></u></a>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colNama" value="{{ Auth::user()->name }}" name="nama">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colEmail" value="{{ Auth::user()->email }}" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colTelepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="colTelepon" value="{{ Auth::user()->telepon }}" name="telepon">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10 mt-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" class="custom-control-input" value="laki-laki">
                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="jenis_kelamin" class="custom-control-input" value="perempuan">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="jenis_kelamin" class="custom-control-input" value="lainya">
                            <label class="custom-control-label" for="customRadioInline3">Lainnya</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colTgl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colTgl" value="{{ Auth::user()->tgl_lahir }}" name="tgl_lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colAlamat" value="{{ Auth::user()->alamat_lengkap }}" name="alamat">
                    </div>
                </div>

                <input type="submit" value="Simpan" class="btn float-right text-white px-4 py-2" style="background-color:#3E8412">


            </div>

            <div class="col-md-4 text-center my-auto">
                <img src="avatar.png" alt="">
                <div class="center">
                    {{-- test
                <button class="btn mt-4" onclick="document.getElementById('getFile').click()">Pilih Gambar</button>
                <input type='file' id="getFile" style="display:none" name="foto_profil">--}}
                    <input type="file" class="btn mt-4" name="foto_profil" value="">
                </div>
                <div class="text-secondary mt-3">
                    <p>Ukuran Gambar: maks 1 MB</p>
                    <p>Format Gambar: .JPEG, .PNG</p>
                </div>
            </div>
    </form>
</div>
<div class=" col-md-1">
</div>
</form>
</div>

@endsection