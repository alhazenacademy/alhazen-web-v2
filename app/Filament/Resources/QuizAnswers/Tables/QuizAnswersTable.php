<?php

namespace App\Filament\Resources\QuizAnswers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class QuizAnswersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('session.title')
                    ->label('Quiz')
                    ->searchable()
                    ->limit(30),

                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('kelas')
                    ->label('Kelas')
                    ->searchable(),

                TextColumn::make('instansi')
                    ->label('Sekolah')
                    ->searchable(),

                TextColumn::make('submitted_at')
                    ->label('Dikumpulkan')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                TextColumn::make('sheets_status')
                    ->label('Sheets')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'synced' => 'success',
                        'failed' => 'danger',
                        default => 'warning',
                    }),
            ])
            ->defaultSort('submitted_at', 'desc')
            ->filters([
                SelectFilter::make('session_id')
                    ->label('Quiz')
                    ->relationship('session', 'title')
                    ->searchable(),

                SelectFilter::make('sheets_status')
                    ->label('Status Sheets')
                    ->options([
                        'pending' => 'Antre',
                        'synced' => 'Terkirim',
                        'failed' => 'Gagal',
                    ]),
            ])
            ->recordActions([
                \Filament\Actions\Action::make('resync')
                    ->label(fn ($record) => $record->sheets_status === 'pending' ? 'Kirim' : 'Kirim Ulang')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->visible(fn ($record) => $record->sheets_status !== 'synced')
                    ->requiresConfirmation()
                    ->action(function ($record) {
                        $ok = $record->sendToSheets();
                        Notification::make()
                            ->title($ok ? 'Jawaban terkirim ke Google Sheets.' : 'Gagal mengirim ('.$record->sheets_error.').')
                            ->success($ok)
                            ->danger(! $ok)
                            ->send();
                    }),

                DeleteAction::make()
                    ->label('Reset'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
