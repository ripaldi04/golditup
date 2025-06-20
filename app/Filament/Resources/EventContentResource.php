<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventContentResource\Pages;
use App\Filament\Resources\EventContentResource\RelationManagers;
use App\Models\CategoryContent;
use App\Models\EventContent;
use Date;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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
                DatePicker::make('event_date')
                    ->label('Tanggal Acara')
                    ->required(),
                TextInput::make('total_quota')
                    ->label('Total Kuota')
                    ->required(),
                TextInput::make('preview_event')
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
                    ->state(fn($record) => asset('storage/' . $record->image_path)) // <- Ini untuk gambar thumbnail muncul
                    ->url(fn($record) => asset('storage/' . $record->image_path))   // <- Ini untuk link jika diklik
                    ->openUrlInNewTab() // opsional
                    ->square(),
                TextColumn::make('event_date')
                    ->label('Tanggal Acara')
                    ->date('d M Y') // atau 'd F Y' untuk full bulan
                    ->sortable()
                    ->searchable(),
                TextColumn::make('total_quota')
                    ->label('Total Quota')
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
                TextColumn::make('preview_event')
                    ->label('Thumbnail Video')
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
            'index' => Pages\ListEventContents::route('/'),
            'create' => Pages\CreateEventContent::route('/create'),
            'edit' => Pages\EditEventContent::route('/{record}/edit'),
        ];
    }
}
