<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembershipContentResource\Pages;
use App\Models\CategoryContent;
use App\Models\MembershipContent;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;


class MembershipContentResource extends Resource
{
    protected static ?string $model = MembershipContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Membership/Kelas';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $slug = 'class';
    public static ?string $label = 'Membership/Kelas';

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
                TextInput::make('total_episode')
                    ->label('Total Episode')
                    ->required(),
                TextInput::make('preview_class')
                    ->label('Thumbnail Video')
                    ->required(),
                TextInput::make('detail_header')
                    ->label('Detail Header')
                    ->required(),
                TextInput::make('detail_deskripsi')
                    ->label('Detail Deskripsi')
                    ->required(),
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
                TextColumn::make('total_episode')
                    ->label('Total Episode')
                    ->searchable(),
                TextColumn::make('preview_class')
                    ->label('Thumbnail Video')
                    ->searchable(),
                TextColumn::make('detail_header')
                    ->label('Detail Header')
                    ->searchable(),
                TextColumn::make('detail_deskripsi')
                    ->label('Detail Deskripsi')
                    ->searchable(),
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
            'index' => Pages\ListMembershipContents::route('/'),
            'create' => Pages\CreateMembershipContent::route('/create'),
            'edit' => Pages\EditMembershipContent::route('/{record}/edit'),
        ];
    }
}
