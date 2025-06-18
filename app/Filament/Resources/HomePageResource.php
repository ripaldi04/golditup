<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
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

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Home Page';
    protected static ?string $navigationGroup = 'Page';
    public static ?string $label = 'Home Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner1')
                    ->label('Banner 1')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('banner2')
                    ->label('Banner 2')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('header_banner1')
                    ->label('Header Banner1')
                    ->required(),
                TextInput::make('deskripsi_banner1')
                    ->label('Deskripsi Banner')
                    ->required(),
                TextInput::make('header_banner2')
                    ->label('Header Banner2')
                    ->required(),
                TextInput::make('deskripsi_banner2')
                    ->label('Deskripsi Banner2')
                    ->required(),
                TextInput::make('youtube_preview')
                    ->label('Youtube Preview')
                    ->required(),
                TextInput::make('header_preview')
                    ->label('Header Preview')
                    ->required(),
                TextInput::make('deskripsi_preview')
                    ->label('Deskripsi Preview')
                    ->required(),
                TextInput::make('header_copywriting1')
                    ->label('Heading Copywriting1')
                    ->required(),
                TextInput::make('deskripsi_copywriting1')
                    ->label('Deskripsi Copywriting1')
                    ->required(),
                TextInput::make('header_point1')
                    ->label('Header Point1')
                    ->required(),
                TextInput::make('deskripsi_point1')
                    ->label('Deskripsi Point1')
                    ->required(),
                TextInput::make('header_point2')
                    ->label('Header Point2')
                    ->required(),
                TextInput::make('deskripsi_point2')
                    ->label('Deskripsi Point2')
                    ->required(),
                TextInput::make('header_point3')
                    ->label('Header Point3')
                    ->required(),
                TextInput::make('deskripsi_point3')
                    ->label('Deskripsi Point3')
                    ->required(),
                TextInput::make('header_point4')
                    ->label('Header Point4')
                    ->required(),
                TextInput::make('deskripsi_point4')
                    ->label('Deskripsi Point4')
                    ->required(),
                TextInput::make('header_copywriting2')
                    ->label('Heading Copywriting2')
                    ->required(),
                TextInput::make('deskripsi_copywriting2')
                    ->label('Deskripsi Copywriting2')
                    ->required(),
                TextInput::make('card_header1')
                    ->label('Card Header 1')
                    ->required(),
                TextInput::make('card_deskripsi1')
                    ->label('Card Deskripsi 1')
                    ->required(),
                TextInput::make('card_header2')
                    ->label('Card Header2')
                    ->required(),
                TextInput::make('card_deskripsi2')
                    ->label('Card Deskripsi2')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner1')
                    ->label('Banner 1')
                    ->disk('public'),
                ImageColumn::make('banner2')
                    ->label('Banner 2')
                    ->disk('public'),
                TextColumn::make('header_banner1')
                    ->label('Header Banner1'),
                TextColumn::make('deskripsi_banner1')
                    ->label('Deskripsi Banner'),
                TextColumn::make('header_banner2')
                    ->label('Header Banner1'),
                TextColumn::make('deskripsi_banner2')
                    ->label('Deskripsi Banner'),
                TextColumn::make('youtube_preview')
                    ->label('Youtube Preview'),
                TextColumn::make('header_preview')
                    ->label('Header Preview'),
                TextColumn::make('deskripsi_preview')
                    ->label('Deskripsi Preview'),
                TextColumn::make('header_copywriting1')
                    ->label('Heading Copywriting1'),
                TextColumn::make('deskripsi_copywriting1')
                    ->label('Deskripsi Copywriting1'),
                TextColumn::make('header_point1')
                    ->label('Header Point1'),
                TextColumn::make('deskripsi_point1')
                    ->label('Deskripsi Point1'),
                TextColumn::make('header_point2')
                    ->label('Header Point2'),
                TextColumn::make('deskripsi_point2')
                    ->label('Deskripsi Point2'),
                TextColumn::make('header_point3')
                    ->label('Header Point3'),
                TextColumn::make('deskripsi_point3')
                    ->label('Deskripsi Point3'),
                TextColumn::make('header_point4')
                    ->label('Header Point4'),
                TextColumn::make('deskripsi_point4')
                    ->label('Deskripsi Point4'),
                TextColumn::make('header_copywriting2')
                    ->label('Heading Copywriting2'),
                TextColumn::make('deskripsi_copywriting2')
                    ->label('Deskripsi Copywriting2'),
                TextColumn::make('card_header1')
                    ->label('Card Header 1'),
                TextColumn::make('card_deskripsi1')
                    ->label('Card Deskripsi 1'),
                TextColumn::make('card_header2')
                    ->label('Card Header2'),
                TextColumn::make('card_deskripsi2')
                    ->label('Card Deskripsi2'),
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }
}
