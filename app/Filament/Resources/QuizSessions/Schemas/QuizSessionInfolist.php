<?php

namespace App\Filament\Resources\QuizSessions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class QuizSessionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label('Judul'),

                TextEntry::make('slug')
                    ->label('Link Ujian')
                    ->state(fn ($record) => url('/tools/quiz/'.$record->slug))
                    ->copyable(),

                TextEntry::make('total_soal')
                    ->label('Jumlah Soal'),

                TextEntry::make('expires_at')
                    ->label('Berlaku Sampai')
                    ->dateTime('d M Y H:i'),

                TextEntry::make('description')
                    ->label('Petunjuk')
                    ->placeholder('—')
                    ->columnSpanFull(),
            ]);
    }
}
