<?php

namespace App\Filament\Resources\CompletedRequestsResource\Pages;

use App\Filament\Resources\CompletedRequestsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompletedRequests extends EditRecord
{
    protected static string $resource = CompletedRequestsResource::class;

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
