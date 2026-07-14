@extends('layouts.marketing')

@section('content')
    @include('partials.page-header', [
        'title' => 'Documentation.',
        'subtitle' => 'From install to first query in under ten minutes.'
    ])

    <section class="container-page grid gap-12 py-20 lg:grid-cols-[220px_1fr] lg:py-24">
        <!-- Sidebar -->
        <aside class="reveal">
            <nav class="space-y-1 text-sm lg:sticky lg:top-24">
                <p class="px-3 py-2 font-semibold text-ink">Get started</p>
                <a href="#install" class="block rounded-lg px-3 py-2 text-muted transition-colors hover:bg-panel hover:text-ink">Install the agent</a>
                <a href="#first-query" class="block rounded-lg px-3 py-2 text-muted transition-colors hover:bg-panel hover:text-ink">Send your first query</a>
                <p class="px-3 py-2 pt-6 font-semibold text-ink">Reference</p>
                <a href="#language" class="block rounded-lg px-3 py-2 text-muted transition-colors hover:bg-panel hover:text-ink">Query language</a>
                <a href="#retention" class="block rounded-lg px-3 py-2 text-muted transition-colors hover:bg-panel hover:text-ink">Retention and storage</a>
            </nav>
        </aside>

        <!-- Content -->
        <div class="reveal max-w-[68ch] space-y-12">
            <div id="install">
                <h2 class="text-2xl font-semibold tracking-tight">Install the agent</h2>
                <p class="mt-3 text-muted">One binary collects from your existing sinks. No agents to babysit on every host.</p>
                <div class="mt-4 rounded-xl border border-edge bg-base p-4 font-mono text-xs leading-relaxed text-muted">
                    brew install pelagic/tap/agent<br>
                    pelagic agent init --token $PELAGIC_TOKEN
                </div>
            </div>

            <div id="first-query">
                <h2 class="text-2xl font-semibold tracking-tight">Send your first query</h2>
                <p class="mt-3 text-muted">Point at a service and ask for the last hour of errors, correlated to traces.</p>
                <div class="mt-4 rounded-xl border border-edge bg-base p-4 font-mono text-xs leading-relaxed text-muted">
                    <span class="text-coral">from</span>(checkout)<br>
                    <span class="text-coral">| where</span> status = 500<br>
                    <span class="text-coral">| window</span> 1h
                </div>
            </div>

            <div id="language">
                <h2 class="text-2xl font-semibold tracking-tight">Query language</h2>
                <p class="mt-3 text-muted">A single pipe syntax spans logs, metrics, and traces. Each stage narrows or reshapes the stream, and the result renders in the same timeline as everything else.</p>
            </div>

            <div id="retention">
                <h2 class="text-2xl font-semibold tracking-tight">Retention and storage</h2>
                <p class="mt-3 text-muted">Raw events land in your own object store. Pelagic queries them in place, so retention is a storage decision, not a vendor lock-in.</p>
            </div>
        </div>
    </section>

    @include('partials.cta')
@endsection
