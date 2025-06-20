<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Cicilan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CicilanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use App\Filament\Resources\CicilanResource\RelationManagers;
use App\Models\Car;
use Filament\Forms\Components\TextInput;

class CicilanResource extends Resource
{
    protected static ?string $model = Cicilan::class;
    protected static ?string $navigationLabel = 'Cicilan';
    protected static ?string $navigationIcon = 'iconpark-credit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('car_id')
                    ->options(Car::all()
                        ->pluck('nama_mobil', 'id'))
                    ->label('Nama Mobil')
                    ->required(),
                Forms\Components\TextInput::make('nominal')
                    ->required()
                    ->label('Jumlah Dibayar')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_cicilan')
                    ->label('Tanggal Bayar')
                    ->required(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ExportAction::make()
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
            'edit' => Pages\EditCicilan::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Operasional';
    }
}
