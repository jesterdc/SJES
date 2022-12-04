<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\ProcessingRequests;
use App\Models\ReadytoPickup;
use App\Models\StudentRequest;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UsersOverview extends BaseWidget
{
    
    protected function getCards(): array
    {
        return [
            Card::make('All Users', User::all()->count()),
            Card::make('Total Requests', StudentRequest::all()->count() + ProcessingRequests::all()->count() + ReadytoPickup::all()->count()),
            Card::make('Requests on Process', ProcessingRequests::all()->count()),
            Card::make('Documents Ready For Pickup', ReadytoPickup::all()->count()),
        ];
    }
}
