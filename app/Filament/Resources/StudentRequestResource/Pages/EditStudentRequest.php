<?php

namespace App\Filament\Resources\StudentRequestResource\Pages;

use Carbon\Carbon;
use Filament\Pages\Actions;
use App\Models\ProcessingRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\StudentRequestResource;
use Illuminate\Database\Eloquent\Model;

class EditStudentRequest extends EditRecord
{
    protected static string $resource = StudentRequestResource::class;

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
