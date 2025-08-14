<?php
namespace App\Filament\Resources\Ecoahto;

use Filament\Forms;
use Filament\Tables;
use App\Models\BahanBaku;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EcoAhto\BahanBakuResource\Pages;


class BahanBakuResource extends Resource
{
    protected static ?string $model = BahanBaku::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Bahan Baku';
    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $pluralModelLabel = 'Bahan Baku';
    protected static ?int $navigationSort = 1;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->placeholder('Masukkan Kode Bahan Baku')
                    ->unique(ignoreRecord: true),
                    
                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->placeholder('Masukkan Nama Bahan Baku')
                    ->required(),

                Forms\Components\TextInput::make('warna')
                    ->placeholder('Masukkan Warna Bahan Baku')
                    ->required(),

                Forms\Components\TextInput::make('jumlah_timbangan')
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Timbangan Bahan Baku')
                    ->required()
                    ->suffix(' Kg'),
                
                Forms\Components\TextInput::make('jumlah_karung')
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Karung Bahan Baku')
                    ->required()
                    ->suffix(' Karung'),

                Forms\Components\TextInput::make('asal')
                    ->placeholder('Masukkan Asal Bahan Baku')
                    ->required(),

                Forms\Components\DateTimePicker::make('tanggal_masuk')
                    ->label('Tanggal & Jam Masuk')
                    ->required()
                    ->default(now()),

                Forms\Components\Select::make('status')
                    ->options([
                        'Belum Disortir' => 'Belum Disortir',
                        'Sudah Disortir' => 'Sudah Disortir',
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

                Tables\Columns\TextColumn::make('nama_bahan_baku')
                    ->searchable()
                    ->label('Nama'),

                Tables\Columns\TextColumn::make('warna')
                    ->searchable()
                    ->sortable(),

                    
                Tables\Columns\TextColumn::make('jumlah_timbangan')
                    ->label('Jumlah Timbangan')
                    ->sortable()
                    ->suffix(' Kg'),

                Tables\Columns\TextColumn::make('jumlah_karung')
                    ->label('Jumlah Karung')
                    ->sortable()
                    ->suffix(' Karung'),
                
                Tables\Columns\TextColumn::make('asal')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tanggal_masuk')
                    ->dateTime()
                    ->sortable()
                    ->label("Tanggal Masuk"),

                TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Belum Disortir' => 'warning',
                        'Sudah Disortir' => 'success',
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

        public static function getPages(): array
    {
        return [
            'index' => Pages\ListBahanBakus::route('/'),
            'create' => Pages\CreateBahanBaku::route('/create'),
            'edit' => Pages\EditBahanBaku::route('/{record}/edit'),
        ];
    }
    public static function canAccess(): bool
    {
        return Filament::auth()->user()?->role === 'ecoahto';
    }
}



