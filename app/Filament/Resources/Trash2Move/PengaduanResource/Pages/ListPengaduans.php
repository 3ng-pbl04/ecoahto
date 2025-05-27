<?php

namespace App\Filament\Resources\Trash2Move\PengaduanResource\Pages;

use App\Filament\Resources\Trash2Move\PengaduanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengaduans extends ListRecords
{
    protected static string $resource = PengaduanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
