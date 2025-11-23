<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Database\Eloquent\Builder;






class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Author')
                    ->relationship(
                        name: 'author',
                        titleAttribute: 'name',
                        modifyQueryUsing: function (Builder $query) {
                            $user = auth()->user();
                            if ($user->hasAnyRole(['super_admin', 'admin'])) {
                                return $query;
                            }
                            return $query->where('id', $user->id);
                        },
                    )
                    ->searchable()
                    ->preload()
                    ->default(fn () => auth()->id())
                    ->required(),
                TextInput::make('author_info')
                    ->label('Author Information')
                    ->default('Penulis di Alhazen Academy'),
                DateTimePicker::make('published_at'),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'scheduled' => 'Scheduled',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Toggle::make('is_featured')
                    ->label('Article Featured')
                    ->helperText('Artikel unggulan yang akan muncul di Home Page')
                    ->default(false),
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('cover_image')
                    ->disk('public')
                    ->columnSpanFull()
                    ->image(),
                TinyEditor::make('content')
                    ->label('Content')
                    ->profile('default')
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('articles/body')
                    ->resize('both')
                    ->required(),
                Textarea::make('meta_title'),
                Textarea::make('meta_description'),
            ]);
    }
}
