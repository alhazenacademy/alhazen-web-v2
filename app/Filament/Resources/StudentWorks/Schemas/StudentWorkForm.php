<?php

namespace App\Filament\Resources\StudentWorks\Schemas;

use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class StudentWorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hasil Karya Siswa')
                    ->description('Data hasil karya siswa yang ditampilkan pada website.')
                    ->lazy()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255),

                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Game & Animation' => 'Game & Animation',
                                'Application' => 'Application',
                                'Robotics' => 'Robotics',
                                'IoT & Robotics' => 'IoT & Robotics',
                                'Other' => 'Other',
                            ])
                            ->native(false)
                            ->required(),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->columnSpanFull()
                            ->required(),

                        TextInput::make('demo_link')
                            ->label('Link Demo')
                            ->url()
                            ->placeholder('https://...')
                            ->columnSpanFull(),

                    ]),

                Section::make('Gambar')
                    ->description(new HtmlString(
                        'Upload gambar utama dan gambar hover menggunakan template yang telah disediakan.
                        <a href="https://canva.link/vsqd497g5ms3k3j"
                            target="_blank"
                            rel="noopener noreferrer"
                            style="color:#2563eb;font-weight:600;text-decoration:underline;">
                            Buka Template Canva
                        </a>'
                    ))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Utama')
                            ->disk('public')
                            ->directory('uploads/student-works/primary')
                            ->image()
                            ->imageEditor()
                            ->previewable()
                            ->required()
                            ->maxSize(2048),

                        FileUpload::make('hover_image')
                            ->label('Gambar Hover')
                            ->disk('public')
                            ->directory('uploads/student-works/hover')
                            ->image()
                            ->imageEditor()
                            ->previewable()
                            ->maxSize(2048),
                    ]),
            ]);
    }
}
