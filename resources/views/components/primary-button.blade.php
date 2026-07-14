<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-3 bg-coral border border-transparent rounded-full font-semibold text-sm text-[#0a0a0b] hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-coral focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
