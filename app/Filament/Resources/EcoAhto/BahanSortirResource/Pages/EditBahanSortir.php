<?php

namespace App\Filament\Resources\EcoAhto\BahanSortirResource\Pages;

use App\Filament\Resources\EcoAhto\BahanSortirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBahanSortir extends EditRecord
{
    protected static string $resource = BahanSortirResource::class;

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
