<?php

namespace App\Filament\Resources\TrialTimes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TrialTimeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Waktu Trial Class')
                    ->description('Atur waktu trial class yang tersedia.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        TimePicker::make('time')
                            ->label('Waktu')
                            ->required(),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }
}
