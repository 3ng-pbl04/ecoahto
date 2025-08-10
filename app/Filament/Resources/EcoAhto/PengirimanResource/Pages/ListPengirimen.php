<?php

namespace App\Filament\Resources\EcoAhto\PengirimanResource\Pages;

use App\Filament\Resources\EcoAhto\PengirimanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengirimen extends ListRecords
{
    protected static string $resource = PengirimanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data')
                ->icon('heroicon-o-plus'),
        ];
    }
}
