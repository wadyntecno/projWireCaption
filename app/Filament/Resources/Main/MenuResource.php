<?php

namespace App\Filament\Resources\Main;

use App\Filament\Resources\Main\MenuResource\Pages;
use App\Filament\Resources\Main\MenuResource\RelationManagers;
use App\Models\Main\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\WithPagination;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                ->label('Descrição')
                    ->maxLength(255),
                Forms\Components\TextInput::make('guid')
                ->label('URL')
                ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('style')
                    ->label('Tipo Principal')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                ->searchable(),
                Tables\Columns\TextColumn::make('description')
                ->label('Descrição')
                ->searchable(),
                Tables\Columns\TextColumn::make('guid')
                ->label('URL')
                ->searchable(),
                Tables\Columns\IconColumn::make('style')
                    ->label('Tipo principal')
                    ->boolean(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMenus::route('/'),
        ];
    }
}
