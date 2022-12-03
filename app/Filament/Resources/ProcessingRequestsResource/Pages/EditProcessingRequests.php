<?php

namespace App\Filament\Resources\ProcessingRequestsResource\Pages;

use App\Filament\Resources\ProcessingRequestsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessingRequests extends EditRecord
{
    protected static string $resource = ProcessingRequestsResource::class;

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
