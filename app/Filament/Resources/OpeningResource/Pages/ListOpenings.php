<?php

namespace App\Filament\Resources\OpeningResource\Pages;

use App\Filament\Resources\OpeningResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenings extends ListRecords
{
    protected static string $resource = OpeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
