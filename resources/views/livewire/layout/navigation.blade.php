<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="z-40 flex flex-col border-edge bg-panel border-b lg:fixed lg:inset-y-0 lg:left-0 lg:w-64 lg:border-b-0 lg:border-r" x-data="{ open: false }">
    <div class="flex items-center justify-between p-4 lg:p-5">
        <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 text-lg font-semibold">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M2 15c2.5 0 2.5-5 5-5s2.5 5 5 5 2.5-5 5-5 2.5 5 5 5" stroke="var(--color-coral)" stroke-width="2.2" stroke-linecap="round"/>
                <circle cx="12" cy="6" r="2.4" fill="var(--color-coral)"/>
            </svg>
            Pelagic
        </a>
        <div class="flex items-center gap-2 lg:hidden">
            <button type="button" @click="open = !open" :aria-expanded="open" aria-label="Toggle menu" class="grid h-9 w-9 place-items-center rounded-full border border-edge text-muted transition-colors hover:text-ink">
                <i class="ph ph-list text-lg" x-show="!open"></i>
                <i class="ph ph-x text-lg" x-show="open" x-cloak></i>
            </button>
        </div>
    </div>

    <div class="border-b border-edge lg:flex lg:flex-1 lg:flex-col lg:border-b-0" :class="open ? 'block' : 'hidden'">
        <!-- Profile card (top-left) -->
        <div class="px-5 pb-5 pt-1">
            <div class="flex items-center gap-3 rounded-2xl border border-edge bg-base p-3">
                <img src="https://api.dicebear.com/9.x/initials/svg?seed={{ urlencode(auth()->user()->name) }}&backgroundColor=ff5a3c,ff6a4d&textColor=ffffff"
                     alt="{{ auth()->user()->name }} avatar"
                     class="h-11 w-11 rounded-full bg-coral-soft">
                <div class="min-w-0">
                    <div class="truncate text-sm font-medium" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name">{{ auth()->user()->name }}</div>
                    <div class="truncate text-xs text-muted">{{ auth()->user()->email }}</div>
                </div>
            </div>
        </div>

        <!-- Links -->
        <div class="flex-1 space-y-1 px-3">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                <i class="ph ph-squares-four mr-2"></i> Dashboard
            </x-nav-link>
            <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')" wire:navigate>
                <i class="ph ph-user mr-2"></i> Profile
            </x-nav-link>
        </div>

        <!-- Logout -->
        <div class="p-3">
            <button wire:click="logout" class="w-full rounded-full border border-edge px-4 py-2 text-sm font-semibold text-ink transition-colors hover:bg-base">
                <i class="ph ph-sign-out mr-2"></i> Log out
            </button>
        </div>
    </div>
</nav>
