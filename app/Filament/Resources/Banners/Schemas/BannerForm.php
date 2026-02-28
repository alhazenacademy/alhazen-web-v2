<?php

namespace App\Filament\Resources\Banners\Schemas;

use App\Models\Banner;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Banner')
                    ->lazy()
                    ->description('Data banner untuk carousel / halaman publik.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Banner')
                            ->maxLength(120)
                            ->placeholder('Contoh: Kelas Ngabuburit IT'),

                        FileUpload::make('image')
                            ->label('Gambar Banner')
                            ->helperText('Ukuran gambar harus 1600 x 480 px')
                            ->disk('public')
                            ->directory('uploads/banners')
                            ->image()
                            ->imageEditor()
                            ->previewable()
                            ->required()
                            ->getUploadedFileNameForStorageUsing(
                                function (TemporaryUploadedFile $file, callable $get) {
                                    $title = $get('title') ?? 'banner';
                                    $slug = Str::slug($title);
                                    $extension = $file->getClientOriginalExtension();

                                    return "{$slug}-banner.{$extension}";
                                }
                            ),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->helperText('Jika nonaktif, banner tidak akan tampil di website.')
                            ->default(true)
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->required()
                            ->default(fn () => (Banner::max('sort_order') ?? 0) + 1),
                    ]),
            ]);
    }
}
