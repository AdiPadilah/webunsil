<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Dokumen')
                    ->required()
                    ->placeholder('Contoh: Panduan Penulisan Skripsi 2026'),

                Select::make('category')
                    ->label('Kategori Dokumen')
                    ->options([
                        'Panduan Akademik' => 'Panduan Akademik',
                        'Kerja Praktik (KP)' => 'Kerja Praktik (KP)',
                        'Tugas Akhir / Skripsi' => 'Tugas Akhir / Skripsi',
                        'Laboratorium' => 'Laboratorium',
                        'Formulir & Template' => 'Formulir & Template',
                        'Layanan Kemahasiswaan' => 'Layanan Kemahasiswaan',
                    ])
                    ->default('Panduan Akademik')
                    ->required(),

                FileUpload::make('file_path')
                    ->label('Upload File Dokumen (PDF, Word, Excel)')
                    ->directory('documents')
                    ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
                    ->preserveFilenames()
                    ->required(),

                Textarea::make('description')
                    ->label('Keterangan Dokumen')
                    ->rows(2)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Tampilkan di Halaman Unduhan')
                    ->default(true),
            ]);
    }
}
