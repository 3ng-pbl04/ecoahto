<?php

namespace App\Filament\Resources\EcoAhto\PengirimanResource\Pages;

use App\Filament\Resources\EcoAhto\PengirimanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengiriman extends CreateRecord
{
    protected static string $resource = PengirimanResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
