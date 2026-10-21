<?php

namespace App\Filament\Resources\QuizSessions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class QuizSessionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Quiz')
                    ->description('Judul, petunjuk, dan masa berlaku link ujian. Slug dan soal dikunci agar link yang sudah disebar tetap stabil.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(150)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Petunjuk')
                            ->rows(2)
                            ->maxLength(2000)
                            ->columnSpanFull(),

                        TextInput::make('sheets_webhook_url')
                            ->label('URL Web App Google Sheets')
                            ->helperText('Opsional. Boleh dikosongkan — hasil tetap bisa di-Export Excel.')
                            ->url()
                            ->maxLength(500)
                            ->columnSpanFull(),

                        DateTimePicker::make('expires_at')
                            ->label('Berlaku Sampai')
                            ->required()
                            ->seconds(false),

                        Placeholder::make('total_soal')
                            ->label('Jumlah Soal')
                            ->content(fn ($record) => $record?->total_soal ?? '-'),
                    ]),

                Section::make('Pengaturan Acak')
                    ->columns(2)
                    ->schema([
                        Toggle::make('shuffle_questions')
                            ->label('Acak urutan soal')
                            ->inline(false),

                        Toggle::make('shuffle_options')
                            ->label('Acak urutan opsi')
                            ->inline(false),
                    ]),
            ]);
    }
}
