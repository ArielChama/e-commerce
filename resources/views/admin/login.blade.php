<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Administração - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url(mix('css/all.css')) }}" rel="stylesheet">
</head>
<body>
    <section>
        <div class="">
            <div class="card card-login col-md-3">
                <div class="card-head pt-4">
                    <h4 class="text-center">Paínel Administrativo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.login') }}" method="post">
                        @csrf
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email: ">
        
                        <input type="password" name="password" class="form-control mb-3" placeholder="Palavra-passe: ">
        
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>