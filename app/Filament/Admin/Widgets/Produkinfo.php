<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Produk;

class Produkinfo extends StatsOverviewWidget
{
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Produk', Produk::count())
                ->description('Semua produk terdaftar')
                ->icon('heroicon-o-cube')
                ->color('primary'),

            Stat::make('Total Stok', Produk::sum('stok'))
                ->description('Jumlah stok dari semua produk')
                ->icon('heroicon-o-cube-transparent')
                ->color('success'),

            Stat::make('Produk Habis', Produk::where('stok', 0)->count())
                ->description(
                    Produk::where('stok', 0)
                        ->get()
                        ->pluck('nama')
                        ->implode(', ') ?: 'Tidak ada produk habis'
                )
                ->icon('heroicon-o-exclamation-circle')
                ->color('danger'),

            Stat::make(
                'Produk dengan Stok Menipis',
                Produk::where('stok', '<', 10)->where('stok', '>', 0)->count()
            )
                ->description(
                    Produk::where('stok', '<', 10)
                        ->where('stok', '>', 0)
                        ->get()
                        ->map(function ($produk) {
                            return $produk->nama . ' (' . $produk->stok . ')';
                        })
                        ->implode(', ')
                    ?: 'Tidak ada produk menipis'
                )
                ->icon('heroicon-o-exclamation-triangle')
                ->color('warning'),
        ];
    }

    public function getColumnSpan(): int|string|array
{
    return 1; // atau ['md' => 1, 'lg' => 1]
}

}
