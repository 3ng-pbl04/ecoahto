<?php

namespace App\Filament\Resources\Trash2Move\BeritaResource\Pages;

use App\Filament\Resources\Trash2Move\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;


class CreateBerita extends CreateRecord
{
    protected static string $resource = BeritaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['admin_id'] = Auth::id(); // otomatis isi dari admin yang login
    return $data;
}
}
