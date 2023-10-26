<?php

namespace App\Filament\Resources\JobFairResource\Pages;

use App\Filament\Resources\JobFairResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobFair extends EditRecord
{
    protected static string $resource = JobFairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
