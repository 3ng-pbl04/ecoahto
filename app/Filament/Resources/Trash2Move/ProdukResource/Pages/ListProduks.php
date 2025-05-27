<?php

namespace App\Filament\Resources\Trash2Move\ProdukResource\Pages;

use App\Filament\Resources\Trash2Move\ProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduks extends ListRecords
{
    protected static string $resource = ProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
