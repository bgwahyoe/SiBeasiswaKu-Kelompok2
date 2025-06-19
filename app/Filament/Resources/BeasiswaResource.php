<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaResource\Pages;
use App\Models\Beasiswa;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Beasiswa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->label('Nama Beasiswa')
                ->required()
                ->maxLength(255),

            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->required()
                ->columnSpanFull(),

            DatePicker::make('batas_akhir')
                ->label('Batas Akhir')
                ->required(),

            Select::make('created_by')
                ->label('Dibuat Oleh')
                ->relationship('creator', 'name') // pastikan di model Beasiswa ada relasi creator()
                ->searchable()
                ->preload()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
            TextColumn::make('creator.name')->label('Admin'),
            TextColumn::make('batas_akhir')->label('Batas Akhir')->date(),
            TextColumn::make('created_at')->label('Tanggal Dibuat')->since(),
        ])
        ->filters([
            // Bisa ditambahkan filter tanggal atau creator nanti
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
            // Bisa ditambahkan RelationManager jika Beasiswa memiliki pendaftaran misalnya
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
