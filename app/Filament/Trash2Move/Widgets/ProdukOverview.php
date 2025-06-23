<?php

namespace App\Filament\Trash2Move\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Produk;

class ProdukOverview extends ChartWidget
{
    protected static ?string $heading = 'Produk Ditambahkan per Bulan';
    protected static string $color = 'primary';

    protected function getData(): array
    {
        $data = Produk::selectRaw('MONTH(created_at) as month_num, MONTHNAME(created_at) as month_name, COUNT(id) as count')
            ->whereYear('created_at', now()->year)
            ->groupByRaw('MONTH(created_at), MONTHNAME(created_at)')
            ->orderByRaw('MONTH(created_at)')
            ->get();

        // Array warna untuk setiap bulan (12 warna)
        $colors = [
            '#3b82f6', // Jan
            '#10b981', // Feb
            '#f59e42', // Mar
            '#ef4444', // Apr
            '#a78bfa', // May
            '#fbbf24', // Jun
            '#6366f1', // Jul
            '#14b8a6', // Aug
            '#f472b6', // Sep
            '#f87171', // Oct
            '#34d399', // Nov
            '#818cf8', // Dec
        ];

        return [
            'labels' => $data->pluck('month_name')->toArray(),
            'datasets' => [
                [
                    'label' => 'Produk Baru',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => $data->pluck('month_num')->map(function ($m, $i) use ($colors) {
                        return $colors[($m - 1) % count($colors)];
                    })->toArray(),
                    'borderColor' => $data->pluck('month_num')->map(function ($m, $i) use ($colors) {
                        return $colors[($m - 1) % count($colors)];
                    })->toArray(),
                    'fill' => false,
                ]
                ],
            ];
        
    }
    

    protected function getType(): string
    {
        return 'bar';
    }

    public function getColumnSpan(): int|string|array
{
    return 1; // atau ['md' => 1, 'lg' => 1]
}

}
