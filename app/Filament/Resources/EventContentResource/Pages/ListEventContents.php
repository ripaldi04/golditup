<?php

namespace App\Filament\Resources\EventContentResource\Pages;

use App\Filament\Resources\EventContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventContents extends ListRecords
{
    protected static string $resource = EventContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
