<?php

namespace App\Filament\Resources\OpeningResource\Pages;

use App\Filament\Resources\OpeningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpening extends EditRecord
{
    protected static string $resource = OpeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
