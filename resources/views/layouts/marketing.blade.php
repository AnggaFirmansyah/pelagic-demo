<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pelagic fuses logs, metrics, and traces into one queryable timeline so teams find root cause before the pager fires.">
    <title>@yield('title', 'Pelagic - One timeline for every signal your stack emits')</title>
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
</head>
<body class="antialiased">

<header class="sticky top-0 z-50 border-b border-edge bg-base/80 backdrop-blur-md">
    <div class="container-page flex h-16 items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-semibold tracking-tight">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M2 15c2.5 0 2.5-5 5-5s2.5 5 5 5 2.5-5 5-5 2.5 5 5 5" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round"/>
                <circle cx="12" cy="6" r="2.4" fill="var(--color-coral)"/>
            </svg>
            <span class="text-lg">Pelagic</span>
        </a>

        <nav id="nav-menu" class="max-lg:absolute max-lg:top-full max-lg:left-0 max-lg:right-0 max-lg:hidden max-lg:flex-col max-lg:gap-1 max-lg:border-b max-lg:border-edge max-lg:bg-base max-lg:p-4 max-lg:shadow-xl lg:flex lg:items-center lg:gap-8">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-ink' : 'text-muted hover:text-ink' }} text-sm transition-colors max-lg:w-full max-lg:px-3 max-lg:py-2.5 max-lg:rounded-lg">Home</a>
            <a href="{{ route('product') }}" class="{{ request()->routeIs('product') ? 'text-ink' : 'text-muted hover:text-ink' }} text-sm transition-colors max-lg:w-full max-lg:px-3 max-lg:py-2.5 max-lg:rounded-lg">Product</a>
            <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'text-ink' : 'text-muted hover:text-ink' }} text-sm transition-colors max-lg:w-full max-lg:px-3 max-lg:py-2.5 max-lg:rounded-lg">Pricing</a>
            <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'text-ink' : 'text-muted hover:text-ink' }} text-sm transition-colors max-lg:w-full max-lg:px-3 max-lg:py-2.5 max-lg:rounded-lg">Customers</a>
            <a href="{{ route('docs') }}" class="{{ request()->routeIs('docs') ? 'text-ink' : 'text-muted hover:text-ink' }} text-sm transition-colors max-lg:w-full max-lg:px-3 max-lg:py-2.5 max-lg:rounded-lg">Docs</a>
            @auth
                <a href="{{ route('dashboard') }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px max-lg:mt-2 max-lg:hidden max-lg:w-full max-lg:justify-center lg:ml-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="rounded-full border border-edge px-4 py-2 text-sm font-medium text-ink transition-colors hover:bg-base max-lg:mt-2 max-lg:hidden max-lg:w-full max-lg:justify-center lg:ml-2">Log in</a>
                <a href="{{ route('register') }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px max-lg:mt-2 max-lg:w-full max-lg:justify-center lg:ml-2">Start free</a>
            @endauth
        </nav>

        <div class="flex items-center gap-2">
            <button type="button" aria-label="Toggle color theme" class="theme-toggle grid h-9 w-9 place-items-center rounded-full border border-edge text-muted transition-colors hover:text-ink">
                <i class="ph ph-moon text-lg dark:hidden"></i>
                <i class="ph ph-sun text-lg hidden dark:block"></i>
            </button>
            @auth
                <a href="{{ route('dashboard') }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px lg:hidden">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="rounded-full border border-edge px-4 py-2 text-sm font-medium text-ink transition-colors hover:bg-base lg:hidden">Log in</a>
            @endauth
            <button id="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" class="grid h-9 w-9 place-items-center rounded-full border border-edge text-muted lg:hidden">
                <i class="ph ph-list text-lg"></i>
            </button>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="border-t border-edge">
    <div class="container-page grid grid-cols-2 gap-8 py-14 md:grid-cols-4">
        <div class="col-span-2 md:col-span-1">
            <div class="flex items-center gap-2 font-semibold">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M2 15c2.5 0 2.5-5 5-5s2.5 5 5 5 2.5-5 5-5 2.5 5 5 5" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round"/>
                    <circle cx="12" cy="6" r="2.4" fill="var(--color-coral)"/>
                </svg>
                Pelagic
            </div>
            <p class="mt-3 max-w-[28ch] text-sm text-muted">Observability for teams who ship fast.</p>
        </div>
        <div>
            <h3 class="text-sm font-semibold">Product</h3>
            <ul class="mt-3 space-y-2 text-sm text-muted">
                <li><a href="{{ route('product') }}" class="transition-colors hover:text-ink">Features</a></li>
                <li><a href="{{ route('pricing') }}" class="transition-colors hover:text-ink">Pricing</a></li>
                <li><a href="#" class="transition-colors hover:text-ink">Changelog</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-sm font-semibold">Developers</h3>
            <ul class="mt-3 space-y-2 text-sm text-muted">
                <li><a href="{{ route('docs') }}" class="transition-colors hover:text-ink">Documentation</a></li>
                <li><a href="{{ route('docs') }}" class="transition-colors hover:text-ink">API reference</a></li>
                <li><a href="#" class="transition-colors hover:text-ink">Status</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-sm font-semibold">Company</h3>
            <ul class="mt-3 space-y-2 text-sm text-muted">
                <li><a href="{{ route('customers') }}" class="transition-colors hover:text-ink">Customers</a></li>
                <li><a href="#" class="transition-colors hover:text-ink">Blog</a></li>
                <li><a href="#" class="transition-colors hover:text-ink">Careers</a></li>
            </ul>
        </div>
    </div>
    <div class="container-page border-t border-edge py-6 text-sm text-muted">
        © 2026 Pelagic Labs
    </div>
</footer>

<style>
    .logo { filter: invert(1); }
    .dark .logo { filter: none; }
    #nav-menu.is-open { display: flex; }
</style>

</body>
</html>
