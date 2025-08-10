<?php

namespace App\Filament\Resources\EcoAhto\BahanJadiResource\Pages;

use App\Filament\Resources\EcoAhto\BahanJadiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBahanJadi extends CreateRecord
{
    protected static string $resource = BahanJadiResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
