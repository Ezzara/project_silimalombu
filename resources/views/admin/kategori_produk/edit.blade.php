@extends ('layouts.adminapp')
@section ('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Data Kategori Produk/Input Data</p>
    <div class="card w-100">
        <div class="card-header text-white lead">
            Masukkan Data
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="{{route('kategori.update',$kategori->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3 row">
                        <label for="kode_kategori" class="col-sm-2 col-form-label">Kode:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_kategori" name="id" disabled value="{{$kategori->id}}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_kategori" name="nm_kategori">
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