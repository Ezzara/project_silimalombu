<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/admin.css">
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/510de3573f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        nav {
            background-color: #3E8412 !important;
        }

        .card-header {
            background-color: #3E8412 !important;
        }

        .card-body {
            background-color: #C2FF9B !important;
        }

        tr th {
            font-size: 12px;
        }

        td {
            font-size: 12px;
        }

        .pilih_gambar {
            border: 1px;
        }

        .active {
            background-color: #C2FF9B !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light pt-2 pb-2">
        <a class="navbar-brand ml-5 pl-5" href="#">
            <h2 style="color:white;font-family: 'Roboto', sans-serif;">ECOVILLAGE <br> SILIMALOMBU</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>

        </div>
    </nav>

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class=" pt-3 pb-5 ml-5 pl-4" style="border-right: 1px solid gainsboro; height: max-content;">
                <ul class="nav d-block nav-pills">

                    <li class="nav-link d-flex">
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('admin.profile')}}">{{ Auth::user()->name }}</a>
                    </li>
                    <hr>

                    <li class="nav-link d-flex {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-user fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('admin.profile')}}">Profil</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('produk*')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-box fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('produk.index')}}">Kelola
                            Produk</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('kategori*')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-list fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('kategori.index')}}">Data Kategori
                            Produk</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('order')) ? 'active' : '' }} {{ (request()->is('admin/detail')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-cart-arrow-down fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('order.index')}}">Detail
                            Pemesanan</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('biaya*')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-file-invoice-dollar fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('biaya.index')}}">Data Biaya
                            Pengiriman</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('admin/user_data')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-users fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('admin.userdata')}}">Data Pelanggan</a>
                    </li>

                    <li class="nav-link d-flex {{ (request()->is('admin/penjualan')) ? 'active' : '' }}">
                        <span>
                            <i class="fas fa-file-signature fa-2x text-secondary"></i>
                        </span>
                        <a class="nav-link text-dark font-weight-bold lead" aria-current="page" href="{{route('admin.penjualan')}}">Laporan
                            Penjualan</a>
                    </li>

                    <li class="nav-link d-flex">
                        <span>
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>

                        <a href="{{ route('admin.logout') }}" class="nav-link text-secondary font-weight-bold lead" aria-current="page">
                            Logout
                        </a>
                    </li>

                </ul>
            </div>
            <!--Container-->
            @yield('content')
        </div>
</body>

</html>