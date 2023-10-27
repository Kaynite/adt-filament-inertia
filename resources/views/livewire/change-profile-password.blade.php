<div>
    <x-filament-panels::page>
        <x-filament-panels::form wire:submit="save">
            {{ $this->form }}

            <x-filament::button type="submit" form="submit" class="align-right">
                {{ __('filament-panels::resources/pages/edit-record.form.actions.save.label') }}
            </x-filament::button>
        </x-filament-panels::form>
    </x-filament-panels::page>
</div>
