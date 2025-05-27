<?php

namespace App\Filament\Resources\Trash2Move\MitraResource\Pages;

use App\Filament\Resources\Trash2Move\MitraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMitra extends EditRecord
{
    protected static string $resource = MitraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
