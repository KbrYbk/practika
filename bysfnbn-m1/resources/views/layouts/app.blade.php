<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/style.css">

    <!-- ico -->
    <link rel="shortcut icon" href="{{url('img/icon')}}/gamepad.png" type="image/png">
</head>

<body>
    <header id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/catalog') }}">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/where') }}">Где нас найти?</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                        </li>
                        @endif
                        @else
                        @if (!Auth::check() || !Auth::user()->isAdmin())
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin') }}">Админка</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cart') }}">Корзина</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>


    <footer class="text-center text-white">
        <div class="container">

            <div class="row row-cols-3 justify-content-center my-3">
                <div class="col-lg-1">
                    <a class="m-1" href="https://www.youtube.com" target="_blank" role="button"><img class="icon_foot" src="{{url('img/icon')}}/youtube.png" alt="YouTube"></a>
                </div>
                <div class="col-lg-1">
                    <a class="m-1" href="https://vk.com" target="_blank" role="button"><img class="icon_foot" src="{{url('img/icon')}}/vk.png" alt="VK"></a>
                </div>
                <div class="col-lg-1">
                    <a class="m-1" href="https://web.telegram.org/k/" target="_blank" role="button"><img class="icon_foot" src="{{url('img/icon')}}/telegram.png" alt="Telegram"></a>
                </div>
            </div>

        </div>
        <div class="text-center p-3" style="background-color: #594545;">
            © 2023
            <a class="text-white" href="{{ url('/') }}">True Games</a>
        </div>
    </footer>
</body>

</html>