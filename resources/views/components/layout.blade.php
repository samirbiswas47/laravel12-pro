<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    
</head>
<body class="bg-[#121212] text-white">
    <div class="flex h-screen overflow-hidden bg-transparent">
        <x-sidebar />
        <div class="flex flex-col flex-1 overflow-auto">
            <main>
                <x-header />
                <div class="flex-1 overflow-auto relative z-10">
                    <main class="max-w-7xl mx-auto py-4 px-4 lg:px-8 ">
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                            {{$slot}}
                            {{print_r($data)}}
                        </div>
                    </main>
                </div>
                
            </main>
        </div>
    </div>
</body>

</html>