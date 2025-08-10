<?php

namespace App\Filament\Resources\EcoAhto\PengirimanResource\Pages;

use App\Filament\Resources\EcoAhto\PengirimanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengiriman extends EditRecord
{
    protected static string $resource = PengirimanResource::class;

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
