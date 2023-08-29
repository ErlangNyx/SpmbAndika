<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormulirResource\Pages;
use App\Filament\Resources\FormulirResource\RelationManagers;
use App\Models\Formulir;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormulirResource extends Resource
{
    protected static ?string $model = Formulir::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_daftar')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('id_periode')
                    ->required(),
                Forms\Components\TextInput::make('id_user')
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required()
                    ->maxLength(1),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required()
                    ->maxLength(100),
                Forms\Components\DateTimePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telp')
                    ->tel()
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('program_studi')
                    ->required()
                    ->maxLength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_daftar'),
                Tables\Columns\TextColumn::make('id_periode'),
                Tables\Columns\TextColumn::make('id_user'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('tempat_lahir'),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('telp'),
                Tables\Columns\TextColumn::make('program_studi'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFormulirs::route('/'),
            'create' => Pages\CreateFormulir::route('/create'),
            'edit' => Pages\EditFormulir::route('/{record}/edit'),
        ];
    }    
}
