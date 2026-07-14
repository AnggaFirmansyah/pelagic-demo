<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-2xl font-semibold tracking-tight">{{ __('Profile') }}</h2>
            <button type="button" aria-label="Toggle color theme" class="theme-toggle grid h-9 w-9 place-items-center rounded-full border border-edge text-muted transition-colors hover:text-ink">
                <i class="ph ph-moon text-lg dark:hidden"></i>
                <i class="ph ph-sun text-lg hidden dark:block"></i>
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-panel border border-edge sm:rounded-2xl">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

                <div class="p-4 sm:p-8 bg-panel border border-edge sm:rounded-2xl">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

                <div class="p-4 sm:p-8 bg-panel border border-edge sm:rounded-2xl">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
