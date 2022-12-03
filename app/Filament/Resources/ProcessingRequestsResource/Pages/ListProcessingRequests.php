<?php

namespace App\Filament\Resources\ProcessingRequestsResource\Pages;

use App\Filament\Resources\ProcessingRequestsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessingRequests extends ListRecords
{
    protected static string $resource = ProcessingRequestsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
