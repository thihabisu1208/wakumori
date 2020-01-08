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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="selectNav">
        <ul>
            <li class="recordBtn"><img src="/img/record.png" alt="図鑑を見る"></li>
            <li class="logoutBtn"><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">

             <p>森から出る</p></a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf</form></li>
        </ul>
    </nav>


        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
