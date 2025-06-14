<?php

namespace App\Filament\Resources\EcoAhto\SampahResource\Pages;

use App\Filament\Resources\EcoAhto\SampahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSampah extends EditRecord
{
    protected static string $resource = SampahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
