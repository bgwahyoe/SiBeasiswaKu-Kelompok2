<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenResource\Pages;
use App\Models\Dokumen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class DokumenResource extends Resource
{
    protected static ?string $model = Dokumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Dokumen';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('pendaftaran_id')
                ->label('Pendaftaran')
                ->relationship('pendaftaran', 'id')
                ->searchable()
                ->required(),

            TextInput::make('nama_file')
                ->label('Nama Dokumen')
                ->required()
                ->maxLength(255),

            FileUpload::make('path')
                ->label('Upload Dokumen')
                ->directory('dokumen')
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->required()
                ->openable()
                ->downloadable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('pendaftaran.user.name')
                ->label('Nama Mahasiswa'),

            TextColumn::make('nama_file')
                ->label('Nama Dokumen')
                ->searchable(),

            TextColumn::make('path')
                ->label('Link Dokumen')
                ->url(fn ($record) => asset('storage/' . $record->path))
                ->openUrlInNewTab(),

            TextColumn::make('created_at')
                ->label('Tanggal Upload')
                ->since(),
        ])
        ->filters([
            // Tambahkan filter di sini jika dibutuhkan
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
            // Jika ingin menampilkan relasi tambahan (contoh: komentar, histori), bisa tambahkan RelationManager
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDokumens::route('/'),
            'create' => Pages\CreateDokumen::route('/create'),
            'edit' => Pages\EditDokumen::route('/{record}/edit'),
        ];
    }
}
