<?php

namespace App\Filament\Resources\EcoAhto\SampahResource\Pages;

use App\Filament\Resources\EcoAhto\SampahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSampahs extends ListRecords
{
    protected static string $resource = SampahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Data')
            ->icon('heroicon-o-plus'),

            // Tombol Export Excel
            Actions\Action::make('Export Excel')
                ->url(route('export.sampah')) // Route untuk export Excel
                ->icon('heroicon-o-table-cells')
                ->color('success')
                ->openUrlInNewTab(),

            // Tombol Export PDF
            Actions\Action::make('Export Pdf')
                ->url(route('export.sampah.pdf')) // Route untuk export PDF
                ->icon('heroicon-o-document-text')
                ->color('danger')
                ->openUrlInNewTab(),
        ];
    }
}
