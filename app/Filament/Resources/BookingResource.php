<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Maatwebsite\Excel\Excel;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use App\Filament\Resources\BookingResource\RelationManagers;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Customer')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('telepon')->label('Nomor Telepon Customer')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('mobil')->label('Nama Mobil')->searchable(),
                Tables\Columns\TextColumn::make('transmisi')->label('Transmisi')->searchable(),
                Tables\Columns\TextColumn::make('tanggal_booking')->label('Tanggal Booking')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('durasi')->label('Durasi Booking'),
                Tables\Columns\TextColumn::make('harga')->label('Harga')->formatStateUsing(
                    fn($state) => 'Rp ' . number_format($state, 0, ',', '.')
                ),
                Tables\Columns\TextColumn::make('metode_pembayaran')->label('Metode Pembayaran')->searchable(),
                SelectColumn::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'On the way' => 'On the way',
                        'Success' => 'Success',
                    ])->rules(['required'])->selectablePlaceholder(false)
            ])
            ->filters([
                Filter::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->form([
                        DatePicker::make('created_at')->label('Dari')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['created_at'], fn($q) => $q->whereDate('created_at', '>=', $data['created_at']));
                    }),
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
                        'Transfer' => 'Transfer',
                    ])

            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportAction::make()->label('Export')
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
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'The number of booking';
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('price');
    }
}
