<?php

namespace App\Filament\Resources\Ecoahto;

use App\Filament\Resources\Ecoahto\SampahResource\Pages;
use App\Models\Sampah;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class SampahResource extends Resource
{
    protected static ?string $model = Sampah::class;
    protected static ?string $navigationGroup = 'Manajemen';
    protected static ?string $navigationLabel = 'Sampah';
    protected static ?string $navigationIcon = 'heroicon-o-trash';
    protected static ?string $pluralModelLabel = 'Sampah';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis_sampah')->required(),
                Forms\Components\TextInput::make('warna')->required(),
                Forms\Components\TextInput::make('berat')->numeric()->required()->suffix('kg'),
                Forms\Components\DatePicker::make('tanggal_masuk')->required(),
                Forms\Components\TextInput::make('sumber')->required(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'Masuk' => 'Masuk',
                        'Disortir' => 'Disortir',
                        'Dicacah' => 'Dicacah',
                        'Dikeringkan' => 'Dikeringkan',
                        'Dipilah' => 'Dipilah',
                        'Selesai' => 'Selesai',
                    ]),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_sampah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('warna'),
                Tables\Columns\TextColumn::make('berat')->suffix(' kg'),
                Tables\Columns\TextColumn::make('tanggal_masuk')->date(),
                Tables\Columns\TextColumn::make('sumber'),
                Tables\Columns\BadgeColumn::make('status')->colors([
                    'gray' => 'Masuk',
                    'warning' => 'Disortir',
                    'info' => 'Dicacah',
                    'yellow' => 'Dikeringkan',
                    'blue' => 'Dipilah',
                    'success' => 'Selesai',
                ]),
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
}
