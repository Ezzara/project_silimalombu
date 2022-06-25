<!DOCTYPE html>
<html>

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

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand text-black font-weight-bold ml-5" href="{{route('welcome')}}">Ecovillage <br> Silimalombu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-3">
                    <a class="nav-link active" href="{{route('welcome')}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('pembeli.produk')}}">PRODUK</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('pembeli.notif')}}">NOTIFIKASI</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('pembeli.about')}}">TENTANG</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('pembeli.qa')}}">Q&A</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="{{route('user.profile')}}"><i class="fas fa-user fa-2x text-white px-3"></i></a>
                <a href="{{route('cart')}}"> <i class="fas fa-cart-arrow-down fa-2x text-white px-3"></i></a>

                @if (!Auth::guest())
                    {{--
                    <a class="nav-link text-white lead px-3" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    --}}
                    <a href="{{route('user.logout')}}"> Log Out </a>
                @else
                    <a href="{{route('login')}}" class="nav-link text-white lead px-3">Login</a>
                
                    @endif

            </div>
        </div>
    </nav>
    @yield('content')
</body>