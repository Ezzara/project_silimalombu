@extends ('layouts.adminapp')
@section ('content')

<div class="col-lg-8 pl-5 pt-5 mt-2">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="card w-100">
        <div class="card-header text-white lead">
            Ganti Password Admin
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="{{ route('admin.profile.gantiPass') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 row">
                        <label for="email_admin" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email_admin" readonly value="{{ Auth::user()->email }}">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="password_lama" class="col-sm-2 col-form-label">Password Lama :</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_lama" name="current_password">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="password_baru" class="col-sm-2 col-form-label">Password Baru :</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_baru" name="password">
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="password_baru" class="col-sm-2 col-form-label">Konfirmasi Password Baru :</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_baru" name="confirm_password">
                        </div>
                    </div>

                    <input type="submit" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white"> Batal</a>

                </form>

            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection