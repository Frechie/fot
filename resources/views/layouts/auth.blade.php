<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Headstone Young People&apos;s Platform">
    <meta name="author" content="HYPP: Festival of Talents">
    <meta name="keywords" content="Talent Show">
    <meta name="keywords" content="FOT">
    <meta name="keywords" content="Come show forth God&apos;s potential in you">
    <meta name="keywords" content="Its FOT Revsmped: The new normal...">
    <title>HYPP Festival of Talents</title>
    <link href="{{asset('assets/admin/img/icon/h_favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>

<body>
    @yield('content')
    <footer>
        <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.js') }}"></script>
    </footer>
</body>
</html>