<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-red-500 text-white">
    <div class="flex h-screen overflow-hidden bg-transparent">
        <div class="flex flex-col flex-1 overflow-auto">
            <main>{{$slot}}</main>
        </div>
    </div>
</body>

</html>