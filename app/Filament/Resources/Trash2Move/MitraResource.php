<?php

namespace App\Filament\Resources\Trash2Move;

use App\Filament\Resources\Trash2Move\MitraResource\Pages;
use App\Filament\Resources\Trash2Move\MitraResource\RelationManagers;
use App\Models\Mitra;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\DeleteAction;


class MitraResource extends Resource
{
    protected static ?string $model = Mitra::class;

    protected static ?string $navigationGroup = 'Manajemen';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Mitra';
    protected static ?string $pluralModelLabel = 'Mitra';

  

    

    public static function form(Form $form): Form
    {
        return $form->schema([
        TextInput::make('nama')->required()->maxLength(255),
        TextInput::make('kontak')->required()->maxLength(255),
        TextInput::make('email')->required()->email()->maxLength(255),
        Textarea::make('alamat')->required()->maxLength(500),
        Select::make('status')
            ->required()
            ->options([
                'aktif' => 'Aktif',
                'tidak aktif' => 'Tidak Aktif',
            ])
            ->default('aktif'),
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nama')->searchable()->sortable(),
            TextColumn::make('kontak'),
            TextColumn::make('email'),
            TextColumn::make('alamat')->limit(30),
            BadgeColumn::make('status')
                ->colors([
                    'success' => 'aktif',
                    'danger' => 'tidak aktif',
                ]),
        ])
        ->defaultSort('id', 'desc')
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
            'index' => Pages\ListMitras::route('/'),
            'create' => Pages\CreateMitra::route('/create'),
            'edit' => Pages\EditMitra::route('/{record}/edit'),
        ];
    }

    
}
