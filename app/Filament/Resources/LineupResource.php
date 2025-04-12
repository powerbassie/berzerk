<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LineupResource\Pages;
use App\Filament\Resources\LineupResource\RelationManagers;
use App\Models\Lineup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LineupResource extends Resource
{
    protected static ?string $model = Lineup::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('event_id')
                ->relationship('event', 'title')
                ->required(),
            Forms\Components\Select::make('artist_id')
                ->relationship('artist', 'name')
                ->required(),
            Forms\Components\TimePicker::make('start_time')
                ->required(),
            Forms\Components\TimePicker::make('end_time'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('event.title')->label('Event')->sortable(),
            Tables\Columns\TextColumn::make('artist')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('start_time')->sortable(),
            Tables\Columns\TextColumn::make('end_time')->sortable(),
        ])
            ->filters([
                // Voeg filters toe indien nodig
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLineups::route('/'),
            'create' => Pages\CreateLineup::route('/create'),
            'edit' => Pages\EditLineup::route('/{record}/edit'),
        ];
    }
}
