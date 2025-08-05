<?php

namespace App\Filament\Resources\EcoAhto\BahanBakuResource\Pages;

use App\Filament\Resources\EcoAhto\BahanBakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBahanBakus extends ListRecords
{
    protected static string $resource = BahanBakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data')
                ->icon('heroicon-o-plus'),

            Actions\Action::make('Export PDF')
                ->label('Export ke PDF')
                ->icon('heroicon-o-document-text')
                ->color('danger')
                ->url(route('export.bahan.pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
