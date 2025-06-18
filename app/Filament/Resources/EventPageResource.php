<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventPageResource\Pages;
use App\Filament\Resources\EventPageResource\RelationManagers;
use App\Models\EventPage;
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

class EventPageResource extends Resource
{
    protected static ?string $model = EventPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Page';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner')
                    ->label('Banner Konten')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('header')
                    ->label('Header'),
                TextInput::make('deskripsi')
                    ->label('Deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner')
                    ->label('Banner')
                    ->disk('public'),
                TextColumn::make('header')
                    ->label('Header'),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi'),
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
            'index' => Pages\ListEventPages::route('/'),
            'create' => Pages\CreateEventPage::route('/create'),
            'edit' => Pages\EditEventPage::route('/{record}/edit'),
        ];
    }
}
