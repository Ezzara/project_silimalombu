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
        <div class="col-md-12">
            <h3 class="mt-5">Ganti Password</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <form action="{{ route('pembeli.profile.gantiPass') }}" method="post">
                @csrf
                <div class="form-group row mt-5">
                    <label for="colPassword" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="colPassword" name="current_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colPassword" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="colPassword" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colPassword" class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="colPassword" name="confirm_password">
                    </div>
                </div>
                <input type="submit" class="btn text-white mt-4 px-4" style="background-color:#3E8412 ;">
            </form>
        </div>
    </div>
</div>

@endsection