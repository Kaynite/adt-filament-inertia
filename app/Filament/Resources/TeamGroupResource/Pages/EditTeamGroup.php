<?php

namespace App\Filament\Resources\TeamGroupResource\Pages;

use App\Filament\Resources\TeamGroupResource;
use App\Models\TeamGroup;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditTeamGroup extends EditRecord
{
    protected static string $resource = TeamGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (isset($data['is_top']) && $data['is_top']) {
            TeamGroup::query()->update(['is_top' => false]);
        }

        $record->update($data);

        return $record;
    }
}
