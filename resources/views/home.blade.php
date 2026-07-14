@extends('layouts.marketing')

@section('content')
    <!-- Hero: asymmetric split -->
    <section class="relative overflow-hidden">
        <div class="pointer-events-none absolute -right-40 -top-40 h-96 w-96 rounded-full bg-coral/10 blur-3xl" aria-hidden="true"></div>
        <div class="container-page grid items-center gap-12 py-20 lg:grid-cols-2 lg:py-28">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 rounded-full border border-edge bg-panel px-3 py-1 text-xs text-muted">
                    New: automatic service maps
                </span>
                <h1 class="mt-6 text-balance text-4xl font-semibold leading-none tracking-tight md:text-6xl">
                    <span class="text-coral">One timeline</span> for every signal your stack emits.
                </h1>
                <p class="mt-5 max-w-[52ch] text-base leading-relaxed text-muted">
                    Pelagic fuses logs, metrics, and traces into one queryable view, so you find root cause before the pager fires.
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="{{ route('pricing') }}" class="rounded-full bg-coral px-5 py-3 text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px">Start free</a>
                    <a href="{{ route('product') }}" class="rounded-full border border-edge px-5 py-3 text-sm font-semibold text-ink transition-colors hover:bg-panel">Book a demo</a>
                </div>
            </div>

            <!-- Real product preview (the actual Pelagic UI, miniaturised) -->
            <div class="reveal">
                <div class="rounded-2xl border border-edge bg-panel p-4 shadow-xl shadow-black/5">
                    <div class="flex items-center justify-between border-b border-edge pb-3">
                        <div class="flex items-center gap-2 font-mono text-xs text-muted">
                            <i class="ph ph-broadcast text-coral"></i> production / api-gateway
                        </div>
                        <span class="rounded-md bg-coral-soft px-2 py-0.5 text-xs font-medium text-coral">Live</span>
                    </div>
                    <svg viewBox="0 0 320 110" class="mt-4 h-28 w-full" preserveAspectRatio="none" aria-hidden="true">
                        <defs>
                            <linearGradient id="fill" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="var(--color-coral)" stop-opacity="0.28"/>
                                <stop offset="100%" stop-color="var(--color-coral)" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                        <path d="M0,72 L30,60 L60,76 L90,50 L120,58 L150,40 L180,54 L210,30 L240,46 L270,28 L300,38 L320,32 L320,110 L0,110 Z" fill="url(#fill)"/>
                        <path d="M0,72 L30,60 L60,76 L90,50 L120,58 L150,40 L180,54 L210,30 L240,46 L270,28 L300,38 L320,32" fill="none" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="mt-4 grid grid-cols-3 gap-3 border-t border-edge pt-4">
                        <div>
                            <div class="font-mono text-lg font-semibold">2.4M/s</div>
                            <div class="text-xs text-muted">Throughput</div>
                        </div>
                        <div>
                            <div class="font-mono text-lg font-semibold">38ms</div>
                            <div class="text-xs text-muted">p99 latency</div>
                        </div>
                        <div>
                            <div class="font-mono text-lg font-semibold">0.02%</div>
                            <div class="text-xs text-muted">Error rate</div>
                        </div>
                    </div>
                    <!-- Figures above are illustrative sample data. -->
                </div>
            </div>
        </div>
    </section>

    @include('partials.logos')

    <!-- Capabilities: bento -->
    <section id="capabilities" class="container-page py-20 lg:py-28">
        <div class="reveal max-w-2xl">
            <p class="text-xs font-medium uppercase tracking-[0.18em] text-coral">Capabilities</p>
            <h2 class="mt-3 text-balance text-3xl font-semibold tracking-tight md:text-4xl">Everything you need to read a system in motion.</h2>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-3">
            <article class="reveal group overflow-hidden rounded-2xl border border-edge bg-panel md:col-span-2">
                <img class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" src="https://loremflickr.com/800/400/dashboard,analytics?lock=12" alt="A unified query view across logs, metrics, and traces" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/pelagic-dashboard/800/400'">
                <div class="p-6">
                    <h3 class="text-xl font-semibold tracking-tight">One query language for all three signals</h3>
                    <p class="mt-2 max-w-[60ch] text-muted">Write a single expression and Pelagic resolves it across logs, metrics, and traces. No context switching between three half-built dashboards.</p>
                </div>
            </article>

            <article class="reveal flex flex-col justify-between rounded-2xl border border-edge bg-coral-soft p-6">
                <i class="ph ph-tree-structure text-3xl text-coral"></i>
                <div>
                    <h3 class="text-xl font-semibold tracking-tight">Service maps that draw themselves</h3>
                    <p class="mt-2 text-muted">The dependency graph builds as traffic flows. No manual topology to keep in sync with reality.</p>
                </div>
            </article>

            <article class="reveal rounded-2xl border border-edge bg-panel p-6">
                <i class="ph ph-bell text-3xl text-coral"></i>
                <h3 class="mt-4 text-xl font-semibold tracking-tight">Alerts with context attached</h3>
                <p class="mt-2 text-muted">Every alert ships with the deploying commit, the slowest trace, and the changed config.</p>
            </article>

            <article class="reveal rounded-2xl border border-edge bg-panel p-6">
                <i class="ph ph-git-branch text-3xl text-coral"></i>
                <h3 class="mt-4 text-xl font-semibold tracking-tight">Trace every request end to end</h3>
                <p class="mt-2 text-muted">Follow a single request from edge to database without stitching IDs by hand.</p>
            </article>
        </div>
    </section>

    <!-- How it works -->
    <section id="how" class="border-y border-edge bg-panel/40">
        <div class="container-page py-20 lg:py-28">
            <div class="reveal max-w-2xl">
                <h2 class="text-balance text-3xl font-semibold tracking-tight md:text-4xl">Running in an afternoon, not a quarter.</h2>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-10 md:grid-cols-3">
                <div class="reveal">
                    <i class="ph ph-plug text-3xl text-coral"></i>
                    <h3 class="mt-4 text-lg font-semibold">Connect</h3>
                    <p class="mt-2 text-muted">One agent streams from your existing sinks. Nothing to replace, nothing to babysit.</p>
                </div>
                <div class="reveal">
                    <i class="ph ph-tree-structure text-3xl text-coral"></i>
                    <h3 class="mt-4 text-lg font-semibold">Map dependencies</h3>
                    <p class="mt-2 text-muted">Pelagic learns the topology from live traffic and keeps it current as services change.</p>
                </div>
                <div class="reveal">
                    <i class="ph ph-lightning text-3xl text-coral"></i>
                    <h3 class="mt-4 text-lg font-semibold">Resolve fast</h3>
                    <p class="mt-2 text-muted">Jump from a latency spike to the exact trace in two clicks, with the cause already highlighted.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics band -->
    <section class="container-page py-20 lg:py-24">
        <div class="reveal grid grid-cols-2 gap-8 md:grid-cols-4">
            <div>
                <div class="font-mono text-4xl font-semibold tracking-tight">2.4M/s</div>
                <div class="mt-1 text-sm text-muted">Events ingested per second</div>
            </div>
            <div>
                <div class="font-mono text-4xl font-semibold tracking-tight">38ms</div>
                <div class="mt-1 text-sm text-muted">Median query time</div>
            </div>
            <div>
                <div class="font-mono text-4xl font-semibold tracking-tight">14</div>
                <div class="mt-1 text-sm text-muted">Regions, one pane</div>
            </div>
            <div>
                <div class="font-mono text-4xl font-semibold tracking-tight">99.95%</div>
                <div class="mt-1 text-sm text-muted">Uptime, last 12 months</div>
            </div>
            <!-- Metrics are illustrative sample figures. -->
        </div>
    </section>

    <!-- Testimonial -->
    <section class="border-y border-edge bg-panel/40">
        <div class="container-page py-20 lg:py-28">
            <figure class="reveal mx-auto max-w-3xl text-center">
                <i class="ph ph-quotes text-4xl text-coral"></i>
                <blockquote class="mt-4 text-balance text-2xl font-medium leading-snug tracking-tight md:text-3xl">
                    We cut mean-time-to-detect in half in the first month. The shared timeline ended the logs-versus-metrics argument for good.
                </blockquote>
                <figcaption class="mt-6 text-sm text-muted">
                    Mara Lindqvist, Staff SRE, Holm Logistics
                </figcaption>
            </figure>
        </div>
    </section>

    @include('partials.cta')
@endsection
