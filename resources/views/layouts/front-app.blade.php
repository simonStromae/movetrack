<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Simon Stromae">
    <title>{{ config('app.name', 'MOVe TRACK') }} · @yield('title')</title>

    <!-- Bootstrap core css -->
    <link href="/front-office/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/front-office/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Main core css -->
    <link href="/front-office/css/main.css" rel="stylesheet">

    <style>

    </style>
    @livewireStyles
    @notifyCss
</head>
<body class=" @if(!Request::is('login') && !Request::is('register') && !Request::is('password/reset')) d-flex flex-column h-100 @else bg-primary-2 @endif ">

@if(!Request::is('login') && !Request::is('register') && !Request::is('password/reset'))
    @include('layouts.partials.front-office.navbar')

    <div class="main">
        @yield('front-content')
    </div>

    @include('layouts.partials.front-office.footer')
@else
    @yield('auth-content')
@endif

@include('notify::messages')

@livewireScripts

<script type="text/javascript" src="/front-office/js/jquery.min.js"></script>
<script type="text/javascript" src="/front-office/js/bootstrap.min.js"></script>
@notifyJs
</body>
</html>
