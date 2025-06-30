<?php

namespace App\Filament\Resources\Trash2Move;

use App\Filament\Resources\Trash2Move\PostinganResource\Pages;
use App\Models\Postingan;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class PostinganResource extends Resource
{
    protected static ?string $model = Postingan::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $navigationLabel = 'Postingan';
    protected static ?string $pluralModelLabel = 'Postingan';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextArea::make('nama')
                    ->required()
                    ->label('Nama Produk')
                    ->maxLength(255),


                Forms\Components\TextInput::make('harga')
                    ->label('Harga')
                    ->maxLength(100),

                Forms\Components\TextInput::make('rating')
                    ->label('Rating')
                    ->maxLength(10),

                Forms\Components\Select::make('kategori')
                    ->label('Kategori')
                    ->required()
                    ->options([
                        'kursi' => 'Kursi',
                        'ganci' => 'Ganci',
                    ])
                    ->native(false)
                    ->searchable(),


                Forms\Components\TextInput::make('link')
                    ->label('Link Beli')
                    ->url()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar Produk')
                    ->directory('postingans')
                    ->disk('public')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->visibility('public'),

                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi')
                    ->rows(5),

            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('gambar')->label('Gambar')->circular(),
                Tables\Columns\TextColumn::make('harga')->sortable()->label('Harga'),
                Tables\Columns\TextColumn::make('kategori')->sortable()->label('Kategori'),
                Tables\Columns\TextColumn::make('rating')->label('Rating'),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostingans::route('/'),
            'create' => Pages\CreatePostingan::route('/create'),
            'edit' => Pages\EditPostingan::route('/{record}/edit'),
        ];
    }
}
