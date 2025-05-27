<?php

namespace App\Filament\Resources\Trash2Move\UlasanResource\Pages;

use App\Filament\Resources\Trash2Move\UlasanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUlasans extends ListRecords
{
    protected static string $resource = UlasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
