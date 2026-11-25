<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Berita / Informasi')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Berita' => 'Berita',
                        'Pengumuman' => 'Pengumuman',
                        'Agenda' => 'Agenda',
                        'Prestasi' => 'Prestasi',
                    ])
                    ->default('Berita')
                    ->required(),

                FileUpload::make('thumbnail')
                    ->label('Foto Utama / Thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('articles')
                    ->imageEditor(),

                Textarea::make('excerpt')
                    ->label('Ringkasan Singkat')
                    ->rows(3)
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Isi Konten Lengkap')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('published_at')
                    ->label('Waktu Publikasi')
                    ->default(now()),

                Toggle::make('is_published')
                    ->label('Publikasikan Langsung?')
                    ->default(true),
            ]);
    }
}
