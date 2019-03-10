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
    @include('modules/navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('modules/footer')
</div>

<script src="http://static.cash-track.localhost/dist/public.js"></script>
</body>
</html>
