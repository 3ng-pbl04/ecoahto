<?php

namespace App\Filament\Resources\Trash2Move\PageSettingResource\Pages;

use App\Filament\Resources\Trash2Move\PageSettingResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Grid; // ← Pindahkan ke sini

class HeroPageSetting extends EditRecord
{
    protected static string $resource = PageSettingResource::class;

    public function getTitle(): string
    {
        return 'Konfigurasi Hero';
    }
    public function getBreadcrumbs(): array
{
    return [];
}
    public function form(Form $form): Form
    {
        return $form->schema([
            // Form untuk mengedit pengaturan halaman Hero

            // Judul Halaman


            // Grid 2 kolom: kiri teks, kanan gambar
            Grid::make(2)->schema([
                // Kolom Kiri - Teks
                TextInput::make('company_name')
                    ->label('Nama Perusahaan')
                    ->required(),

                TextInput::make('hero_title')
                    ->label('Judul Hero')
                    ->required(),

                Textarea::make('hero_description')
                    ->label('Deskripsi Hero')
                    ->required(),
            ]),

            Grid::make(2)->schema([
                // Kolom Kanan - Gambar (Logo dan Hero)
                FileUpload::make('company_logo')
                    ->label('Logo Perusahaan')
                    ->image()
                    ->directory('page-settings/logo')
                    ->visibility('public')
                    ->hint('Klik gambar untuk mengganti')
                    ->nullable(),

                FileUpload::make('hero_image')
                    ->label('Gambar Hero')
                    ->image()
                    ->directory('page-settings/hero')
                    ->visibility('public')
                    ->hint('Klik gambar untuk mengganti')
                    ->nullable(),
            ]),
        ]);
    }
}
