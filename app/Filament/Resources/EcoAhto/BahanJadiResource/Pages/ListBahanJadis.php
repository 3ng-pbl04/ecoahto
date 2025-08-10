<?php

namespace App\Filament\Resources\EcoAhto\BahanJadiResource\Pages;

use App\Filament\Resources\EcoAhto\BahanJadiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBahanJadis extends ListRecords
{
    protected static string $resource = BahanJadiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data')
                ->icon('heroicon-o-plus'),

            // Actions\Action::make('Export PDF')
            //     ->label('Export ke PDF')
            //     ->icon('heroicon-o-document-text')
            //     ->color('danger')
            //     ->url(route('export.bahan.pdf'))
            //     ->openUrlInNewTab(),
        ];
    }
}
