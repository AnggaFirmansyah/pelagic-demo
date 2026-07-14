@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-edge focus:border-coral focus:ring-coral rounded-xl bg-panel text-ink shadow-sm']) }}>
