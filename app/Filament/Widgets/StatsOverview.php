<?php

namespace App\Filament\Widgets;

use App\Models\Review;
use App\Models\Booking;
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
                ->description('Dari semua setoran')
                ->color('info'),
            Stat::make('Total Pengeluaran', 'Rp ' . number_format(UnexpectedCost::sum('harga'), 0, ',', '.'))
                ->description('Dari semua setoran')
                ->color('info'),
        ];
    }
}
