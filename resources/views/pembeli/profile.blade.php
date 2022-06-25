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
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6" style="border-right: 1px solid gainsboro;">
            <form action="{{route('profile.update')}}" class="text-secondary" method="post">
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
                        <a href="" class="text-secondary text-center ml-2"><u><b> Ganti Password</b></u></a>
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
                            <input type="radio" id="customRadioInline1" name="jenis_kelamin"
                                class="custom-control-input" value="laki-laki">
                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="jenis_kelamin"
                                class="custom-control-input" value="perempuan">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="jenis_kelamin"
                                class="custom-control-input" value="lainya">
                            <label class="custom-control-label" for="customRadioInline3">Lainnya</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colTelepon" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <select id="inputState" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    <option value="">23</option>
                                    <option value="">24</option>
                                    <option value="">25</option>
                                    <option value="">26</option>
                                    <option value="">27</option>
                                    <option value="">28</option>
                                    <option value="">29</option>
                                    <option value="">30</option>
                                    <option value="">31</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <select id="inputState" class="form-control">
                                    <option value="">Januari</option>
                                    <option value="">Februari</option>
                                    <option value="">Maret</option>
                                    <option value="">April</option>
                                    <option value="">Mei</option>
                                    <option value="">Juni</option>
                                    <option value="">Juli</option>
                                    <option value="">Agustus</option>
                                    <option value="">September</option>
                                    <option value="">Oktober</option>
                                    <option value="">November</option>
                                    <option value="">Desember</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" id="inputZip" placeholder="Tahun" name="tgl_lahir">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colAlamat" value="{{ Auth::user()->alamat_lengkap }}" name="alamat">
                    </div>
                </div>

                <input type="submit" value="Simpan" class="btn float-right text-white px-4 py-2"
                    style="background-color:#3E8412">

            </form>
        </div>

        <div class="col-md-4 text-center my-auto">
            <img src="avatar.png" alt="">
            <div class="center">
                {{--<button class="btn mt-4" onclick="document.getElementById('getFile').click()">Pilih Gambar</button>
                <input type='file' id="getFile" style="display:none" name="foto_profil">--}}
                <input type="file" class="btn mt-4" name="foto_profil" value="Pilih Gambar">
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