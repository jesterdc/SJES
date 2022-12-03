<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Filament\Resources\UserResource\Widgets\UsersOverview;
use App\Filament\Resources\UsersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Arr;

class ListUsers extends ListRecords
{
    protected static string $resource = UsersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
    protected function getHeaderWidgets(): array {
        return [
            UsersOverview::class,
        ];
    }
}
