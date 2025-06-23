<?php

namespace App\Filament\Trash2Move\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
        Stat::make(
            'Jumlah Pengaduan Bulan Ini (' . now()->format('F Y') . ')',
            \App\Models\Pengaduan::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->count()
        )
            ->description('Total pengaduan dalam 1 bulan')
            ->icon('heroicon-o-clipboard-document'),

           
        ];
    }

    public function getColumnSpan(): int|string|array
{
    return 'full';
}

}
