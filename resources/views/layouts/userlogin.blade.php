<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="{{ URL::asset('public/css/admin.css') }}">
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/510de3573f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">



</head>

<body>
    <nav>
        <ul class="nav justify-content-center pt-2 pb-2 shadow-sm">
            <li class="nav-item">
                <a class="nav-link text-white " href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">Tentang</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>