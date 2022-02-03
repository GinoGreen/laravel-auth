<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Boolpress Admin | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container-fluid justify-content-between">
                    <div>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        @auth
                            <a class="navbar-brand" href="{{ route('admin.index') }}">
                                Dashboard
                            </a>
                            <a class="navbar-brand" href="{{ route('admin.post.index') }}">
                                Elenco post
                            </a>
                            <a class="navbar-brand" href="{{ route('admin.post.create') }}">
                                Crean nuovo post
                            </a>
                        @endauth
                    </div>
                    <div class="navbar-brand">
                        @auth
                            <a class="navbar-brand" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endauth
                        @guest
                        <a class="navbar-brand" href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="navbar-brand" href="{{ route('register') }}">
                            Register
                        </a>
                        @endguest
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
