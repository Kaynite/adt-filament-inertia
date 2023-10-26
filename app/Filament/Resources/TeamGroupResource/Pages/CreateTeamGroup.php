<?php

namespace App\Filament\Resources\TeamGroupResource\Pages;

use App\Filament\Resources\TeamGroupResource;
use App\Models\TeamGroup;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateTeamGroup extends CreateRecord
{
    protected static string $resource = TeamGroupResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        if (isset($data['is_top']) && $data['is_top']) {
            TeamGroup::query()->update(['is_top' => false]);
        }

        return static::getModel()::create($data);
    }
}
