<?php

namespace App\Filament\Resources\ReadyforPickupResource\Pages;

use App\Filament\Resources\ReadyforPickupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReadyforPickup extends EditRecord
{
    protected static string $resource = ReadyforPickupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        
        return $this->getResource()::getUrl('index');
    }
}
