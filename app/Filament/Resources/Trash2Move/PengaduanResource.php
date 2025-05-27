<?php

namespace App\Filament\Resources\Trash2Move;

namespace App\Filament\Resources\Trash2Move;

use App\Models\Pengaduan;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use App\Filament\Resources\Trash2Move\PengaduanResource\Pages;
use Directory;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;

class PengaduanResource extends Resource
{
    protected static ?string $model = Pengaduan::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationIcon = 'heroicon-o-pencil'; // contoh ikon
    protected static ?string $navigationLabel = 'Pengaduan';
    protected static ?string $pluralModelLabel = 'Pengaduan';

    public static function form(Form $form): Form

    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required()->maxLength(255),
                Forms\Components\TextInput::make('no_telp')->required()->maxLength(20),
                Forms\Components\Textarea::make('alamat')->required(),
                Forms\Components\FileUpload::make('foto')->image()->nullable()->directory('pengaduan')->maxSize(2048),

                Forms\Components\Textarea::make('keterangan')->required(),
                Forms\Components\TextInput::make('titik_koordinat')->required()->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'Terkirim' => 'Terkirim',
                        'Ditolak' => 'Ditolak',
                        'Diterima' => 'Diterima',
                        'Dijadwalkan' => 'Dijadwalkan',
                    ])
                    ->default('Terkirim')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table

    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('no_telp'),
                Tables\Columns\TextColumn::make('alamat')->limit(30),
                Tables\Columns\TextColumn::make('keterangan')->limit(50),
                Tables\Columns\TextColumn::make('titik_koordinat'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'Terkirim',
                        'danger' => 'Ditolak',
                        'success' => 'Diterima',
                        'primary' => 'Dijadwalkan',
                    ]),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d/m/Y H:i')->label('Dibuat'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Terkirim' => 'Terkirim',
                        'Ditolak' => 'Ditolak',
                        'Diterima' => 'Diterima',
                        'Dijadwalkan' => 'Dijadwalkan',
                    ]),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengaduans::route('/'),
            'create' => Pages\CreatePengaduan::route('/create'),
            'edit' => Pages\EditPengaduan::route('/{record}/edit'),
        ];
    }
}
