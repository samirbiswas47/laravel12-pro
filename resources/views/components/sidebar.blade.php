<div 
    x-data="{ 
        isOpen: true, 
        darkMode: localStorage.getItem('theme') === 'dark' 
    }"
    x-init="darkMode ? document.documentElement.classList.add('dark') : ''"
    class="relative z-10 transition-all duration-300 ease-in-out flex-shrink-0"
    :class="isOpen ? 'w-64' : 'w-20'"
>

    <div class="h-full bg-white dark:bg-[#1e1e1e] backdrop-blur-md p-4 flex flex-col border-r border-gray-200 dark:border-[#2f2f2f]">

        {{-- Toggle Sidebar Button --}}
        <div class="flex justify-end mb-2">
            <button
                @click="isOpen = !isOpen"
                class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#2f2f2f] transition-colors"
            >
                <i class="fas fa-bars text-gray-800 dark:text-white text-lg"></i>
            </button>
        </div>

        {{-- Sidebar Links --}}
        <div class="flex-grow">
            @foreach($menu as $item)
                <a 
                    wire:navigate
                    href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : '#' }}"
                >
                    <div
                        class="group relative flex items-center p-4 text-sm font-medium rounded-lg transition-colors mb-2
                               text-gray-800 dark:text-white 
                               hover:bg-gray-100 dark:hover:bg-[#2f2f2f]
                               {{ request()->routeIs($item['route']) ? 'bg-gray-200 dark:bg-[#2f2f2f]' : '' }}"
                    >
                        <i class="{{ $item['icon'] }} text-lg"></i>

                        <span x-show="isOpen" class="ml-4 whitespace-nowrap">{{ $item['label'] }}</span>

                        {{-- Tooltip on collapsed --}}
                        <div
                            x-show="!isOpen"
                            x-transition
                            class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2
                                   w-max max-w-xs px-2 py-1 text-xs text-white bg-black dark:bg-white dark:text-black
                                   rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-50
                                   pointer-events-none whitespace-nowrap"
                        >
                            {{ $item['label'] }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
