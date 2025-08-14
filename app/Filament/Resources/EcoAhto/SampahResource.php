<?php

namespace App\Filament\Resources\EcoAhto;

use Filament\Forms;
use Filament\Tables;
use App\Models\Sampah;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use App\Filament\Resources\EcoAhto\SampahResource\Pages;
use App\Models\Karyawan;

class SampahResource extends Resource
{
    protected static ?string $model = Sampah::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Sampah';
    protected static ?string $navigationIcon = 'heroicon-o-trash';
    protected static ?string $pluralModelLabel = 'Sampah';
    protected static ?int $navigationSort = 4;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_sampah')
                    ->label('Sampah')
                    ->placeholder("Masukkan Sampah")
                    ->required(),

                Forms\Components\TextInput::make('jenis_sampah')
                    ->label('Jenis Sampah')
                    ->placeholder("Masukkan Jenis Sampah")
                    ->required(),

               Forms\Components\Select::make('karyawan_id')
                    ->label('Nama Karyawan')
                    ->relationship('karyawan', 'nama')
                    ->preload() 
                    ->required(),

                Forms\Components\TextInput::make('berat')
                    ->label('Berat Sampah')
                    ->placeholder("Masukkan Berat sampah")
                    ->numeric()
                    ->required()
                    ->suffix(' Kg'),

                Forms\Components\DateTimePicker::make('tanggal_timbang')
                    ->label('Tanggal Timbang')
                    ->required()
                    ->default(now()),

                Forms\Components\TextInput::make('sumber')
                    ->placeholder("Masukkan Asal/Sumber sampah")
                    ->required(),

                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'Masih Digudang' => 'Masih Digudang',
                        'Sudah Diangkut' => 'Sudah Diangkut',
                    ]),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_sampah')
                    ->label("Sampah")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_sampah')
                    ->label("Jenis")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('karyawan.nama')
                    ->label('Nama Karyawan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('berat')
                    ->sortable()
                    ->suffix(' Kg'),

                Tables\Columns\TextColumn::make('tanggal_timbang')
                    ->label("Tanggal Timbang")
                    ->dateTime(),

                Tables\Columns\TextColumn::make('sumber')
                    ->sortable()
                    ->searchable(),
                
                
                Tables\Columns\TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Masih Digudang' => 'warning',
                    'Sudah Diangkut' => 'success',
                }),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Tanggal Update Data')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->actions([
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
            'index' => Pages\ListSampahs::route('/'),
            'create' => Pages\CreateSampah::route('/create'),
            'edit' => Pages\EditSampah::route('/{record}/edit'),
        ];
    }
    public static function canAccess(): bool
    {
        return Filament::auth()->user()?->role === 'ecoahto';
    }
}
