<?php
namespace App\Filament\Resources\Trash2Move;

use App\Filament\Resources\Trash2Move\AnggotaResource\Pages;
use App\Models\Anggota;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Data Anggota';
    protected static ?string $pluralModelLabel = 'Anggota';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_telp')
                    ->label('No. Telepon')
                    ->required()
                    ->maxLength(20),
                Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->rows(3),
                Forms\Components\DatePicker::make('tanggal_bergabung')
                    ->required()
                    ->label('Tanggal Bergabung'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('no_telp')->label('Telepon'),
                Tables\Columns\TextColumn::make('tanggal_bergabung')->date()->label('Bergabung'),
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
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
