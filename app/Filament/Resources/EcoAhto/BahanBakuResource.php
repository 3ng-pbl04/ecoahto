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

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('warna')
                    ->required(),
                Forms\Components\TextInput::make('asal')
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
    public static function canAccess(): bool
    {
        return Filament::auth()->user()?->role === 'ecoahto';
    }
}
