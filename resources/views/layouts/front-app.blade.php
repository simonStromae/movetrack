<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Simon Stromae">
    <title>@yield('title') · Template</title>

    <!-- Bootstrap core css -->
    <link href="/front-office/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/front-office/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text//front-office/css">

    <!-- Main core css -->
    <link href="/front-office/css/main.css" rel="stylesheet">

    <style>

    </style>
    @notifyCss
</head>
<body class="d-flex flex-column h-100">

@if(!Request::is('/login'))
    @include('layouts.partials.front-office.navbar')
@endif

<div class="main">
    @include('notify::messages')
    @yield('front-content')
</div>

@if(!Request::is('/login'))
    @include('layouts.partials.front-office.footer')
@endif
<script type="text/javascript" src="/front-office/js/jquery.min.js"></script>
<script type="text/javascript" src="/front-office/js/bootstrap.min.js"></script>
@notifyJs
</body>
</html>
