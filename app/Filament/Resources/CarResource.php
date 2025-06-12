<?php

namespace App\Filament\Resources;


use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers\PricesRelationManager;


class CarResource extends Resource
{
    protected static ?string $model = Car::class;
    protected static ?string $navigationIcon = 'untitledui-car';
    protected static ?string $navigationLabel = 'Cars Details';
    protected static ?string $modelLabel = 'Cars Details';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_mobil')->placeholder('Contoh: Toyota Innova')->label('Nama Mobil')->required(),
                        Forms\Components\Select::make('bahan_bakar')->options([
                            'Bensin' => 'Bensin',
                            'Diesel' => 'Diesel'
                        ])->label('Bahan Bakar')->placeholder('Pilih Bahan Bakar Mobil')->required(),
                        Forms\Components\Select::make('tipe')->options([
                            'Matic' => 'Matic',
                            'Manual' => 'Manual'
                        ])->label('Tipe Mobil')->placeholder('Pilih Tipe Mobil')->required(),
                        Forms\Components\Select::make('seater')->options([
                            '5 Seater' => '5 Seater',
                            '7 Seater' => '7 Seater'
                        ])->placeholder('Pilih Seater')->required(),
                        Forms\Components\Select::make('kategori')->options([
                            'MPV' => 'MPV',
                            'SUV' => 'SUV',
                            'HATCHBACK' => 'HATCHBACK'
                        ])->placeholder('Pilih Kategori Mobil')->required(),
                        Forms\Components\FileUpload::make('gambar_mobil')->image()->imageEditor()->imagePreviewHeight('250')->directory('mobil')->preserveFilenames()->maxSize(10240)->label('Gambar Mobil')->placeholder('Masukkan Gambar Mobil')->acceptedFileTypes(['image/jpeg', 'image/png'])->visibility('public')->disk('public')->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_mobil')->label('Nama Mobil')->searchable(),
                Tables\Columns\TextColumn::make('prices_count')
                    ->label('Jumlah Harga')
                    ->counts('prices')
                    ->sortable(),
                Tables\Columns\TextColumn::make('bahan_bakar')->label('Bahan Bakar')->searchable(),
                Tables\Columns\TextColumn::make('tipe')->searchable(),
                Tables\Columns\TextColumn::make('seater')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kategori')->searchable(),
                Tables\Columns\ImageColumn::make('gambar_mobil')->label('Image')->square()->width(110)->height(55)->searchable()->visibility('public')->disk('public'),
                SelectColumn::make('status')
                    ->options([
                        'Ready' => 'Ready',
                        'Maintenance' => 'Maintenance',
                    ])->rules(['required'])->selectablePlaceholder(false)
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'MPV' => 'MPV',
                        'SUV' => 'SUV',
                        'HATCHBACK' => 'HATCHBACK',
                    ])
                    ->placeholder('Semua Kategori')
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
            PricesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'The number of cars';
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Unit';
    }
}
