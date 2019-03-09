<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500">

    <link href="http://static.cash-track.localhost/dist/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="app">
    <mdc-layout-app>

        <mdc-toolbar slot="toolbar">
            <!--  toolbar markup here -->
        </mdc-toolbar>

        <mdc-drawer slot="drawer">
            <!--  drawer markup here -->
        </mdc-drawer>

        <main>
            @yield('content')
        </main>

    </mdc-layout-app>
</div>

<script src="http://static.cash-track.localhost/dist/app.js"></script>
</body>
</html>
