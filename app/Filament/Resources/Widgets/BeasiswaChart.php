<?php

namespace App\Filament\Widgets;

use App\Models\Beasiswa;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BeasiswaChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Beasiswa per Penyedia';

    protected static ?int $sort = 1;

    protected function getData(): array
    {
        // Kita akan mengelompokkan data berdasarkan kolom 'penyedia'
        $namaKolom = 'penyedia';

        $data = Beasiswa::query()
            ->select($namaKolom, DB::raw('count(*) as total'))
            ->groupBy($namaKolom)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Beasiswa',
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => [
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(255, 205, 86, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(54, 162, 235, 0.5)'
                    ],
                    'borderColor' => [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)'
                    ],
                ],
            ],
            // Label grafik sekarang akan berisi nama-nama penyedia
            'labels' => $data->pluck($namaKolom)->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
