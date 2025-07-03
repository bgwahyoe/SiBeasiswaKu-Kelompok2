<?php

namespace App\Filament\Widgets;

use App\Models\Pendaftaran;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendaftaranChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Pendaftaran';

    protected static ?string $pollingInterval = '30s';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Mengambil data pendaftaran dalam 12 bulan terakhir secara manual
        $data = Pendaftaran::query()
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
                DB::raw('count(*) as count')
            )
            ->where('created_at', '>=', now()->subYear())
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Pendaftaran Baru',
                    'data' => $data->pluck('count')->toArray(), // Ambil data jumlah
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgb(54, 162, 235)',
                ],
            ],
            // Ubah format label bulan dari '2024-07' menjadi 'Jul'
            'labels' => $data->pluck('month')->map(function ($date) {
                return Carbon::createFromFormat('Y-m', $date)->format('M');
            })->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
