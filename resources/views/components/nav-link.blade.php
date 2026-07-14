@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center rounded-xl px-3 py-2 text-sm font-medium bg-coral-soft text-coral transition-colors'
            : 'flex items-center rounded-xl px-3 py-2 text-sm font-medium text-muted hover:text-ink hover:bg-base transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
