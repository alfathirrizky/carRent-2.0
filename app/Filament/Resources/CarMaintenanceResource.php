<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CarMaintenance;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarMaintenanceResource\Pages;
use App\Filament\Resources\CarMaintenanceResource\RelationManagers;

class CarMaintenanceResource extends Resource
{
    protected static ?string $model = CarMaintenance::class;

    protected static ?string $navigationIcon = 'ri-home-gear-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('car_id')
                            ->options(Car::all()
                            ->pluck('nama_mobil', 'id'))
                            ->label('Mobil')
                            ->required(),
                        Forms\Components\DatePicker::make('tanggal_service')
                            ->label('Tanggal Service')
                            ->required(),
                        Forms\Components\TextInput::make('harga')
                            ->numeric()
                            ->required()
                            ->label('Harga (Rp)'),
                        Forms\Components\FileUpload::make('bukti_bayar')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->directory('mobil')
                            ->preserveFilenames()
                            ->maxSize(10240)
                            ->label('Bukti Service')
                            ->placeholder('Masukkan Bukti Service')
                            ->acceptedFileTypes(['image/jpeg', 'image/png'])
                            ->visibility('public')
                            ->disk('public')
                            ->required()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car.nama_mobil')->label('Mobil'),
                Tables\Columns\TextColumn::make('car.tipe')->label('Mobil'),
                Tables\Columns\TextColumn::make('tanggal_service')->label('Tanggal Service'),
                Tables\Columns\TextColumn::make('harga')->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
                Tables\Columns\ImageColumn::make('bukti_bayar')->label('Bukti Bayar')->square()->width(110)->height(55)->searchable()->visibility('public')->disk('public')
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
            'index' => Pages\ListCarMaintenances::route('/'),
            'create' => Pages\CreateCarMaintenance::route('/create'),
            'edit' => Pages\EditCarMaintenance::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Unit';
    }
}
