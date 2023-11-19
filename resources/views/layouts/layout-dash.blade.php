<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MO.</title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/flatpickr.min.css') }}">
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/theme.min.css') }}" data-skin="default">
    {{-- <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-dark.min.css') }}" data-skin="light"> --}}
    <link rel="stylesheet" href="{{ asset('assets/custom.css') }}">
</head>

<body>
    <div class="app">
        <x-header-dash />
        <x-aside-dash />
        <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        <div class="page-section">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>
