<?php

namespace App\Filament\Resources\QuizSessions\RelationManagers;

use App\Exports\QuizAnswersExport;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;

class AnswersRelationManager extends RelationManager
{
    protected static string $relationship = 'answers';

    protected static ?string $title = 'Jawaban';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama')
            ->columns([
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
                SelectFilter::make('sheets_status')
                    ->label('Status Sheets')
                    ->options([
                        'pending' => 'Antre',
                        'synced' => 'Terkirim',
                        'failed' => 'Gagal',
                    ]),
            ])
            ->headerActions([
                \Filament\Actions\Action::make('send_all_to_sheets')
                    ->label('Kirim ke Sheets')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->modalHeading('Kirim semua jawaban yang belum terkirim?')
                    ->action(function () {
                        $belum = $this->getOwnerRecord()->answers()->where('sheets_status', '!=', 'synced')->count();
                        $sent = 0;
                        $failed = 0;
                        foreach ($this->getOwnerRecord()->answers()->where('sheets_status', '!=', 'synced')->cursor() as $answer) {
                            $answer->sendToSheets() ? $sent++ : $failed++;
                        }
                        Notification::make()
                            ->title($belum === 0
                                ? 'Semua jawaban sudah terkirim ke Google Sheets.'
                                : $sent.' terkirim, '.$failed.' gagal.')
                            ->success($failed === 0)
                            ->danger($failed > 0)
                            ->send();
                    }),
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
                    BulkAction::make('export')
                        ->label('Export Excel')
                        ->icon('heroicon-o-arrow-down-tray')
                        ->action(fn ($records) => Excel::download(
                            new QuizAnswersExport(
                                $records,
                                $this->getOwnerRecord()->questions ?? []
                            ),
                            'quiz-'.$this->getOwnerRecord()->slug.'.xlsx'
                        )),

                    BulkAction::make('send_to_sheets')
                        ->label('Kirim ke Sheets')
                        ->icon('heroicon-o-arrow-path')
                        ->color('warning')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $belum = $records->where('sheets_status', '!=', 'synced')->count();
                            $sent = 0;
                            $failed = 0;
                            foreach ($records as $record) {
                                if ($record->sheets_status === 'synced') {
                                    continue;
                                }
                                $record->sendToSheets() ? $sent++ : $failed++;
                            }
                            Notification::make()
                                ->title($belum === 0
                                    ? 'Semua jawaban yang dipilih sudah terkirim ke Google Sheets.'
                                    : $sent.' terkirim, '.$failed.' gagal.')
                                ->success($failed === 0)
                                ->danger($failed > 0)
                                ->send();
                        }),

                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
