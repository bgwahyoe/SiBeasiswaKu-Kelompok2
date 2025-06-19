<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Pendaftaran';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('user_id')
                ->label('Mahasiswa')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

            Select::make('beasiswa_id')
                ->label('Beasiswa')
                ->relationship('beasiswa', 'nama')
                ->searchable()
                ->required(),

            Select::make('status')
                ->label('Status')
                ->options([
                    'diajukan' => 'Diajukan',
                    'diproses' => 'Diproses',
                    'diterima' => 'Diterima',
                    'ditolak' => 'Ditolak',
                ])
                ->default('diajukan')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('user.name')
                ->label('Mahasiswa'),

            TextColumn::make('beasiswa.nama')
                ->label('Beasiswa'),

            BadgeColumn::make('status')
                ->colors([
                    'primary' => 'diajukan',
                    'warning' => 'diproses',
                    'success' => 'diterima',
                    'danger' => 'ditolak',
                ])
                ->label('Status'),

            TextColumn::make('created_at')
                ->label('Tanggal Daftar')
                ->since(),
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
            // Kamu bisa tambahkan RelationManager Dokumen di sini jika mau menampilkan daftar dokumen dalam pendaftaran
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
