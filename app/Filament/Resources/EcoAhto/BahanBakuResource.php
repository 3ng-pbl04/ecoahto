<?php
namespace App\Filament\Resources\Ecoahto;

use Filament\Forms;
use Filament\Tables;
use App\Models\BahanBaku;
use Filament\Facades\Filament;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\DeleteAction;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\EcoAhto\BahanBakuResource\Pages\EditBahanBaku;
use App\Filament\Resources\EcoAhto\BahanBakuResource\Pages\ListBahanBakus;
use App\Filament\Resources\EcoAhto\BahanBakuResource\Pages\CreateBahanBaku;

class BahanBakuResource extends Resource
{
    protected static ?string $model = BahanBaku::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Bahan Baku';
    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $pluralModelLabel = 'Bahan Baku';

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
                Forms\Components\TextInput::make('jumlah')
                    ->numeric()
                    ->placeholder('Masukkan Jumlah Bahan Baku')
                    ->required(),
                Forms\Components\TextInput::make('warna')
                    ->placeholder('Masukkan Warna Bahan Baku')
                    ->required(),
                Forms\Components\TextInput::make('asal')
                    ->placeholder('Masukkan Asal Bahan Baku')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_olah')
                    ->label('Tanggal Olah')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Mentah' => 'Mentah',
                        'Diolah' => 'Diolah',
                        'Jadi' => 'Jadi',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_bahan_baku')->label('Nama'),
                Tables\Columns\TextColumn::make('jumlah'),
                Tables\Columns\TextColumn::make('warna'),
                Tables\Columns\TextColumn::make('asal'),
                Tables\Columns\TextColumn::make('tanggal_olah')->date(),
                TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Mentah' => 'warning',
                    'Diolah' => 'info',
                    'Jadi' => 'success',
                    default => 'gray',
                }),
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
}
