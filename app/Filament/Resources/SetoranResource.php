<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use App\Models\Setoran;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SetoranResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SetoranResource\RelationManagers;
use App\Models\Driver;

class SetoranResource extends Resource
{
    protected static ?string $model = Setoran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('driver_id')
                            ->options(Driver::all()
                            ->pluck('nama', 'id'))
                            ->label('Nama Driver')
                            ->required(),
                        Forms\Components\Select::make('car_id')
                            ->options(Car::all()
                            ->pluck('nama_mobil', 'id'))
                            ->label('Mobil')
                            ->required(),
                        Forms\Components\DatePicker::make('tanggal_Setoran')->label('Tanggal Setoran')->required(),
                        Forms\Components\TextInput::make('harga')->placeholder('Masukkan Jumlah Setoran')->label('Jumlah Setoran')->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('driver.nama')->label('Nama Driver')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('car.nama_mobil')->label('Nama Mobil')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('tanggal_Setoran')->label('Tanggal Setoran')->searchable(),
                Tables\Columns\TextColumn::make('harga')->label('Jumlah Setoran')->searchable()->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSetorans::route('/'),
            'create' => Pages\CreateSetoran::route('/create'),
            'edit' => Pages\EditSetoran::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Operasional';
    }
}
