<?php

namespace App\Filament\Resources\EcoAhto;

use App\Filament\Resources\EcoAhto\BahanJadiResource\Pages;
use App\Filament\Resources\EcoAhto\BahanJadiResource\RelationManagers;
use App\Models\BahanJadi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BahanJadiResource extends Resource
{
    protected static ?string $model = BahanJadi::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Bahan Jadi';
    protected static ?string $navigationIcon = 'iconoir-table';
    protected static ?string $pluralModelLabel = 'Bahan Jadi';
    protected static ?int $navigationSort = 3;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->placeholder('Masukkan Kode Bahan Jadi')
                    ->unique(ignoreRecord: true),
                    
                Forms\Components\TextInput::make('warna')
                    ->placeholder('Masukkan Warna Bahan Jadi')
                    ->required(),

                Forms\Components\TextInput::make('jenis')
                    ->placeholder('Masukkan Jenis Bahan Jadi')
                    ->required(),
                    
                Forms\Components\TextInput::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Timbangan Bahan Jadi')
                    ->required()
                    ->suffix(' Kg'),
                
                Forms\Components\TextInput::make('jumlah_karung')
                    ->label('Jumlah Timbangan')
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Karung Bahan Jadi')
                    ->required()
                    ->suffix(' Karung'),

                Forms\Components\DateTimePicker::make('tanggal_pengarungan')
                    ->label('Tanggal Pengarungan')
                    ->required()
                    ->default(now()),

                Forms\Components\Select::make('status')
                    ->options([
                        'Belum Dikirim' => 'Belum Dikirim',
                        'Sudah Dikirim' => 'Sudah Dikirim',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('warna')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')
                    ->searchable()
                    ->suffix(' Kg')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('jumlah_karung')
                    ->label('Jumlah Karung')
                    ->searchable()
                    ->suffix(' Karung')
                    ->sortable(),

                Tables\Columns\TextColumn::make('tanggal_pengarungan')
                    ->dateTime()
                    ->sortable()
                    ->label("Tanggal Pengarungan"),

                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Belum Dikirim' => 'warning',
                        'Sudah Dikirim' => 'success',
                        default => 'gray',
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBahanJadis::route('/'),
            'create' => Pages\CreateBahanJadi::route('/create'),
            'edit' => Pages\EditBahanJadi::route('/{record}/edit'),
        ];
    }
}
