<?php

namespace App\Filament\Widgets;

use App\Models\Pendaftaran;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class StatusPendaftaranChart extends ChartWidget
{
    protected static ?string $heading = 'Status Pendaftaran';

    // Widget ini akan diletakkan di urutan kedua
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Mengambil data dan mengelompokkannya berdasarkan kolom 'status'
        $data = Pendaftaran::query()
            ->select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pendaftaran',
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => [
                        'rgba(54, 162, 235, 0.7)',  // Biru untuk 'diajukan'
                        'rgba(255, 159, 64, 0.7)',  // Oranye untuk 'diproses'
                        'rgba(75, 192, 192, 0.7)',  // Hijau untuk 'diterima'
                        'rgba(255, 99, 132, 0.7)',   // Merah untuk 'ditolak'
                    ],
                    'borderColor' => '#ffffff',
                ],
            ],
            // Labelnya akan berisi nama-nama status
            'labels' => $data->pluck('status')->map(fn ($status) => ucfirst($status))->toArray(),
        ];
    }

    protected function getType(): string
    {
        // 'doughnut' adalah variasi dari 'pie' yang terlihat lebih modern
        return 'doughnut';
    }
}
