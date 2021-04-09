<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'E-commerce') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Página inicial</a>
                            </li>

                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a href="{{ route('products.list') }}" class="nav-link">Produtos</a>
                            </li>

                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sessão') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Criar conta') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a href="{{ route('cart') }}" class="nav-link">
                                    Carrinho
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Terminar sessão') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
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

        <footer class="bg-secondary p-2">
            <div class="container mt-5 pt-4 pb-4">
                <div class="row ">
                    <div class="col-md-3 mb-3">
                        <span class="copy">&copy;2020 Todos os direitos reservados.</span>
                    </div>
                    <div class="col-md-3 mb-2">
                        <h4>Empresa</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">E-commerce</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-2">
                        <h4>Comunidades</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Desenvolvedores</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-2">
                        <h4>Redes Sociais</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Facebook</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="" class="nav-link">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>