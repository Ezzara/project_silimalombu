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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        nav {
            background-color: #2E6D07 !important;
        }

        .card-header {
            background-color: #3E8412 !important;
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

        .active {
            background-color: #1B4103 !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand text-black font-weight-bold ml-5" href="{{route('welcome')}}"><img class="rounded-circle" src="{{ asset('image/logo.png') }}" alt="" style="width:65px; height:65px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto nav-pills">
                <li class="nav-item px-3">
                    <a class="nav-link text-white {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('welcome')}}">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white {{ (request()->is('pembeli/produk*')) ? 'active' : '' }}" href="{{route('pembeli.produk')}}">PRODUK</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white {{ (request()->is('pembeli/tentang')) ? 'active' : '' }}" href="{{route('pembeli.about')}}">TENTANG</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white {{ (request()->is('pembeli/qa')) ? 'active' : '' }}" href="{{route('pembeli.qa')}}">FAQ</a>
                </li>

            </ul>
            <div class="form-inline my-2 my-lg-0">
                @if (!Auth::guest())
                <div class="nav-item dropdown mr-5 pr-3">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('image/'.Auth::user()->foto_profil) }}" width="40" height="40" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('user.profile')}}">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('cart')}}">Keranjang</a></li>
                        <li><a class="dropdown-item" href="{{route('pembeli.notif')}}">Notifikasi</a></li>
                        <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
                    </ul>

                </div>

                @else
                @endif

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
                @else
                <a href="{{route('login')}}" class="nav-link text-white lead px-3">Login</a>

                @endif

            </div>
        </div>
    </nav>
    @yield('content')

    @stack('script')
    @livewireScripts

    <!-- Footer -->\
    <footer class="text-center text-lg-start bg-dark text-white mt-5">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-left text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4 text-center">
                            <i class="fas fa-gem me-3"></i>Ecovillage Silimalombu
                        </h6>
                        <p>
                            Ecovillage Silimalombu merupakan suatu UKM yang bergerak pada sektor pariwisata dan penjualan produk lokal. Didirikan oleh Ibu Ratnauli Gultom dan suaminya Thomas UKM ini mengedepankan konsep Eco-farm yang dimana memanfaatkan alam yaitu perkebunan dan pertanian, memberikan kualitas yang baik dalam proses pembuatan produk.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-1 mx-auto mb-4">
                        <!-- Links -->

                    </div>

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto text-center mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase text-center fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Produk</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Notifikasi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Tentang</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">FAQ</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-center">
                            Contact
                        </h6>
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fas fa-home me-3"></i>
                            </div>
                            <div class="col-sm">
                                <p>Silimalombu, Kecamatan Onan Runggu, Kapupaten Samosir, Sumatera Utara, Indonesia, Kodepos 22094.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fas fa-envelope me-3"></i>
                            </div>
                            <div class="col-sm">
                                <p>r(at)laketoba.net</p>
                            </div>
                        </div>

                        <p><i class="fas fa-phone me-3"></i> &nbsp; &nbsp;+ 62 812 6085 8209</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.laketoba.net/">Ecovillagesilimalombu.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>