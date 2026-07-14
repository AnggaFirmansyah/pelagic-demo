<section class="border-b border-edge bg-panel/40">
    <div class="container-page py-16 lg:py-20">
        <h1 class="text-balance text-4xl font-semibold tracking-tight md:text-5xl">{{ $title }}</h1>
        @if(isset($subtitle))
            <p class="mt-4 max-w-[60ch] text-muted">{{ $subtitle }}</p>
        @endif
    </div>
</section>
