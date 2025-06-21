<?php

namespace App\Filament\Widgets;

use App\Models\Review;
use App\Models\Booking;
use App\Models\cicilan;
use App\Models\Setoran;
use App\Models\UnexpectedCost;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Booking', Booking::count())
                ->description('Total semua booking')
                ->color('primary'),
            Stat::make('Jumlah Reviews', Review::count())
                ->description('Total semua booking')
                ->color('primary'),
            Stat::make('Total Pemasukan', 'Rp ' . number_format(Setoran::sum('harga'), 0, ',', '.'))
                ->description('Dari semua Setoran')
                ->color('info'),
            Stat::make('Total Pemasukan', 'Rp ' . number_format(Booking::sum('harga'), 0, ',', '.'))
                ->description('Dari semua Booking')
                ->color('info'),
            Stat::make('Total Pengeluaran Darurat', 'Rp ' . number_format(UnexpectedCost::sum('harga'), 0, ',', '.'))
                ->description('Dari dana darurat')
                ->color('info'),
            Stat::make('Total Cicilan', 'Rp ' . number_format(cicilan::sum('nominal'), 0, ',', '.'))
                ->description('Dari semua cicilan')
                ->color('info'),
        ];
    }
}
