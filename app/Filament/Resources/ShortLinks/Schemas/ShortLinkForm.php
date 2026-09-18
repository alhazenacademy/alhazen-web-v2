<?php

namespace App\Filament\Resources\ShortLinks\Schemas;

use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

class ShortLinkForm
{

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Short Link Details')
                    ->description('Buat dan kelola short link.')
                    ->columns(2)
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->helperText('Contoh: ebook, webinar, kelas-ai')
                            ->unique(ignoreRecord: true),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->inline(false),

                        TextInput::make('destination_url')
                            ->label('Destination URL')
                            ->url()
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Information')
                    ->description('Informasi short link.')
                    ->columns(1)
                    ->schema([

                        Placeholder::make('short_url')
                            ->label('Short URL')
                            ->content(function ($record, callable $get) {

                                $slug = $record?->slug ?? $get('slug');

                                return blank($slug)
                                    ? '-'
                                    : url('/go/' . $slug);
                            }),

                        Placeholder::make('qr_status')
                            ->label('QR Code')
                            ->content(function ($record) {

                                if (! $record?->qr_code) {
                                    return new HtmlString('<div class="text-center text-4xl">❌</div>');
                                }

                                return new HtmlString(
                                    '<div class="flex justify-center">
                                        <img
                                            src="' . asset('storage/' . $record->qr_code) . '"
                                            class="w-32 h-32 rounded-lg border"
                                            alt="QR Code">
                                    </div>'
                                );
                            }),
                    ]),
            ]);
    }
}
