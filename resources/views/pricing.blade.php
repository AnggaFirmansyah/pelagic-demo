@extends('layouts.marketing')

@section('content')
    @include('partials.page-header', [
        'title' => 'Pricing that scales with your traffic.',
        'subtitle' => 'Start free, then pay for what you ingest. No per-host tax, no surprise overage.'
    ])

    <section class="container-page py-20 lg:py-28">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

            <!-- Starter -->
            <div class="reveal rounded-2xl border border-edge bg-panel p-8">
                <h3 class="text-lg font-semibold">Starter</h3>
                <p class="mt-1 text-sm text-muted">For side projects and first probes.</p>
                <div class="mt-6 flex items-baseline gap-1">
                    <span class="font-mono text-4xl font-semibold">$0</span>
                    <span class="text-sm text-muted">/ month</span>
                </div>
                <a href="#" class="mt-6 block rounded-full border border-edge py-3 text-center text-sm font-semibold text-ink transition-colors hover:bg-base">Start free</a>
                <ul class="mt-8 space-y-3 text-sm text-muted">
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 1 workspace</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 7-day retention</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 5 GB ingest per month</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> Community support</li>
                </ul>
            </div>

            <!-- Team (highlighted) -->
            <div class="reveal relative rounded-2xl border-2 border-coral bg-coral-soft p-8">
                <span class="absolute -top-3 left-8 rounded-full bg-coral px-3 py-1 text-xs font-semibold text-[#0a0a0b]">Most teams</span>
                <h3 class="text-lg font-semibold">Team</h3>
                <p class="mt-1 text-sm text-muted">For teams running production.</p>
                <div class="mt-6 flex items-baseline gap-1">
                    <span class="font-mono text-4xl font-semibold">$49</span>
                    <span class="text-sm text-muted">/ seat / month</span>
                </div>
                <a href="#" class="mt-6 block rounded-full bg-coral py-3 text-center text-sm font-semibold text-[#0a0a0b] transition-transform hover:-translate-y-px">Start free</a>
                <ul class="mt-8 space-y-3 text-sm text-muted">
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 30-day retention</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 200 GB ingest per month</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> Service maps and anomaly detection</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> Priority support</li>
                </ul>
            </div>

            <!-- Scale -->
            <div class="reveal rounded-2xl border border-edge bg-panel p-8">
                <h3 class="text-lg font-semibold">Scale</h3>
                <p class="mt-1 text-sm text-muted">For platform and multi-region needs.</p>
                <div class="mt-6 flex items-baseline gap-1">
                    <span class="font-mono text-4xl font-semibold">Custom</span>
                </div>
                <a href="#" class="mt-6 block rounded-full border border-edge py-3 text-center text-sm font-semibold text-ink transition-colors hover:bg-base">Contact sales</a>
                <ul class="mt-8 space-y-3 text-sm text-muted">
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> 1-year retention</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> Unlimited regions</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> SSO and data residency</li>
                    <li class="flex items-start gap-3"><i class="ph ph-check text-coral mt-0.5"></i> Dedicated support</li>
                </ul>
            </div>
        </div>

        <p class="mt-10 text-center text-sm text-muted">All plans include the unified query language and unlimited dashboards. Prices shown are illustrative.</p>
    </section>

    @include('partials.cta')
@endsection
