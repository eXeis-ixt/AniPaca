<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MangaResource\Pages;
use App\Filament\Resources\MangaResource\RelationManagers;
use App\Models\Manga;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Nette\Utils\ImageColor;

class MangaResource extends Resource
{
    protected static ?string $model = Manga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('author'),
                TextInput::make('chapters'),
                TextInput::make('downloads')->prefix('url')->prefixIcon('heroicon-o-link'),
                FileUpload::make('image')->image()->imageEditor()->downloadable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title'),
                TextColumn::make('author'),
                TextColumn::make('chapters'),
                TextColumn::make('downloads'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMangas::route('/'),
            'create' => Pages\CreateManga::route('/create'),
            'edit' => Pages\EditManga::route('/{record}/edit'),
        ];
    }
}
