<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'わくわくの森') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('img/saruFace.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="topNav">
            <p>
                <a style="color: #000; text-decoration: none;" href="{{ url('/teacher') }}">{{ config('app.name', 'Laravel') }}</a>
            </p>
            <p class="{{ request()->routeIs('teacher.dashboard') ? 'active' : '' }}">
                <a style="text-decoration: none;" href="{{ url('/teacher') }}">Dashboard</a>
            </p>
            <p class="{{ request()->routeIs('teacher.game') ? 'active' : '' }}">
                <a style="text-decoration: none;" href="{{ url('/teacher/game') }}">Game</a>
            </p>
            <p class="{{ request()->routeIs('teacher.tutorial') ? 'active' : '' }}">
                <a style="text-decoration: none;" href="{{ url('/teacher/tutorial') }}">Tutorial</a>
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf

                <p class="buttons">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
                </p>
            </form>
        </div>

        <main class="container" id="teacher">
            @yield('content')
        </main>
    </div>
</body>
</html>
