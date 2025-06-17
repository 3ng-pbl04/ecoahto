<?php

namespace App\Filament\Resources\EcoAhto\HasilOlahResource\Pages;

use App\Filament\Resources\EcoAhto\HasilOlahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilOlah extends EditRecord
{
    protected static string $resource = HasilOlahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
