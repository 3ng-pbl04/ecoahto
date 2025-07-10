<?php

namespace App\Filament\Resources\EcoAhto\HasilOlahResource\Pages;

use App\Filament\Resources\EcoAhto\HasilOlahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHasilOlahs extends ListRecords
{
    protected static string $resource = HasilOlahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data')
                ->icon('heroicon-o-plus'),

            Actions\Action::make('Export Excel')
                ->label('Export Excel')
                ->icon('heroicon-o-table-cells')
                ->color('success')
                ->url(route('export.hasilolah.excel'))
                ->openUrlInNewTab(),

            Actions\Action::make('Export PDF')
                ->label('Export PDF')
                ->icon('heroicon-o-document-text')
                ->color('danger')
                ->url(route('export.hasilolah.pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
