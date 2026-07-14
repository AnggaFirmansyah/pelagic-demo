@extends('layouts.marketing')

@section('content')
    @include('partials.page-header', [
        'title' => 'Read your system like a book.',
        'subtitle' => 'Pelagic turns raw telemetry into a single, queryable narrative. Here is what that looks like day to day.'
    ])

    <!-- Feature bento -->
    <section class="container-page py-20 lg:py-28">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <article class="reveal rounded-2xl border border-edge bg-panel p-6 md:col-span-2">
                <i class="ph ph-magnifying-glass text-3xl text-coral"></i>
                <h3 class="mt-4 text-xl font-semibold tracking-tight">Search everything at once</h3>
                <p class="mt-2 max-w-[60ch] text-muted">One search box spans logs, metrics, and traces. Filter by service, region, or deploy, then pivot into the raw event without leaving the view.</p>
                <div class="mt-6 rounded-xl border border-edge bg-base p-4 font-mono text-xs leading-relaxed text-muted">
                    <span class="text-coral">from</span>(api-gateway)<br>
                    <span class="text-coral">| where</span> status >= 500<br>
                    <span class="text-coral">| correlate</span> trace | window 5m
                </div>
            </article>

            <article class="reveal flex flex-col justify-between rounded-2xl border border-edge bg-coral-soft p-6">
                <i class="ph ph-shield-check text-3xl text-coral"></i>
                <div>
                    <h3 class="text-xl font-semibold tracking-tight">Guardrails built in</h3>
                    <p class="mt-2 text-muted">Set a budget per service. Pelagic throttles ingestion before a noisy deploy runs up the bill.</p>
                </div>
            </article>

            <article class="reveal rounded-2xl border border-edge bg-panel p-6">
                <i class="ph ph-stack text-3xl text-coral"></i>
                <h3 class="mt-4 text-xl font-semibold tracking-tight">Keep your own data</h3>
                <p class="mt-2 text-muted">Stream to your object store. Pelagic queries it in place, so nothing is locked in.</p>
            </article>

            <article class="reveal rounded-2xl border border-edge bg-panel p-6">
                <i class="ph ph-sparkle text-3xl text-coral"></i>
                <h3 class="mt-4 text-xl font-semibold tracking-tight">Anomaly detection</h3>
                <p class="mt-2 text-muted">Baselines learn your weekly shape and flag the deviations a static threshold would miss.</p>
            </article>
        </div>
    </section>

    <!-- Zigzag: image + text -->
    <section class="border-y border-edge bg-panel/40">
        <div class="container-page grid items-center gap-12 py-20 lg:grid-cols-2 lg:py-28">
            <div class="reveal order-2 lg:order-1">
                <h2 class="text-balance text-3xl font-semibold tracking-tight md:text-4xl">From a spike to the commit in two clicks.</h2>
                <p class="mt-4 max-w-[55ch] text-muted">Pelagic links every trace to the deploy that shipped it. When latency climbs, the suspect change is already highlighted, with the author and the diff one click away.</p>
                <ul class="mt-6 space-y-3 text-muted">
                    <li class="flex items-start gap-3"><i class="ph ph-check-circle text-coral mt-0.5"></i> Automatic deploy annotations on every chart</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check-circle text-coral mt-0.5"></i> Blame without leaving the timeline</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check-circle text-coral mt-0.5"></i> Rollback links posted back to your CI</li>
                </ul>
            </div>
            <div class="reveal order-1 lg:order-2">
                <img class="rounded-2xl border border-edge object-cover" src="https://loremflickr.com/800/600/code,software?lock=7" alt="A trace linked to the deploy that introduced latency" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/pelagic-code/800/600'">
            </div>
        </div>
    </section>

    @include('partials.cta')
@endsection
