<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventContentResource\Pages;
use App\Filament\Resources\EventContentResource\RelationManagers;
use App\Models\CategoryContent;
use App\Models\EventContent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventContentResource extends Resource
{
    protected static ?string $model = EventContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Acara';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $slug = 'event';

    public static ?string $label = 'Acara';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_contents_id')
                    ->label('Kategori')
                    ->options(CategoryContent::pluck('name', 'id')->toArray())
                    ->searchable()
                    ->required(),
                TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                FileUpload::make('image_path')
                    ->label('Gambar Konten')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('release_year')
                    ->label('Tahun Rilis')
                    ->required(),
                TextInput::make('total_quota')
                    ->label('Total Kuota')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('categoryContent.name')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                ImageColumn::make('image_path')
                    ->label('Gambar Konten')
                    ->disk('public')
                    ->visibility('public'),
                TextColumn::make('release_year')
                    ->label('Tahun Rilis')
                    ->searchable(),
                TextColumn::make('total_quota')
                    ->label('Total Quota')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListEventContents::route('/'),
            'create' => Pages\CreateEventContent::route('/create'),
            'edit' => Pages\EditEventContent::route('/{record}/edit'),
        ];
    }
}
