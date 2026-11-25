<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Judul & Kategori Berita')
                ->description('Berita yang diterbitkan akan langsung tampil di Beranda dan Portal Berita.')
                ->schema([
                    TextInput::make('title')
                        ->label('Judul Berita / Informasi')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (?string $state, callable $set, ?string $operation): void {
                            if ($operation === 'create' && filled($state)) {
                                $set('slug', Str::slug($state));
                            }
                        })
                        ->columnSpanFull(),
                    TextInput::make('slug')
                        ->label('Slug URL')
                        ->helperText('Terisi otomatis dari judul berita, tidak perlu diubah manual.')
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
                ])
                ->columns(2),

            Section::make('Isi Konten & Foto Utama')
                ->schema([
                    FileUpload::make('thumbnail')
                        ->label('Foto Utama / Thumbnail')
                        ->image()
                        ->disk('public')
                        ->directory('articles')
                        ->imageEditor(),
                    Textarea::make('excerpt')
                        ->label('Ringkasan Singkat')
                        ->rows(3)
                        ->helperText('Ringkasan 1–2 kalimat yang tampil pada pratinjau kartu berita.'),
                    RichEditor::make('content')
                        ->label('Isi Konten Lengkap')
                        ->required()
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Jadwal & Status Tayang')
                ->schema([
                    DateTimePicker::make('published_at')
                        ->label('Waktu Publikasi')
                        ->default(now()),
                    Toggle::make('is_published')
                        ->label('Tampilkan di Website?')
                        ->default(true),
                ])
                ->columns(2),
        ]);
    }
}
