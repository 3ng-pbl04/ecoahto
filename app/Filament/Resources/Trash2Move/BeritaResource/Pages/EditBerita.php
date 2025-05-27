<?php

namespace App\Filament\Resources\Trash2Move\BeritaResource\Pages;

use App\Filament\Resources\Trash2Move\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerita extends EditRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
