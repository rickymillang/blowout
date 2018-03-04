<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Blowout') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/blowout_fav.ico') }}">

    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    @yield('custom_css')

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">BO</h1>
            </div>

            <h3>Welcome to <a href="/">BlowOut</a> 🎉</h3>

            @include('template.partials.alerts')

            @yield('content')
        </div>
    </div>

    <script src="{{ asset('template/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
</body>

</html>
