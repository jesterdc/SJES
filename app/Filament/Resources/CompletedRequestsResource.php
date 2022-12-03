<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\CompletedRequests;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CompletedRequestsResource\Pages;
use App\Filament\Resources\CompletedRequestsResource\RelationManagers;

class CompletedRequestsResource extends Resource
{
    protected static ?string $model = CompletedRequests::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Logs';
    protected static ?int $navigationSort = 1;

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
                Tables\Columns\TextColumn::make('created_at')->label('Date Claimed')->sortable()->date('F j, Y / h:i A'),
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
            'index' => Pages\ListCompletedRequests::route('/'),
            'create' => Pages\CreateCompletedRequests::route('/create'),
            'edit' => Pages\EditCompletedRequests::route('/{record}/edit'),
        ];
    }    
}
