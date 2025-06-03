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
                ->tabs([
                  Tab::make('Hero')
                    ->schema([
                        TextInput::make('hero_title'),
                        Textarea::make('hero_description'),
                        FileUpload::make('hero_image')
                            ->image()
                            ->directory('page-settings/hero')
                            ->nullable(),
                    ]),

                Tab::make('Tentang Kami')
                    ->schema([
                        TextInput::make('about_title'),
                        RichEditor::make('about_content'),
                        FileUpload::make('about_image')
                            ->image()
                            ->directory('page-settings/about')
                            ->nullable(),
                    ]),

                    Tab::make('Footer')
                        ->schema([
                            TextInput::make('footer_text'),
                            TextInput::make('footer_links'),
                        ]),
                    Tab::make('Ajakan')
                        ->schema([
                            TextInput::make('call_to_action_text'),
                            TextInput::make('call_to_action_link')->url(),
                        ]),
                    // Tambah tab lain sesuai kebutuhan
                ]),

        ]);
}

    public static function table(Table $table): Table
    {
        return $table;
    }


   public static function getPages(): array
{
    return [
        'index' => Pages\ListPageSettings::route('/'),
        'create' => Pages\CreatePageSetting::route('/create'),
        'edit' => Pages\EditPageSetting::route('/{record}/edit'),
    ];
}
}

