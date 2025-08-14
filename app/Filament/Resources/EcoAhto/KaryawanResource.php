<?php

namespace App\Filament\Resources\EcoAhto;

use Filament\Forms;
use Filament\Tables;
use App\Models\Karyawan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EcoAhto\KaryawanResource\Pages;
use App\Filament\Resources\EcoAhto\KaryawanResource\RelationManagers;

class KaryawanResource extends Resource
{
    protected static ?string $model = Karyawan::class;
     
     
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'SDM & Operasional';
    protected static ?string $navigationLabel = 'Karyawan';
    protected static ?string $pluralModelLabel = 'Karyawan';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->placeholder('Masukkan Nama Karyawan')
                    ->required(),

                Forms\Components\TextInput::make('notelp')
                    ->tel()
                    ->placeholder('Masukkan Nomor Telepon Karyawan')
                    ->label('Nomor Telepon')
                    ->required(),

                Forms\Components\TextArea::make('alamat')
                    ->placeholder('Masukkan Alamat Karyawan')
                    ->required(),
                
                Forms\Components\FileUpload::make('identitas')
                    ->required()
                    ->label('Foto Identitas')
                    ->directory('karyawans')
                    ->disk('public')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->visibility('public'),    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('nama')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('notelp')
                ->label("Nomor Telepon")
                ->searchable(),

            Tables\Columns\TextColumn::make('alamat')
                ->searchable(),

            Tables\Columns\ImageColumn::make('identitas')
                    ->label('Foto Identitas')
                     ->size(75),
            
            Tables\Columns\TextColumn::make('updated_at')
                    ->label('Tanggal Update Data')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryawans::route('/'),
            'create' => Pages\CreateKaryawan::route('/create'),
            'edit' => Pages\EditKaryawan::route('/{record}/edit'),
        ];
    }
    public static function canAccess(): bool
    {
        return Filament::auth()->user()?->role === 'ecoahto';
    }
}
