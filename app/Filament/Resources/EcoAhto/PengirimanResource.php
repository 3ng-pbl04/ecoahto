<?php

namespace App\Filament\Resources\EcoAhto;

use App\Filament\Resources\EcoAhto\PengirimanResource\Pages;
use App\Filament\Resources\EcoAhto\PengirimanResource\RelationManagers;
use App\Models\Pengiriman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengirimanResource extends Resource
{
    protected static ?string $model = Pengiriman::class;

    protected static ?string $navigationGroup = 'SDM & Operasional';
    protected static ?string $navigationLabel = 'Pengiriman';
    protected static ?string $navigationIcon = 'iconoir-send-solid';
    protected static ?string $pluralModelLabel = 'Pengiriman';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_buyer')
                    ->label('Nama Pembeli')
                    ->required()
                    ->placeholder('Masukkan Nama Pembeli'),
                
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat Pembeli')
                    ->required()
                    ->placeholder('Masukkan Alamat Pembeli'),

                Forms\Components\TextInput::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')
                    ->required()
                    ->numeric()
                    ->suffix(' Kg')
                    ->placeholder('Masukkan Jumlah Timbangan'),
                
                Forms\Components\TextInput::make('jumlah_karung')
                    ->label('Jumlah Karung')
                    ->required()
                    ->numeric()
                    ->suffix(' Karung')
                    ->placeholder('Masukkan Jumlah Karung'),

                Forms\Components\DateTimePicker::make('tanggal_kirim')
                    ->label('Tanggal Kirim')
                    ->required()
                    ->default(now()),

                Forms\Components\TextInput::make('plat')
                    ->label('Plat Kendaraan')
                    ->required()
                    ->placeholder('Masukkan Plat Kendaraan') ,

                Forms\Components\TextInput::make('nama_sopir')
                    ->label('Nama Sopir')
                    ->required()
                    ->placeholder('Masukkan Nama Sopir'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_buyer')
                    ->label('Nama Pembeli')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat Pembeli')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')
                    ->numeric()
                    ->sortable()
                    ->suffix(' Kg'),

                Tables\Columns\TextColumn::make('jumlah_karung')
                    ->label('Jumlah Karung')
                    ->numeric()
                    ->sortable()
                    ->suffix(' Karung'),

                Tables\Columns\TextColumn::make('tanggal_kirim')
                    ->label('Tanggal Kirim')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('plat')
                    ->label('Plat Kendaraan')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_sopir')
                    ->label('Nama Sopir')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Tanggal Update Data')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                
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
            'index' => Pages\ListPengirimen::route('/'),
            'create' => Pages\CreatePengiriman::route('/create'),
            'edit' => Pages\EditPengiriman::route('/{record}/edit'),
        ];
    }
}
