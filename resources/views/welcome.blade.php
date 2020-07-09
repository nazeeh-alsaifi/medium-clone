<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medium</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #454a4d;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .nav-item{
            font-weight: 800;

        }

        .title {
            font-size: 60px;
        }
        .title2 {
            font-size: 40px;
            font-weight: 800;

        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('/svg/medium-vector-logo.svg')}}"
                 alt="Medium logo"
                 class="pr-3">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">


        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
            </ul>

            <a class="nav-link navbar-icon" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
            <a class="nav-link navbar-icon" href="#"><i class="fa fa-bookmark fa-lg" aria-hidden="true"></i></a>
            <a class="nav-link navbar-icon" href="#"><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a>
            @guest
                @auth
                <button type="button" class="btn btn-outline-secondary font-weight-bold">Upgrade</button>
                    @endauth
            @endguest


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-3">
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                        <button type="button" class="btn btn-success font-weight-bold">Get started</button>


                @else
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                    @endauth
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="">

    <div class="d-flex flex-column align-items-center text-center">
        <div class="title my-4 col-5 ">
            Get smarter about what matters to you.
        </div>

        <div class="title2 my-4 col-6">
            Select what you're into. We'll help you find great things to read.
        </div>

    </div>
</div>
</body>
</html>
