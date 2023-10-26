<?php

namespace App\Filament\Resources\TeamGroupResource\Pages;

use App\Filament\Resources\TeamGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeamGroups extends ListRecords
{
    protected static string $resource = TeamGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
