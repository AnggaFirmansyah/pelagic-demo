<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Pelagic') }}</title>

    <script>
        (function () {
            try {
                var t = localStorage.getItem('theme');
                var dark = t ? t === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.classList.toggle('dark', dark);
            } catch (e) {}
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-base font-sans text-ink antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-2">
        <!-- Brand panel -->
        <div class="relative hidden overflow-hidden bg-panel lg:flex lg:flex-col lg:justify-between lg:p-12">
            <div class="pointer-events-none absolute -left-32 -top-32 h-96 w-96 rounded-full bg-coral/10 blur-3xl" aria-hidden="true"></div>
            <a href="{{ route('home') }}" wire:navigate class="relative flex items-center gap-2 text-lg font-semibold">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M2 15c2.5 0 2.5-5 5-5s2.5 5 5 5 2.5-5 5-5 2.5 5 5 5" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round"/>
                    <circle cx="12" cy="6" r="2.4" fill="var(--color-coral)"/>
                </svg>
                Pelagic
            </a>

            <div class="relative max-w-md">
                <h2 class="text-3xl font-semibold tracking-tight md:text-4xl">One timeline for every signal your stack emits.</h2>
                <p class="mt-4 text-muted">Pelagic fuses logs, metrics, and traces into one queryable view, so you find root cause before the pager fires.</p>
                <ul class="mt-8 space-y-3 text-muted">
                    <li class="flex items-center gap-3"><i class="ph ph-check-circle text-coral"></i> One query language across all three signals</li>
                    <li class="flex items-center gap-3"><i class="ph ph-check-circle text-coral"></i> Service maps that draw themselves</li>
                    <li class="flex items-center gap-3"><i class="ph ph-check-circle text-coral"></i> Alerts shipped with the causing commit</li>
                </ul>
            </div>

            <p class="relative text-sm text-muted">© 2026 Pelagic Labs</p>
        </div>

        <!-- Form side -->
        <div class="flex min-h-screen flex-col">
            <div class="flex items-center justify-between gap-3 p-4">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 font-semibold lg:hidden">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M2 15c2.5 0 2.5-5 5-5s2.5 5 5 5 2.5-5 5-5 2.5 5 5 5" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round"/>
                        <circle cx="12" cy="6" r="2.4" fill="var(--color-coral)"/>
                    </svg>
                    Pelagic
                </a>
                <button type="button" aria-label="Toggle color theme" class="theme-toggle grid h-9 w-9 place-items-center rounded-full border border-edge text-muted transition-colors hover:text-ink">
                    <i class="ph ph-moon text-lg dark:hidden"></i>
                    <i class="ph ph-sun text-lg hidden dark:block"></i>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center px-6 py-12">
                <div class="w-full max-w-md">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
