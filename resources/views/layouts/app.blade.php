<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ asset('/hello') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/support') }}">Support</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Sing in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        @yield('content')
        @yield('contact')
    </div>
</div>
<footer>
    <div class="container">
        <ul class="navbar-nav navber navbar-footer col-md-4">
            <li class="nav-header">Shop</li>
            <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bundles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Subscription</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-footer col-md-4">
            <li class="nav-header">Customer service</li>
            <li class="nav-item">
                <a class="nav-link" href="#">My account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-light navbar-footer col-md-4">
            <li class="nav-item">
                <span>Stay updata</span>
            </li>
            <li class="nav-item">
                <span>Join the mailing list for the latast news</span>
            </li>
            <li class="nav-item">
                <input type="text">
            </li>
        </ul>


    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>