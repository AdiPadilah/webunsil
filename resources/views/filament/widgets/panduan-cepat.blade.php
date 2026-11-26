@php
    use Filament\Support\Icons\Heroicon;
@endphp

<x-filament-widgets::widget>
    <x-filament::section
        heading="Pintasan & Panduan Singkat"
        description="Perubahan yang disimpan di panel ini langsung tampil di website prodi tanpa mengubah kode."
        :icon="Heroicon::OutlinedSparkles"
        icon-color="info"
    >
        <div style="display: grid; gap: 1rem;">
            <div style="display: flex; flex-wrap: wrap; gap: 0.625rem;">
                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.penelitians.create') }}"
                    :icon="Heroicon::OutlinedPlusCircle"
                    color="primary"
                >
                    Tambah Penelitian
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.pengabdians.create') }}"
                    :icon="Heroicon::OutlinedPlusCircle"
                    color="success"
                >
                    Tambah Pengabdian
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.articles.create') }}"
                    :icon="Heroicon::OutlinedNewspaper"
                    color="info"
                >
                    Tulis Berita
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.defense-schedules.create') }}"
                    :icon="Heroicon::OutlinedCalendarDays"
                    color="primary"
                >
                    Tambah Jadwal Sidang
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.bukus.create') }}"
                    :icon="Heroicon::OutlinedBookOpen"
                    color="warning"
                >
                    Tambah Buku
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ \App\Filament\Resources\SiteSettings\SiteSettingResource::getUrl() }}"
                    :icon="Heroicon::OutlinedAdjustmentsHorizontal"
                    color="gray"
                >
                    Statistik &amp; Info Prodi
                </x-filament::button>

                <x-filament::button
                    tag="a"
                    href="{{ route('home') }}"
                    target="_blank"
                    :icon="Heroicon::OutlinedGlobeAlt"
                    color="gray"
                >
                    Lihat Website Publik
                </x-filament::button>
            </div>

            <div style="font-size: 0.8125rem; opacity: 0.85; line-height: 1.6;">
                <strong>Cara pakai:</strong>
                1) Pilih menu di sebelah kiri sesuai halaman website &rarr;
                2) Klik <strong>Buat baru</strong> untuk menambah data atau ikon <strong>Edit</strong> untuk mengubah &rarr;
                3) Klik <strong>Simpan</strong>, lalu refresh website publik.
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
