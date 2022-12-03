<?php

namespace App\Filament\Resources\ReadyforPickupResource\Pages;

use App\Filament\Resources\ReadyforPickupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReadyforPickups extends ListRecords
{
    protected static string $resource = ReadyforPickupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
