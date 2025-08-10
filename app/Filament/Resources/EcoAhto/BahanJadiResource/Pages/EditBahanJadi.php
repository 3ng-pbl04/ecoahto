<?php

namespace App\Filament\Resources\EcoAhto\BahanJadiResource\Pages;

use App\Filament\Resources\EcoAhto\BahanJadiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBahanJadi extends EditRecord
{
    protected static string $resource = BahanJadiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
