<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body 
    x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
    :class="{ 'dark': darkMode }"
    x-init="$watch('darkMode', value => localStorage.setItem('theme', value ? 'dark' : 'light'))"
    class="bg-white text-black dark:bg-[#121212] dark:text-white transition-colors"
>
    <div class="flex h-screen overflow-hidden bg-transparent">
        <x-sidebar />
        <div class="flex flex-col flex-1 overflow-auto">
            <main>
                <x-header />
                <div class="flex-1 overflow-auto relative z-10">
                    <main class="max-w-7xl mx-auto py-4 px-4 lg:px-8 ">
                        {{$slot}}
                    </main>
                </div>

            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
