<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'medium_clone') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}"></script>
    @stack('script_link')


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>



    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{secure_asset('/svg/medium-vector-logo.svg')}}"
                     alt="Medium logo"
                     class="pr-3">
            </a>
            @auth
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
                <button type="button" class="btn btn-outline-secondary font-weight-bold">Upgrade</button>
        @endauth

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-3">
                    <!-- Authentication Links -->

                    @auth
                        <div class="dropdown navbar-user-dropdown">
                            <button class="btn btn-secondary dropdown-toggle btn-circle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                @if(auth()->user()->hasRole('admin'))
                                <a class="dropdown-item" href="{{route('admin')}}">Admin Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{route('home')}}">Stories</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
@stack('script')
</body>
</html>
