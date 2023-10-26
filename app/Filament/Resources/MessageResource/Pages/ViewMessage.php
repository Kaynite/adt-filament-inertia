<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use App\Models\Message;
use Filament\Resources\Pages\ViewRecord;

class ViewMessage extends ViewRecord
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }

    // protected function mutateFormDataBeforeFill(array $data): array
    // {
    //     if (isset($data['is_new']) && $data['is_new']) {
    //         Message::find($data['id'])?->update(['is_new' => false]);
    //     }

    //     return $data;
    // }
}
