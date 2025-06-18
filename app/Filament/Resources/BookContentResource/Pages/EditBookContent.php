<?php

namespace App\Filament\Resources\BookContentResource\Pages;

use App\Filament\Resources\BookContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookContent extends EditRecord
{
    protected static string $resource = BookContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
