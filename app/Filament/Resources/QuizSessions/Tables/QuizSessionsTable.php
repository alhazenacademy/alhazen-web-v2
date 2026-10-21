<?php

namespace App\Filament\Resources\QuizSessions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class QuizSessionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('quiz_url')
                    ->label('Link Ujian')
                    ->state(fn ($record) => url('/tools/quiz/'.$record->slug))
                    ->copyable()
                    ->copyMessage('Link ujian berhasil disalin!')
                    ->copyMessageDuration(1500),

                TextColumn::make('total_soal')
                    ->label('Soal')
                    ->sortable(),

                TextColumn::make('answers_count')
                    ->label('Pengumpul')
                    ->counts('answers')
                    ->sortable(),

                TextColumn::make('expires_at')
                    ->label('Berlaku Sampai')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
