<?php

namespace App\Filament\Resources\Trash2Move\PengaduanResource\Pages;

use App\Filament\Resources\Trash2Move\PengaduanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengaduan extends EditRecord
{
    protected static string $resource = PengaduanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
