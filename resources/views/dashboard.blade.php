<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-2xl font-semibold tracking-tight">Welcome back, {{ auth()->user()->name }}</h2>
            <button type="button" aria-label="Toggle color theme" class="theme-toggle grid h-9 w-9 place-items-center rounded-full border border-edge text-muted transition-colors hover:text-ink">
                <i class="ph ph-moon text-lg dark:hidden"></i>
                <i class="ph ph-sun text-lg hidden dark:block"></i>
            </button>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-coral/30 bg-coral-soft p-5">
                <div>
                    <div class="font-medium">Get the most out of Pelagic</div>
                    <div class="mt-1 text-sm text-muted">Connect your first source and watch live signals in minutes.</div>
                </div>
                <a href="{{ route('docs') }}" wire:navigate class="inline-flex items-center gap-2 rounded-full bg-coral px-4 py-2 text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px">
                    <i class="ph ph-rocket-launch"></i> Read the quickstart
                </a>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="rounded-2xl border border-edge bg-panel p-6">
                    <div class="text-sm text-muted">Services watched</div>
                    <div class="mt-2 font-mono text-3xl font-semibold">18</div>
                </div>
                <div class="rounded-2xl border border-edge bg-panel p-6">
                    <div class="text-sm text-muted">Events per second</div>
                    <div class="mt-2 font-mono text-3xl font-semibold">2.4M</div>
                </div>
                <div class="rounded-2xl border border-edge bg-panel p-6">
                    <div class="text-sm text-muted">Mean time to detect</div>
                    <div class="mt-2 font-mono text-3xl font-semibold text-coral">11m</div>
                </div>
            </div>

            <h3 class="mt-8 text-xs font-semibold uppercase tracking-wider text-muted">Jump back in</h3>
            <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <a href="{{ route('docs') }}" wire:navigate class="group rounded-2xl border border-edge bg-panel p-5 transition hover:-translate-y-px hover:border-coral hover:shadow-[0_10px_30px_-12px_var(--color-coral)]">
                    <i class="ph ph-book-open text-2xl text-coral transition-transform group-hover:scale-110"></i>
                    <div class="mt-3 font-medium">Documentation</div>
                    <div class="mt-1 text-sm text-muted">The unified query language, end to end.</div>
                </a>
                <a href="{{ route('docs') }}" wire:navigate class="group rounded-2xl border border-edge bg-panel p-5 transition hover:-translate-y-px hover:border-coral hover:shadow-[0_10px_30px_-12px_var(--color-coral)]">
                    <i class="ph ph-code text-2xl text-coral transition-transform group-hover:scale-110"></i>
                    <div class="mt-3 font-medium">API reference</div>
                    <div class="mt-1 text-sm text-muted">Ingest and query from any service.</div>
                </a>
                <a href="{{ route('customers') }}" wire:navigate class="group rounded-2xl border border-edge bg-panel p-5 transition hover:-translate-y-px hover:border-coral hover:shadow-[0_10px_30px_-12px_var(--color-coral)]">
                    <i class="ph ph-users-three text-2xl text-coral transition-transform group-hover:scale-110"></i>
                    <div class="mt-3 font-medium">Community</div>
                    <div class="mt-1 text-sm text-muted">See how teams run Pelagic in prod.</div>
                </a>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
                <div class="lg:col-span-2 rounded-2xl border border-edge bg-panel p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold">Recent signals</h3>
                        <span class="text-xs text-muted">Live</span>
                    </div>
                    <ul class="mt-4 divide-y divide-edge">
                        <li class="flex items-center gap-3 py-3">
                            <span class="h-2 w-2 shrink-0 rounded-full bg-coral"></span>
                            <span class="font-mono text-sm">api-gateway</span>
                            <span class="text-sm text-muted">p99 latency crossed 800ms in us-east-1</span>
                            <span class="ml-auto font-mono text-xs text-muted">2m ago</span>
                        </li>
                        <li class="flex items-center gap-3 py-3">
                            <span class="h-2 w-2 shrink-0 rounded-full bg-coral/60"></span>
                            <span class="font-mono text-sm">checkout-svc</span>
                            <span class="text-sm text-muted">error rate above baseline for 4 minutes</span>
                            <span class="ml-auto font-mono text-xs text-muted">9m ago</span>
                        </li>
                        <li class="flex items-center gap-3 py-3">
                            <span class="h-2 w-2 shrink-0 rounded-full bg-coral/40"></span>
                            <span class="font-mono text-sm">worker-pool</span>
                            <span class="text-sm text-muted">queue depth recovered to nominal</span>
                            <span class="ml-auto font-mono text-xs text-muted">21m ago</span>
                        </li>
                    </ul>
                </div>
                <div class="rounded-2xl border border-edge bg-panel p-6">
                    <h3 class="text-lg font-semibold">Connected sources</h3>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li class="flex items-center justify-between"><span class="text-muted">Postgres</span><span class="text-coral">Active</span></li>
                        <li class="flex items-center justify-between"><span class="text-muted">Kubernetes</span><span class="text-coral">Active</span></li>
                        <li class="flex items-center justify-between"><span class="text-muted">Cloudflare</span><span class="text-muted">Not linked</span></li>
                    </ul>
                    <a href="{{ route('docs') }}" wire:navigate class="mt-5 inline-flex items-center gap-2 text-sm font-medium text-coral hover:underline">
                        Link a source <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
