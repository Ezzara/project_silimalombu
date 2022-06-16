@extends('layouts.adminapp')
@section('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Profil</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Data Profil
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="/profile_edit.php">
                    <div class="mb-3 row">
                        <label for="id_admin" class="col-sm-2 col-form-label">ID Admin :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_admin" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_admin" readonly>
                        </div>
                    </div>

                    <div class=" row">
                        <label for="password_admin" class="col-sm-2 col-form-label">Password :</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_admin" readonly>
                        </div>
                    </div>

                    <a href="link ganti pass" class="text-secondary"> <u>Ganti Password</u> </a>

                    <div class="mt-3 row">
                        <label for="email_admin" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email_admin" readonly>
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="telp_admin" class="col-sm-2 col-form-label">Telepon :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telp_admin" readonly>
                        </div>
                    </div>

                    <div class="mt-3 row">
                        <label for="status_admin" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status_admin" value="Aktif" readonly>
                        </div>
                    </div>

                    <button type="submit" class="btn pr-4 pl-4" style="background-color: #3E8412;color:white">Edit</button>

                </form>

            </blockquote>
        </div>
    </div>
</div>
</div>
@endsection