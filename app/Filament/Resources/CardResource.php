<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CardResource\Pages;
use App\Filament\Resources\CardResource\RelationManagers;
use App\Models\Card;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CardResource extends Resource
{
    protected static ?string $model = Card::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('card_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('reservation_id')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('arrival_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('departure_date')
                    ->required(),
                Forms\Components\TextInput::make('total_rent')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('note')
                    ->maxLength(255),
                Forms\Components\TextInput::make('check_in_made_by')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('check_out_made_by')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('card_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reservation_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('arrival_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('departure_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_rent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('note')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in_made_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_out_made_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCards::route('/'),
            'create' => Pages\CreateCard::route('/create'),
            'edit' => Pages\EditCard::route('/{record}/edit'),
        ];
    }
}
