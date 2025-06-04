<?php

namespace App\Filament\Resources\Trash2Move;

use App\Filament\Resources\Trash2Move\PageSettingResource\Pages;
use App\Models\PageSetting;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use App\Filament\Resources\Trash2Move\PageSettingResource\Pages\EditPageSetting;
use Filament\Tables\Table;
use App\Filament\Resources\Trash2Move\PageSettingResource\Pages\ListPageSettings;
use App\Filament\Resources\Trash2Move\PageSettingResource\Pages\CreatePageSetting;







class PageSettingResource extends Resource
{
    protected static ?string $model = PageSetting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $slug = 'kelola-halaman'; // ini URL-nya
    protected static ?string $navigationLabel = 'Kelola Halaman';
    protected static ?string $navigationGroup = 'Pengaturan';



public static function form(Form $form): Form
{
   return $form
    ->schema([
        Tabs::make('Halaman')
            ->extraAttributes(['class' => 'w-full max-w-4xl mx-auto']) // Ini bikin form tetap di tengah & field lebar
            ->tabs([
                Tab::make('Hero')
                    ->schema([
                        TextInput::make('hero_title')
                            ->columnSpan('full'),
                        Textarea::make('hero_description')
                            ->columnSpan('full'),
                        FileUpload::make('hero_image')
                            ->image()
                            ->disk('public') // wajib: menyimpan di storage/app/public
                            ->directory('page-settings/hero') // ini akan otomatis buat folder jika belum ada
                            ->visibility('public') // agar bisa diakses dari browser
                            ->nullable()
                            ->columnSpan('full'),
                    ])
                    ->columns(1),

                Tab::make('Tentang Kami')
                    ->schema([
                        TextInput::make('about_title')
                            ->columnSpan('full'),
                        RichEditor::make('about_content')
                            ->columnSpan('full'),
                        FileUpload::make('about_image')
                            ->image()
                            ->directory('page-settings/about')
                            ->nullable()
                            ->columnSpan('full'),
                    ])
                    ->columns(1),

                Tab::make('Footer')
                    ->schema([
                        TextInput::make('footer_text')
                            ->columnSpan('full'),
                        TextInput::make('footer_links')
                            ->columnSpan('full'),
                    ])
                    ->columns(1),

                Tab::make('Ajakan')
                    ->schema([
                        TextInput::make('call_to_action_text')
                            ->columnSpan('full'),
                        TextInput::make('call_to_action_link')
                            ->url()
                            ->columnSpan('full'),
                    ])
                    ->columns(1),
            ])
            ->columnSpan('full')
    ])
    ->columns(1);
}

    public static function table(Table $table): Table
    {
        return $table;
    }


   public static function getPages(): array
{
    return [
        'index' => Pages\ListPageSettings::route('/'),
        'edit' => Pages\EditPageSetting::route('/{record}/edit'),
    ];
}
}

