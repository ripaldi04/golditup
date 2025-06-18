<?php

namespace App\Filament\Resources\EventContentResource\Pages;

use App\Filament\Resources\EventContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventContent extends EditRecord
{
    protected static string $resource = EventContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
