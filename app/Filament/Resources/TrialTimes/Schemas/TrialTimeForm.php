<?php

namespace App\Filament\Resources\TrialTimes\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TrialTimeForm
{
    public static function dayOptions(): array
    {
        return [
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
        ];
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Waktu Trial Class')
                    ->lazy()
                    ->description('Atur waktu trial class yang tersedia.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        Hidden::make('day_of_week')
                            ->required(),

                        TimePicker::make('time')
                            ->label('Waktu')
                            ->required()
                            ->seconds(false)
                            ->format('H:i')
                            ->displayFormat('H:i')
                            ->helperText(fn ($get) => 'Jam khusus untuk hari '.(self::dayOptions()[(int) $get('day_of_week')] ?? '').'. Rat-rata jam tersedia antara 09:00 – 20:00. Catatan: tulis pakai format 12 jam AM/PM, contoh 08:00 PM = 20:00.'),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->default(true)
                            ->helperText('Jika nonaktif, waktu trial class ini tidak akan ditampilkan di halaman publik.'),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->required()
                            ->numeric()
                            ->helperText('Terisi otomatis. Urutan tampilan jam di halaman publik.'),
                    ]),
            ]);
    }
}
