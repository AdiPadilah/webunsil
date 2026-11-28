@php
    use App\Filament\Resources\SiteSettings\SiteSettingResource;
    use Filament\Support\Icons\Heroicon;

    $shortcuts = [
        [
            'label' => 'Tambah Penelitian',
            'sub' => 'Jurnal & Prosiding',
            'href' => route('filament.admin.resources.penelitians.create'),
            'icon' => Heroicon::OutlinedBeaker,
            'bg' => 'linear-gradient(145deg, #e0f2fe 0%, #bae6fd 100%)',
            'color' => '#0284c7',
            'newTab' => false,
        ],
        [
            'label' => 'Tambah Pengabdian',
            'sub' => 'Program PkM Dosen',
            'href' => route('filament.admin.resources.pengabdians.create'),
            'icon' => Heroicon::OutlinedHandRaised,
            'bg' => 'linear-gradient(145deg, #dcfce7 0%, #bbf7d0 100%)',
            'color' => '#059669',
            'newTab' => false,
        ],
        [
            'label' => 'Tulis Berita',
            'sub' => 'Artikel & Pengumuman',
            'href' => route('filament.admin.resources.articles.create'),
            'icon' => Heroicon::OutlinedNewspaper,
            'bg' => 'linear-gradient(145deg, #dbeafe 0%, #bfdbfe 100%)',
            'color' => '#0070ba',
            'newTab' => false,
        ],
        [
            'label' => 'Tambah Jadwal Sidang',
            'sub' => 'Sempro, Semhas & Akhir',
            'href' => route('filament.admin.resources.defense-schedules.create'),
            'icon' => Heroicon::OutlinedCalendarDays,
            'bg' => 'linear-gradient(145deg, #ede9fe 0%, #ddd6fe 100%)',
            'color' => '#6d28d9',
            'newTab' => false,
        ],
        [
            'label' => 'Tambah Buku',
            'sub' => 'Buku Ajar & ISBN',
            'href' => route('filament.admin.resources.bukus.create'),
            'icon' => Heroicon::OutlinedBookOpen,
            'bg' => 'linear-gradient(145deg, #fef3c7 0%, #fde68a 100%)',
            'color' => '#b45309',
            'newTab' => false,
        ],
        [
            'label' => 'Statistik & Info Prodi',
            'sub' => 'Akreditasi & Kaprodi',
            'href' => SiteSettingResource::getUrl(),
            'icon' => Heroicon::OutlinedAdjustmentsHorizontal,
            'bg' => 'linear-gradient(145deg, #f1f5f9 0%, #e2e8f0 100%)',
            'color' => '#334155',
            'newTab' => false,
        ],
        [
            'label' => 'Lihat Website Publik',
            'sub' => 'Pratinjau Halaman Utama',
            'href' => route('home'),
            'icon' => Heroicon::OutlinedGlobeAlt,
            'bg' => 'linear-gradient(145deg, #f0f9ff 0%, #e0f2fe 100%)',
            'color' => '#0369a1',
            'newTab' => true,
        ],
    ];
@endphp

<x-filament-widgets::widget>
    <x-filament::section
        heading="Pintasan & Panduan Singkat"
        description="Perubahan yang disimpan di panel ini langsung tampil di website prodi tanpa mengubah kode."
        :icon="Heroicon::OutlinedSparkles"
        icon-color="info"
    >
        <div style="display: grid; gap: 1rem;">
            <div class="adm-quick-grid">
                @foreach ($shortcuts as $item)
                    <a
                        href="{{ $item['href'] }}"
                        @if ($item['newTab']) target="_blank" rel="noopener noreferrer" @endif
                        class="adm-quick-tile"
                    >
                        <span class="adm-quick-icon" style="background: {{ $item['bg'] }}; color: {{ $item['color'] }};">
                            {{ \Filament\Support\generate_icon_html($item['icon']) }}
                        </span>
                        <span style="min-width: 0; line-height: 1.25;">
                            <span style="display: block; font-size: 0.8125rem; font-weight: 700; color: #0b172a;">
                                {{ $item['label'] }}
                            </span>
                            <span style="display: block; font-size: 0.7rem; font-weight: 500; color: #64748b;">
                                {{ $item['sub'] }}
                            </span>
                        </span>
                    </a>
                @endforeach
            </div>

            <div style="font-size: 0.8125rem; color: #475569; line-height: 1.6; padding: 0.65rem 0.9rem; border-radius: 0.75rem; background: rgba(241, 245, 249, 0.75); border: 1px solid rgba(203, 213, 225, 0.55);">
                <strong style="color: #0b172a;">Cara pakai:</strong>
                1) Pilih menu di sebelah kiri sesuai halaman website &rarr;
                2) Klik <strong>Buat baru</strong> untuk menambah data atau ikon <strong>Ubah</strong> untuk memperbarui &rarr;
                3) Klik <strong>Simpan</strong>, lalu refresh website publik.
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
