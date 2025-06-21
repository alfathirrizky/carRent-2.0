<?php

namespace App\Filament\Widgets;

use App\Models\Setoran;
use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Setoran per Bulan';

    protected function getData(): array
    {
        // Ambil data setoran per bulan (1 tahun terakhir)
        $data = Setoran::selectRaw('MONTH(tanggal_setoran) as bulan, SUM(harga) as total')
            ->whereYear('tanggal_setoran', now()->year)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        // Siapkan array dengan nilai default 0 untuk 12 bulan
        $setoranPerBulan = array_fill(1, 12, 0);

        // Isi dengan data hasil query
        foreach ($data as $bulan => $total) {
            $setoranPerBulan[$bulan] = $total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Setoran (Rp)',
                    'data' => array_values($setoranPerBulan),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
