<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Fieldset;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Settings')
                    ->description('Konfigurasi pengaturan situs, termasuk field JSON dan social media.')
                    ->columns(1)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('key')
                            ->label('Key')
                            ->required()
                            ->maxLength(150)
                            ->helperText('Contoh: company_profile, homepage_hero, contact_info')
                            // di edit tidak boleh diubah
                            ->disabled(fn($record) => $record !== null),

                        // 🧩 SETTINGS DALAM BENTUK KEY VALUE
                        KeyValue::make('settings')
                            ->label('Settings')
                            ->keyLabel('Field')
                            ->valueLabel('Value')
                            ->reorderable()
                            ->addButtonLabel('Tambah field')
                            ->helperText('Nilai disimpan sebagai JSON di kolom "settings".')
                            ->columnSpanFull(),

                        // ⭐ SOCIALS DI DALAM SECTION YANG SAMA
                        Repeater::make('socials')
                            ->label('Social Media')
                            ->schema([
                                TextInput::make('platform')
                                    ->label('Platform')
                                    ->placeholder('facebook, instagram, tiktok')
                                    ->required(),

                                TextInput::make('label')
                                    ->label('Label')
                                    ->placeholder('Facebook, Instagram')
                                    ->required(),

                                TextInput::make('handle')
                                    ->label('Handle')
                                    ->placeholder('@alhazenacademy'),

                                TextInput::make('href')
                                    ->label('URL')
                                    ->placeholder('https://instagram.com/alhazenacademy')
                                    ->required(),

                                FileUpload::make('icon_path')
                                    ->label('Icon')
                                    ->disk('public_assets')
                                    ->directory('assets/kids/index-footer')
                                    ->image()
                                    ->imageEditor()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->downloadable()
                                    ->helperText('Icon untuk footer. Disimpan di /assets/kids/index-footer dan path-nya disimpan di JSON.'),

                                Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->default(true),

                                TextInput::make('sort_order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(1),
                            ])
                            ->addActionLabel('Tambah Social Media')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
