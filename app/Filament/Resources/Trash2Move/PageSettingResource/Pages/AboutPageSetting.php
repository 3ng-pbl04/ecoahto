<?php

namespace App\Filament\Resources\Trash2Move\PageSettingResource\Pages;

use App\Filament\Resources\Trash2Move\PageSettingResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;

class AboutPageSetting extends EditRecord
{
    protected static string $resource = PageSettingResource::class;
    public function getTitle(): string
    
    {
        return 'Konfigurasi Halaman Tentang Kami';
    }
    public function getBreadcrumbs(): array
{
    return [];
}
    public function form(Form $form): Form
    {
        return $form->schema([

            RichEditor::make('visi')
                ->label('Visi')
                ->required(),

            RichEditor::make('misi')
                ->label('Misi')
                ->required(),

            RichEditor::make('keunggulan')
                ->label('Keunggulan')
                ->required(),

            FileUpload::make('about_image')
                ->label('Gambar Tentang Kami')
                ->image()
                ->directory('page-settings/about')
                ->visibility('public')
                ->nullable()
                ->hint('Klik gambar untuk mengganti')
                ->extraAttributes([
                    'style' => 'max-height:400px; object-fit:cover; width:100%',
            ]),

            TextInput::make('about_title')
                ->label('Judul Tentang Kami')
                ->required(),
        ]);
    }
}
