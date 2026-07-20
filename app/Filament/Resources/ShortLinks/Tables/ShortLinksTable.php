<?php

namespace App\Filament\Resources\ShortLinks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class ShortLinksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('short_url')
                    ->label('Short URL')
                    ->state(fn($record) => url('/go/' . $record->slug))
                    ->copyable()
                    ->copyMessage('Short link berhasil disalin!')
                    ->copyMessageDuration(1500),

                TextColumn::make('destination_url')
                    ->label('Destination URL')
                    ->limit(40)
                    ->tooltip(fn($record) => $record->destination_url)
                    ->copyable(),

                IconColumn::make('qr_code')
                    ->label('QR')
                    ->state(fn($record) => filled($record->qr_code))
                    ->boolean(),

                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),

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

                \Filament\Actions\Action::make('generateQr')
                    ->label('Generate QR')
                    ->icon('heroicon-o-qr-code')
                    ->color('success')
                    ->visible(fn($record) => blank($record->qr_code))
                    ->requiresConfirmation()
                    ->action(fn($record) => $record->generateQr()),

                \Filament\Actions\Action::make('previewQr')
                    ->label('Lihat QR')
                    ->icon('heroicon-o-qr-code')
                    ->color('info')
                    ->visible(fn($record) => filled($record->qr_code))
                    ->modalHeading('QR Code')
                    ->modalSubmitAction(false)
                    ->modalCancelActionLabel('Tutup')
                    ->modalWidth('md')
                    ->modalContent(fn($record) => new HtmlString(
                        '<div class="flex items-center justify-center w-full py-6">
                            <img src="' . asset('storage/' . $record->qr_code) . '" class="w-64 h-64 rounded-lg" alt="QR Code">
                        </div>'
                    )),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
