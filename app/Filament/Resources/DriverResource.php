<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Driver;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DriverResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use App\Filament\Resources\DriverResource\RelationManagers;

class DriverResource extends Resource
{
    protected static ?string $model = Driver::class;

    protected static ?string $navigationIcon = 'untitledui-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama')->placeholder('Masukkan Nama')->label('Nama Driver')->required(),
                        Forms\Components\TextInput::make('umur')->placeholder('Masukkan Umur')->label('Umur Driver')->required(),
                        Forms\Components\TextInput::make('alamat')->placeholder('Masukkan Alamat')->label('Alamat Driver')->required(),
                        Forms\Components\Select::make('jns_kelamin')->options([
                            'Pria' => 'Pria',
                            'Perempuan' => 'Perempuan'
                        ])->label('Jenis Kelamin')->placeholder('Pilih Jenis Kelamin')->required(),
                        Forms\Components\TextInput::make('no_telepon')->placeholder('Masukkan Nama')->label('Nomor Driver')->required(),
                        Forms\Components\FileUpload::make('data_diri')->image()->imageEditor()->imagePreviewHeight('250')->directory('mobil')->preserveFilenames()->maxSize(10240)->label('Data Diri')->placeholder('Masukkan Data Diri')->acceptedFileTypes(['image/jpeg', 'image/png'])->visibility('public')->disk('public')->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Driver')->searchable(),
                Tables\Columns\TextColumn::make('umur')->label('Umur Driver')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat')->searchable(),
                Tables\Columns\TextColumn::make('jns_kelamin')->label('Jenis Kelamin')->searchable(),
                Tables\Columns\TextColumn::make('no_telepon')->label('Nomer Telepon')->searchable(),
                Tables\Columns\ImageColumn::make('data_diri')->label('Image')->square()->width(110)->height(55)->searchable()->visibility('public')->disk('public'),
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
            'index' => Pages\ListDrivers::route('/'),
            'create' => Pages\CreateDriver::route('/create'),
            'edit' => Pages\EditDriver::route('/{record}/edit'),
        ];
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Operasional';
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Jumlah Driver';
    }
}
