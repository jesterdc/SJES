<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\StudentRequest;
use Filament\Resources\Resource;
use App\Models\ProcessingRequests;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProcessingRequestsResource\Pages;
use App\Filament\Resources\ProcessingRequestsResource\RelationManagers;
use App\Models\ReadytoPickup;

class ProcessingRequestsResource extends Resource
{
    protected static ?string $model = ProcessingRequests::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';
    protected static ?string $navigationGroup = 'Requests Management';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
                DateTimePicker::make('created_at')->disabled()->label('Date Requested')->displayFormat('F j, Y / h:i A')->columnSpan(2)->disabled(),
                TextInput::make('first_name')->disabled(),
                TextInput::make('middle_name')->disabled(),
                TextInput::make('last_name')->disabled(),
                TextInput::make('lrn')->disabled()->label('LRN'),
                TextInput::make('email')->disabled(),
                TextInput::make('contact')->disabled(),
                TextInput::make('birthday')->disabled(),
                TextInput::make('gender')->disabled(),
            ])->columns(2),
            Card::make()->schema([
                TextInput::make('tracking_number')->disabled(),
                TextInput::make('pin')->disabled(),
            ])->columns(2)
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')->label('Date Approved')->sortable()->date('F j, Y / h:i A'),
                Tables\Columns\TextColumn::make('first_name')->searchable(),
                Tables\Columns\TextColumn::make('last_name')->searchable(),
                Tables\Columns\TextColumn::make('lrn')->label('LRN'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('document')->label('Document Requesting'),
                Tables\Columns\TextColumn::make('contact'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Ready For Pickup')
                ->action(function (ProcessingRequests $record, array $data): void {
                    $values = array(
                        "user_id"=>$record->user_id,
                        "first_name"=>$record->first_name,
                        "middle_name"=>$record->middle_name,
                        "last_name"=>$record->last_name,
                        "gender"=>$record->gender,
                        "email"=>$record->email,
                        "contact"=>$record->contact,
                        "address"=>$record->address,
                        "lrn"=>$record->lrn,
                        "document"=>$record->document,
                        "birthday"=>$record->birthday,
                        "created_at"=>Carbon::now(),
                        "tracking_number"=>$record->tracking_number,
                        "pin"=>$record->tracking_number,
                        "status"=>1,
                    );
                    ReadytoPickup::insert($values);
                    DB::table('processing_requests')->delete($record->id);
                })
                ->requiresConfirmation()
                ->color('success'),
            ])
            ->bulkActions([

            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProcessingRequests::route('/'),
            'create' => Pages\CreateProcessingRequests::route('/create'),
            'edit' => Pages\EditProcessingRequests::route('/{record}/edit'),
        ];
    }    
}
