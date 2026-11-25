<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

/**
 * @property-read Schema $form
 */
class PengaturanWebsite extends Page
{
    protected static ?string $navigationLabel = 'Statistik & Info Prodi';

    protected static ?string $title = 'Statistik & Informasi Program Studi';

    protected static string | UnitEnum | null $navigationGroup = 'Publikasi & Informasi';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedAdjustmentsHorizontal;

    protected static ?int $navigationSort = 4;

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $setting = SiteSetting::firstOrCreate([], SiteSetting::defaults());
        $this->form->fill($setting->attributesToArray());
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Angka Statistik Beranda')
                ->description('Angka ini tampil di pita statistik halaman Beranda dan dapat diperbarui setiap semester/tahun.')
                ->schema([
                    TextInput::make('mahasiswa_aktif')
                        ->label('Mahasiswa Aktif')
                        ->numeric()
                        ->minValue(0)
                        ->required(),
                    TextInput::make('total_lulusan')
                        ->label('Total Kelulusan')
                        ->numeric()
                        ->minValue(0)
                        ->required(),
                    TextInput::make('prestasi_mahasiswa')
                        ->label('Prestasi & Aktivitas Mahasiswa')
                        ->numeric()
                        ->minValue(0)
                        ->required(),
                    TextInput::make('aktivitas_dosen')
                        ->label('Aktivitas Riset & PkM Dosen')
                        ->numeric()
                        ->minValue(0)
                        ->required(),
                ])
                ->columns(2),

            Section::make('Ketua Program Studi & Sambutan')
                ->description('Identitas pimpinan, foto, dan teks sambutan di Beranda serta halaman Tentang Kami.')
                ->schema([
                    FileUpload::make('kaprodi_foto')
                        ->label('Foto Ketua Program Studi')
                        ->image()
                        ->disk('public')
                        ->directory('settings')
                        ->imageEditor()
                        ->columnSpanFull(),
                    TextInput::make('kaprodi_nama')
                        ->label('Nama Lengkap & Gelar')
                        ->required(),
                    TextInput::make('kaprodi_jabatan')
                        ->label('Jabatan')
                        ->required(),
                    Textarea::make('kaprodi_sambutan')
                        ->label('Isi Teks Sambutan')
                        ->rows(7)
                        ->helperText('Pisahkan antar-paragraf dengan satu baris kosong.')
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Status Akreditasi & Kontak Resmi')
                ->description('Data akreditasi pada lencana Hero, pop-up Akreditasi, dan informasi kontak di Beranda.')
                ->schema([
                    TextInput::make('akreditasi_peringkat')
                        ->label('Peringkat Akreditasi')
                        ->required(),
                    TextInput::make('akreditasi_lembaga')
                        ->label('Lembaga Akreditasi')
                        ->required(),
                    TextInput::make('akreditasi_sk')
                        ->label('Nomor Keputusan SK')
                        ->required(),
                    TextInput::make('akreditasi_berlaku')
                        ->label('Masa Berlaku Akreditasi')
                        ->required(),
                    TextInput::make('kontak_email')
                        ->label('Email Resmi Prodi')
                        ->email()
                        ->required(),
                    TextInput::make('jam_layanan')
                        ->label('Jam Layanan Akademik')
                        ->required(),
                ])
                ->columns(2),
        ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema->components([
            Form::make([EmbeddedSchema::make('form')])
                ->id('form')
                ->livewireSubmitHandler('save')
                ->footer([
                    Actions::make([
                        Action::make('save')
                            ->label('Simpan Perubahan')
                            ->submit('save')
                            ->keyBindings(['mod+s']),
                    ]),
                ]),
        ]);
    }

    public function save(): void
    {
        $state = $this->form->getState();

        $setting = SiteSetting::firstOrCreate([], SiteSetting::defaults());
        $setting->update($state);

        Notification::make()
            ->success()
            ->title('Informasi program studi berhasil disimpan')
            ->body('Perubahan langsung tampil di website publik.')
            ->send();
    }
}
