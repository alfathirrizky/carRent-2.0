<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use Maatwebsite\Excel\Excel;
use pxlrbt\FilamentExcel\Columns\Column;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Customer')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('telepon')->label('Nomor Telepon Customer')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('mobil')->label('Nama Mobil')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('durasi')->label('Durasi Booking')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('metode_pembayaran')->label('Metode Pembayaran')->searchable()->sortable(),
            ])
            ->filters([
                SelectFilter::make('mobil')
                ->label('Nama Mobil')
                ->options([
                    'Toyota Innova' => 'Toyota Innova',
                ])
                ->multiple()
                ->searchable(),

            SelectFilter::make('durasi')
                ->label('Durasi Booking')
                ->options([
                    '12 Jam' => '12 Jam',
                    '24 Jam' => '24 Jam',
                    '36 Jam' => '36 Jam',
                    '48 Jam' => '48 Jam',
                    '60 Jam' => '60 Jam',
                    '72 Jam' => '72 Jam',
                ])
                ->multiple()
                ->searchable(),

            SelectFilter::make('metode_pembayaran')
                ->label('Metode Pembayaran')
                ->options([
                    'Cash' => 'Cash',
                ])

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportAction::make()
                    ->label('Export')
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
