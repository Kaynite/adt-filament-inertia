<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">User details</x-slot>

        <x-filament-panels::form wire:submit="saveProfile">
            {{ $this->updateProfileForm }}

            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        </x-filament-panels::form>
    </x-filament::section>

    <x-filament::section>
        <x-slot name="heading">Change Password</x-slot>
        <x-filament-panels::form wire:submit="updatePassword">
            {{ $this->changePasswordForm }}

            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        </x-filament-panels::form>
    </x-filament::section>
</x-filament-panels::page>
