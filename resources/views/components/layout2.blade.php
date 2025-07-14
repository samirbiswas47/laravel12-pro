<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ninja 2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav> navbar {{ $attributes->get('d-name') }}</nav>
    <main>{{$slot}}</main>
</body>
</html>