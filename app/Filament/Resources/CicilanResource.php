<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CicilanResource\Pages;
use App\Filament\Resources\CicilanResource\RelationManagers;
use App\Models\Cicilan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CicilanResource extends Resource
{
    protected static ?string $model = Cicilan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car.nama_mobil')->label('Mobil'),
                Tables\Columns\TextColumn::make('tanggal_cicilan')->label('Tanggal Bayar')->searchable(),
                Tables\Columns\TextColumn::make('nominal')->label('Jumlah Di bayar')->searchable()->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
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
            'index' => Pages\ListCicilans::route('/'),
            'create' => Pages\CreateCicilan::route('/create'),
            'edit' => Pages\EditCicilan::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Operasional';
    }
}
