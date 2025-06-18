<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutusPageResource\Pages;
use App\Filament\Resources\AboutusPageResource\RelationManagers;
use App\Models\AboutusPage;
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

class AboutusPageResource extends Resource
{
    protected static ?string $model = AboutusPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Page';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('header1')
                    ->label('Header 1')
                    ->required(),
                TextInput::make('deskripsi1')
                    ->label('Deskripsi 1')
                    ->required(),
                FileUpload::make('image1')
                    ->label('Gambar Konten1')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image2')
                    ->label('Gambar Konten2')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image3')
                    ->label('Gambar Konten3')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image4')
                    ->label('Gambar Konten4')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image5')
                    ->label('Gambar Konten5')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image6')
                    ->label('Gambar Konten6')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('header2')
                    ->label('Header2')
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
                TextInput::make('header_point5')
                    ->label('Header Point5')
                    ->required(),
                TextInput::make('deskripsi_point5')
                    ->label('Deskripsi Point5')
                    ->required(),
                TextInput::make('header3')
                    ->label('Header3')
                    ->required(),
                FileUpload::make('card1')
                    ->label('Background Card1')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title1')
                    ->label('Title1')
                    ->required(),
                TextInput::make('deskripsi_card1')
                    ->label('Deskripsi Card1')
                    ->required(),
                FileUpload::make('card2')
                    ->label('Background Card2')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title2')
                    ->label('Title2')
                    ->required(),
                TextInput::make('deskripsi_card2')
                    ->label('Deskripsi Card2')
                    ->required(),
                FileUpload::make('card3')
                    ->label('Background Card3')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title3')
                    ->label('Title3')
                    ->required(),
                TextInput::make('deskripsi_card3')
                    ->label('Deskripsi Card3')
                    ->required(),
                FileUpload::make('card4')
                    ->label('Background Card4')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title4')
                    ->label('Title4')
                    ->required(),
                TextInput::make('deskripsi_card4')
                    ->label('Deskripsi Card4')
                    ->required(),
                FileUpload::make('card5')
                    ->label('Background Card5')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title5')
                    ->label('Title5')
                    ->required(),
                TextInput::make('deskripsi_card5')
                    ->label('Deskripsi Card5')
                    ->required(),
                FileUpload::make('card6')
                    ->label('Background Card6')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('title6')
                    ->label('Title6')
                    ->required(),
                TextInput::make('deskripsi_card6')
                    ->label('Deskripsi Card6')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('header1')->label('Header 1'),
                TextColumn::make('deskripsi1')->label('Deskripsi 1'),

                ImageColumn::make('image1')->label('Gambar Konten1')->disk('public'),
                ImageColumn::make('image2')->label('Gambar Konten2')->disk('public'),
                ImageColumn::make('image3')->label('Gambar Konten3')->disk('public'),
                ImageColumn::make('image4')->label('Gambar Konten4')->disk('public'),
                ImageColumn::make('image5')->label('Gambar Konten5')->disk('public'),
                ImageColumn::make('image6')->label('Gambar Konten6')->disk('public'),

                TextColumn::make('header2')->label('Header2'),

                TextColumn::make('header_point1')->label('Header Point1'),
                TextColumn::make('deskripsi_point1')->label('Deskripsi Point1'),

                TextColumn::make('header_point2')->label('Header Point2'),
                TextColumn::make('deskripsi_point2')->label('Deskripsi Point2'),

                TextColumn::make('header_point3')->label('Header Point3'),
                TextColumn::make('deskripsi_point3')->label('Deskripsi Point3'),

                TextColumn::make('header_point4')->label('Header Point4'),
                TextColumn::make('deskripsi_point4')->label('Deskripsi Point4'),

                TextColumn::make('header_point5')->label('Header Point5'),
                TextColumn::make('deskripsi_point5')->label('Deskripsi Point5'),

                TextColumn::make('header_point6')->label('Header Point6'),
                TextColumn::make('deskripsi_point6')->label('Deskripsi Point6'),

                TextColumn::make('header3')->label('Header3'),

                TextColumn::make('card1')->label('Card1'),
                TextColumn::make('title1')->label('Title1'),
                TextColumn::make('deskripsi_card1')->label('Deskripsi Card1'),

                TextColumn::make('card2')->label('Card2'),
                TextColumn::make('title2')->label('Title2'),
                TextColumn::make('deskripsi_card2')->label('Deskripsi Card2'),

                TextColumn::make('card3')->label('Card3'),
                TextColumn::make('title3')->label('Title3'),
                TextColumn::make('deskripsi_card3')->label('Deskripsi Card3'),

                TextColumn::make('card4')->label('Card4'),
                TextColumn::make('title4')->label('Title4'),
                TextColumn::make('deskripsi_card4')->label('Deskripsi Card4'),

                TextColumn::make('card5')->label('Card5'),
                TextColumn::make('title5')->label('Title5'),
                TextColumn::make('deskripsi_card5')->label('Deskripsi Card5'),

                TextColumn::make('card6')->label('Card6'),
                TextColumn::make('title6')->label('Title6'),
                TextColumn::make('deskripsi_card6')->label('Deskripsi Card6'),
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
            'index' => Pages\ListAboutusPages::route('/'),
            'create' => Pages\CreateAboutusPage::route('/create'),
            'edit' => Pages\EditAboutusPage::route('/{record}/edit'),
        ];
    }
}
