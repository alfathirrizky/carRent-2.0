<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use App\Models\Driver;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\UnexpectedCost;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UnexpectedCostResource\Pages;
use App\Filament\Resources\UnexpectedCostResource\RelationManagers;

class UnexpectedCostResource extends Resource
{
    protected static ?string $model = UnexpectedCost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Dana Darurat';

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
                        Forms\Components\DatePicker::make('tanggal')->label('Tanggal')->required(),
                        Forms\Components\TextInput::make('jenis_pengeluaran')->placeholder('Masukkan Jenis Pengeluaran')->label('Jenis Pengeluaran')->required(),
                        Forms\Components\TextInput::make('harga')->placeholder('Masukkan Jumlah Pengeluaran')->label('Harga')->required(),
                        Forms\Components\FileUpload::make('gambar')->image()->imageEditor()->imagePreviewHeight('250')->directory('mobil')->preserveFilenames()->maxSize(10240)->label('Gambar Mobil')->placeholder('Masukkan Gambar Mobil')->acceptedFileTypes(['image/jpeg', 'image/png'])->visibility('public')->disk('public')->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('driver.nama')->label('Nama Driver')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('car.nama_mobil')->label('Nama Mobil')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('jenis_pengeluaran')->label('Masukan Pengeluaran')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga')->label('Harga')->searchable()->sortable()->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
                Tables\Columns\ImageColumn::make('gambar')->label('Image')->searchable()->sortable(),
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
            'index' => Pages\ListUnexpectedCosts::route('/'),
            'create' => Pages\CreateUnexpectedCost::route('/create'),
            'edit' => Pages\EditUnexpectedCost::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Operasional';
    }
}
