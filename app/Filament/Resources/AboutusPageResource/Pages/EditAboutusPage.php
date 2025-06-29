<?php

namespace App\Filament\Resources\AboutusPageResource\Pages;

use App\Filament\Resources\AboutusPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutusPage extends EditRecord
{
    protected static string $resource = AboutusPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
