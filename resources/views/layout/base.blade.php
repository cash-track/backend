<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="http://static.cash-track.localhost/dist/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="app">
    <v-app light>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-toolbar app></v-toolbar>
        <v-content>
            @yield('content')
        </v-content>
        <v-footer app></v-footer>
    </v-app>
</div>

<script src="http://static.cash-track.localhost/dist/app.js"></script>
</body>
</html>
