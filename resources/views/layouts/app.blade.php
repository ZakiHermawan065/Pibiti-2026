<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            @laravelPWA
        @endif
        <!-- Cek localStorage dan sistem preference untuk tema -->
        <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

    </head>
    <body>
        <div class="flex min-h-screen">
            <aside class="hidden md:block w-64 bg-slate-800 text-white p-6" id="aside">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-x font-bold">
                            Smart Notes AI
                        </h1>
                        
                        <!-- Tombol Toggle -->
                        <button onclick="toggleTheme()" class="p-2 bg-slate-700 hover:bg-slate-600 rounded-lg text-gray-200 transition-colors" title="Toggle Theme">
                            <svg id="theme-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                        </button>
                    </div>

                    <nav>
                        <a href="/" class="block">Dashboard</a>
                        <a href="/notes" class="block">Notes</a>
                        <a href="/quiz" class="block">Quiz</a>
                    </nav>
                </div>
            </aside>

            <!-- Fungsi Toggle Theme -->
            <script>
                function toggleTheme() {
                    const html = document.documentElement;
                    const themeIcon = document.getElementById('theme-icon');
                    
                    if (html.classList.contains('dark')) {
                        html.classList.remove('dark');
                        localStorage.theme = 'light';
                        // Ubah ke icon Bulan
                        themeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>';
                    } else {
                        html.classList.add('dark');
                        localStorage.theme = 'dark';
                        // Ubah ke icon Matahari
                        themeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>';
                    }
                }

                // Sesuaikan icon saat halaman pertama dimuat
                document.addEventListener('DOMContentLoaded', () => {
                    if (document.documentElement.classList.contains('dark')) {
                        document.getElementById('theme-icon').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>';
                    }
                });
            </script>

            <main class="flex-1 bg-slate-100 dark:bg-slate-900 transition-colors">
                <header class="bg-white dark:bg-slate-800 border-b dark:border-slate-700 px-6 py-4 flex justify-between text-slate-800 dark:text-slate-100 transition-colors">
                    <div class="flex gap-2">
                        <button class="md:hidden" id="menu-button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <h2 class="font-semibold">
                            Smart Notes AI
                        </h2>
                    </div>
                    
                    <span>Hello, {{ session('username') }}</span>
                </header>

                <div class="p-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
