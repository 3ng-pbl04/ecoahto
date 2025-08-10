<?php

namespace App\Filament\Resources\EcoAhto\BahanSortirResource\Pages;

use App\Filament\Resources\EcoAhto\BahanSortirResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBahanSortir extends CreateRecord
{
    protected static string $resource = BahanSortirResource::class;
     protected function getRedirectUrl(): string
        {
            return $this->getResource()::getUrl('index');
        }
}
