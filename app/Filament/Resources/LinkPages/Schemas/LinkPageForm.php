<?php

namespace App\Filament\Resources\LinkPages\Schemas;

use App\Models\LinkPage;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LinkPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->lazy()
                    ->description('Data highlight dan event yang akan ditampilkan di halaman publik.')
                    ->columns(1)
                    ->columnSpan('full')
                    ->schema([
                        Select::make('type')
                            ->label('Tipe')
                            ->options([
                                'highlight' => 'Highlight',
                                'event' => 'Event',
                            ])
                            ->required()
                            ->native(false),

                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(120)
                            ->placeholder('Contoh: AI & Python Quickstart'),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->maxLength(500)
                            ->placeholder('Masukkan deskripsi konten.'),

                        TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->maxLength(2048)
                            ->placeholder('https://example.com/...'),
                    ]),

                Section::make('Icon')
                    ->lazy()
                    ->description('Pengaturan icon yang ditampilkan pada highlight atau event.')
                    ->columns(1)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('icon')
                            ->label('Icon URL')
                            ->url()
                            ->maxLength(2048)
                            ->placeholder('https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/python/default.svg')
                            ->helperText('Cari icon di https://thesvg.org/, lalu salin URL SVG/CDN-nya dan tempel di sini.'),

                        ColorPicker::make('icon_background')
                            ->label('Background Icon')
                            ->helperText('Kosongkan jika icon tidak membutuhkan background.')
                            ->default('#03AE91'),
                    ]),

                Section::make('Display')
                    ->lazy()
                    ->description('Atur status dan urutan konten pada halaman publik.')
                    ->columns(1)
                    ->columnSpan('full')
                    ->schema([
                        Toggle::make('active')
                            ->label('Aktif')
                            ->helperText('Jika nonaktif, konten tidak akan tampil di website.')
                            ->default(true)
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->required()
                            ->default(
                                fn () => (LinkPage::max('sort_order') ?? 0) + 1
                            ),
                    ]),
            ]);
    }
}
