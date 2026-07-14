<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <div class="mb-8">
        <h1 class="text-3xl font-semibold tracking-tight">Welcome back</h1>
        <p class="mt-2 text-muted">Log in to your Pelagic workspace.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="space-y-4">
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" type="email" name="email" required autofocus autocomplete="username"
                class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="text-sm text-muted transition-colors hover:text-ink" href="{{ route('password.request') }}" wire:navigate>Forgot?</a>
                @endif
            </div>
            <x-text-input wire:model="form.password" id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <label class="flex items-center gap-2 text-sm text-muted">
            <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-edge text-coral focus:ring-coral" name="remember">
            {{ __('Remember me') }}
        </label>

        <x-primary-button class="w-full justify-center py-3">
            {{ __('Log in') }}
        </x-primary-button>
    </form>

    <p class="mt-6 text-center text-sm text-muted">
        New to Pelagic?
        <a href="{{ route('register') }}" wire:navigate class="font-medium text-coral hover:underline">Create an account</a>
    </p>
</div>
