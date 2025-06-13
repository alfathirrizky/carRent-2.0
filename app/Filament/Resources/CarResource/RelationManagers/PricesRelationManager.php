<?php

namespace App\Filament\Resources\CarResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PricesRelationManager extends RelationManager
{
    protected static string $relationship = 'prices';
    protected static ?string $title = 'Harga & Durasi';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('durasi')
                    ->options([
                        '12 Jam' => '12 Jam',
                        '24 Jam' => '24 Jam',
                        '36 Jam' => '36 Jam',
                        '48 Jam' => '48 Jam',
                        '60 Jam' => '60 Jam',
                        '72 Jam' => '72 Jam',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->label('Harga Sewa'),
                Forms\Components\TextInput::make('setoran')
                    ->numeric()
                    ->required()
                    ->label('Harga Setoran'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('label')
            ->columns([
                Tables\Columns\TextColumn::make('durasi'),
                Tables\Columns\TextColumn::make('harga')->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
                Tables\Columns\TextColumn::make('setoran')->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
