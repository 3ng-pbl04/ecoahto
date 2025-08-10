<?php

namespace App\Filament\Resources\EcoAhto;

use App\Filament\Resources\EcoAhto\BahanSortirResource\Pages;
use App\Filament\Resources\EcoAhto\BahanSortirResource\RelationManagers;
use App\Models\BahanSortir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Karyawan;

class BahanSortirResource extends Resource
{
    protected static ?string $model = BahanSortir::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Bahan Sortir';
    protected static ?string $navigationIcon = 'iconoir-sort';
    protected static ?string $pluralModelLabel = 'Bahan Sortir';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->placeholder('Masukkan Kode Bahan Sortir')
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('karyawan_id')
                    ->label('Nama Karyawan')
                    ->relationship('karyawan', 'nama')
                    ->preload() 
                    ->required(),

                Forms\Components\TextInput::make('jenis')
                    ->required()
                    ->placeholder('Masukkan Jenis Bahan Sortir'),
                    
                Forms\Components\TextInput::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')  
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Timbangan Bahan Sortir')
                    ->required()
                    ->suffix(' Kg'),

                Forms\Components\DateTimePicker::make('tanggal_penyortiran')
                    ->label('Tanggal Penyortiran')
                    ->required()
                    ->default(now()),

                Forms\Components\Select::make('status')
                    ->options([
                        'Belum Digiling' => 'Belum Digiling',
                        'Sudah Digiling' => 'Sudah Digiling',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('karyawan.nama')
                    ->label('Nama Karyawan')
                    ->sortable()
                    ->searchable(),


                Tables\Columns\TextColumn::make('jenis')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jumlah_timbangan')
                    ->numeric()
                    ->sortable()
                    ->suffix(' Kg'),

                Tables\Columns\TextColumn::make('tanggal_penyortiran')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Belum Digiling' => 'warning',
                        'Sudah Digiling' => 'success',
                        default => 'gray',
                    }),

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
            'index' => Pages\ListBahanSortirs::route('/'),
            'create' => Pages\CreateBahanSortir::route('/create'),
            'edit' => Pages\EditBahanSortir::route('/{record}/edit'),
        ];
    }
}
