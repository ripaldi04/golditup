<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookContentResource\Pages;
use App\Models\BookContent;
use App\Models\CategoryContent;
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

class BookContentResource extends Resource
{
    protected static ?string $model = BookContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Buku';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $slug = 'book';
    public static ?string $label = 'Buku';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withTrashed();
    }
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
                TextInput::make('author')
                    ->label('Penulis')
                    ->required(),
                TextInput::make('detail_header')
                    ->label('Detail Header')
                    ->required(),
                TextInput::make('detail_deskripsi')
                    ->label('Detail Deskripsi')
                    ->required(),
                FileUpload::make('image_book1')
                    ->label('Gambar Buku1')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image_book2')
                    ->label('Gambar Buku2')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                FileUpload::make('image_book3')
                    ->label('Gambar Buku3')
                    ->disk('public') // Tambahkan jika ingin simpan di storage/app/public
                    ->directory('uploads') // opsional
                    ->visibility('public'),
                TextInput::make('buying_guide')
                    ->label('Panduan Pembelian')
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
                TextColumn::make('author')
                    ->label('Penulis')
                    ->searchable(),
                TextColumn::make('detail_header')
                    ->label('Detail Header')
                    ->searchable(),
                TextColumn::make('detail_deskripsi')
                    ->label('Detail Deskripsi')
                    ->searchable(),
                ImageColumn::make('book_image1')
                    ->label('Gambar Buku1')
                    ->disk('public')
                    ->visibility('public'),
                ImageColumn::make('book_image2')
                    ->label('Gambar Buku2')
                    ->disk('public')
                    ->visibility('public'),
                ImageColumn::make('book_image3')
                    ->label('Gambar Buku3')
                    ->disk('public')
                    ->visibility('public'),
                TextColumn::make('buying_guide')
                    ->label('Panduan Pembelian')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListBookContents::route('/'),
            'create' => Pages\CreateBookContent::route('/create'),
            'edit' => Pages\EditBookContent::route('/{record}/edit'),
        ];
    }
}
