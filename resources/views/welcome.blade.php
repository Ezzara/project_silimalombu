@extends('layouts.userapp')
@section('content')
<div class="bg-image" style="background-image: url('{{asset ('/image/banner.jpeg')}}');height:85vh;background-repeat:no-repeat; background-size: cover; background-position:center;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);height:85vh;">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="display-1 text-white font-weight-bold shadow ">SELAMAT DATANG <div class="display-1 ml-5 lead">di
                    <i>Website</i> Ecovillage Silimalombu
                    <p class="h3 font-weight-normal"><br>Ecovillage Silimalombu hadir sebagai UKM desa dengan konsep eco-friendly yang bergerak pada <br>sektor
                        pariwisata dan penjualan produk hasil alam. </p>
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <h2 class="mt-3 mb-4">Kategori Produk</h2>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="d-flex justify-content-around">
                <div class="d-flex flex-column">
                    <a href="" class="text-center"><img class=" rounded " src="img/oils.jpeg" alt="" style="width:75% ;"></a>
                    <h3 class="mx-auto">Oils</h3>
                </div>
                <div class="d-flex flex-column">
                    <a href="" class="text-center"><img class=" rounded" src="img/buah.jpeg" alt="" style="width:75% ;"></a>
                    <h3 class="mx-auto">Buah</h3>
                </div>

                <div class="d-flex flex-column">
                    <a href="" class="text-center"><img class=" rounded" src="img/sayur.jpeg" alt="" style="width:75% ;"></a>
                    <h3 class="mx-auto">Sayur</h3>
                </div>

                <div class="d-flex flex-column">
                    <a href="" class="text-center"><img class=" rounded" src="img/makanan.jpeg" alt="" style="width:75% ;"></a>
                    <h3 class="mx-auto">Makanan</h3>
                </div>

                <div class="d-flex flex-column">
                    <a href="" class="text-center"><img class="rounded" src="img/lainnya.jpeg" alt="" style="width:75% ;"></a>
                    <h3 class="mx-auto">Lainnya</h3>
                </div>
            </div>
        </div>
        <div class="col-md-1">

        </div>
    </div>


</div>
@endsection