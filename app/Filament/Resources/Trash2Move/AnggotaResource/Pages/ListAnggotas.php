<?php

namespace App\Filament\Resources\Trash2Move\AnggotaResource\Pages;

use App\Filament\Resources\Trash2Move\AnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotas extends ListRecords
{
    protected static string $resource = AnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
