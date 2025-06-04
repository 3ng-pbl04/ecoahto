<?php

namespace App\Filament\Resources\Trash2Move\AnggotaResource\Pages;

use App\Filament\Resources\Trash2Move\AnggotaResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Anggota;

class CreateAnggota extends CreateRecord
{
    protected static string $resource = AnggotaResource::class;

    protected function getRedirectUrl(): string
    {
        // Langsung redirect ke index setelah create
        return $this->getResource()::getUrl('index');
    }
}
