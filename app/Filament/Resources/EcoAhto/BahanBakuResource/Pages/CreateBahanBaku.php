<?php

namespace App\Filament\Resources\EcoAhto\BahanBakuResource\Pages;

use App\Filament\Resources\EcoAhto\BahanBakuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBahanBaku extends CreateRecord
{
    protected static string $resource = BahanBakuResource::class;
     protected function getRedirectUrl(): string
    {
        // Langsung redirect ke index setelah create
        return $this->getResource()::getUrl('index');
    }
}
