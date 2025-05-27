<?php

namespace App\Filament\Resources\Trash2Move\AnggotaResource\Pages;

use App\Filament\Resources\Trash2Move\AnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggota extends EditRecord
{
    protected static string $resource = AnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
