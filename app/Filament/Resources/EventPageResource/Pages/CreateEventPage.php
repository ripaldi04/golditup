<?php

namespace App\Filament\Resources\EventPageResource\Pages;

use App\Filament\Resources\EventPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventPage extends CreateRecord
{
    protected static string $resource = EventPageResource::class;
}
