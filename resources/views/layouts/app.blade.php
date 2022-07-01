<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/des.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    <div class="container-fluid parent">
        <div class="row child">
            <div class="col-md-9 left-login">

                <img src="{{ asset('img/magellanicon.svg') }}" class="login-i" alt="icon">
                <span class="login-t">Magellan <span style="color: black">Performance</span></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="titlel" style="">THE <span style="color:#00B0FF">#1 CALL CENTER</span> SERVICES PROVIDER IN THE PHILLIPINES TRUSTED BY OVER 100+ SMES MONTHLY
                            </p>
                        </div>
                        @yield('content')
                    </div>
                </div>

            </div>
            <div class="col-md-3 right-login"></div>
            <img src="{{ asset('img/middle-icon.svg') }}" alt="micon" class="micon">
        </div>

    </div>
</body>
</html>
