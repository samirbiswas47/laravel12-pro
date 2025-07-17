<header class="bg-white dark:bg-[#1e1e1e] shadow-lg border border-gray-200 dark:border-[#1f1f1f] mx-4 sm:mx-6 lg:mx-8 mt-4 mb-2 rounded-lg">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 flex items-center justify-between">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-semibold text-gray-800 dark:text-gray-100">
            Dashboard
        </h1>

        <div class="flex items-center space-x-3 sm:space-x-6">
            {{-- Dark Mode Toggle --}}
            <button
                @click="
                    darkMode = !darkMode;
                    if (darkMode) {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    }
                "
                class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#2f2f2f] transition-colors"
            >
                <template x-if="darkMode">
                    <i class="fas fa-sun text-yellow-400"></i>
                </template>
                <template x-if="!darkMode">
                    <i class="fas fa-moon text-white-800"></i>
                </template>
            </button>

            {{-- GFG Logo --}}
            <img src="{{ asset('images/gfg-gg-logo.svg') }}" alt="Logo"
                 class="rounded-full shadow-md cursor-pointer w-8 h-8" />

            {{-- Notification Icon --}}
            <div class="relative">
                <i class="fa-regular fa-bell text-gray-800 dark:text-gray-100"></i>
            </div>

            {{-- User Info --}}
            <div class="flex items-center space-x-2 sm:space-x-3">
                <img src="{{ asset('images/admin.png') }}" alt="User"
                     class="rounded-full border border-gray-600 w-8 h-8" />
                <span class="hidden sm:block text-gray-800 dark:text-gray-100 font-medium">
                    Samir Biswas
                </span>
            </div>
        </div>
    </div>
</header>
