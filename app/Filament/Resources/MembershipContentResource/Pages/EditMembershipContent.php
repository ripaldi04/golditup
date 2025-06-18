<?php

namespace App\Filament\Resources\MembershipContentResource\Pages;

use App\Filament\Resources\MembershipContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembershipContent extends EditRecord
{
    protected static string $resource = MembershipContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
