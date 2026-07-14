@extends('layouts.marketing')

@section('content')
    @include('partials.page-header', [
        'title' => 'Teams that stopped guessing.',
        'subtitle' => 'Engineering groups use Pelagic to trade war rooms for quiet on-call shifts.'
    ])

    @include('partials.logos')

    <!-- Case studies -->
    <section class="container-page py-20 lg:py-28">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <article class="reveal overflow-hidden rounded-2xl border border-edge bg-panel">
                <img class="h-52 w-full object-cover" src="https://loremflickr.com/800/400/warehouse,logistics?lock=3" alt="Holm Logistics operations centre" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/holm-logistics/800/400'">
                <div class="p-6">
                    <div class="font-mono text-3xl font-semibold text-coral">52%</div>
                    <div class="text-sm text-muted">lower mean-time-to-resolve in month one</div>
                    <p class="mt-4 text-muted">"The shared timeline ended the logs-versus-metrics argument for good. We now triage from one screen instead of three."</p>
                    <p class="mt-3 text-sm font-medium">Mara Lindqvist, Staff SRE, Holm Logistics</p>
                </div>
            </article>

            <article class="reveal overflow-hidden rounded-2xl border border-edge bg-panel">
                <img class="h-52 w-full object-cover" src="https://loremflickr.com/800/400/retail,shopping?lock=5" alt="Northwind Retail peak-season dashboard" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/northwind-retail/800/400'">
                <div class="p-6">
                    <div class="font-mono text-3xl font-semibold text-coral">3.1M/s</div>
                    <div class="text-sm text-muted">requests observed through peak season, zero war rooms</div>
                    <p class="mt-4 text-muted">"We used to staff a rotation just to watch dashboards. Pelagic's anomaly detection pages the right person with the cause attached."</p>
                    <p class="mt-3 text-sm font-medium">Dev Okonkwo, VP Infrastructure, Northwind Retail</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Pull quote -->
    <section class="border-y border-edge bg-panel/40">
        <div class="container-page py-20 lg:py-28">
            <figure class="reveal mx-auto max-w-3xl text-center">
                <i class="ph ph-quotes text-4xl text-coral"></i>
                <blockquote class="mt-4 text-balance text-2xl font-medium leading-snug tracking-tight md:text-3xl">
                    Onboarding took an afternoon. By the next on-call, we had already caught a regression before customers noticed.
                </blockquote>
                <figcaption class="mt-6 text-sm text-muted">Priya Nair, Engineering Lead, Cobalt Bank</figcaption>
            </figure>
        </div>
    </section>

    @include('partials.cta')
@endsection
