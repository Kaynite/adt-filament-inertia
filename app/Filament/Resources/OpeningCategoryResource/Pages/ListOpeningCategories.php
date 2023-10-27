<?php

namespace App\Filament\Resources\OpeningCategoryResource\Pages;

use App\Filament\Resources\OpeningCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpeningCategories extends ListRecords
{
    protected static string $resource = OpeningCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
