<?php

namespace App\Filament\Resources\EcoAhto\BahanSortirResource\Pages;

use App\Filament\Resources\EcoAhto\BahanSortirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBahanSortirs extends ListRecords
{
    protected static string $resource = BahanSortirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data')
                ->icon('heroicon-o-plus'),
        ];
    }
}
