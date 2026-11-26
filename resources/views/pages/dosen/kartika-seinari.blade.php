@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'kartika-seinari')->orWhere('profile_route', 'dosen.kartika-seinari')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.kartika-seinari')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $namaDosen = $dosen?->nama ?? 'Kartika Seinari Manggala, S.T., M.T.';
    $kbkLabel = $dosen?->kbk_label ?? 'Rekayasa Transportasi dan Jalan Raya';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/kartika-seinari.jpg');

    $publikasiBase = [
        [
            'jenis' => 'Prosiding Internasional',
            'authors' => 'Wanto, S., Manggala, K.S., Arviananda, R.R.D., Virawan, Z.F., Jatnika, G.R., Aziz, I., Ramadhan, M.A., & Sulong, A.B.',
            'year' => '2026',
            'title' => 'Seismic Retrofit of Existing Steel Buildings for Resilient and Sustainable Infrastructure: A Comparative Study of X and V-Bracing',
            'venue' => 'E3S Web of Conferences (EDP Sciences)',
            'vol' => 'Vol. 736, p. 05001',
            'doi' => null,
            'doi_label' => null,
        ],
        [
            'jenis' => 'Jurnal Nasional',
            'authors' => 'Wanto, S., Arviananda, R. R. D., Jatnika, G. R., Aziz, I., Ramadhan, M. A., & Seinari, K.',
            'year' => '2026',
            'title' => 'Edukasi Desain Rumah Sederhana Tahan Gempa Berbasis Simulasi SeismoBuild: Bukti Kuantitatif Pengaruh Regularitas Denah dan Distribusi Infill di Mugarsari, Tasikmalaya',
            'venue' => 'Jurnal SOLMA',
            'vol' => '15(1), 21–32',
            'doi' => 'https://doi.org/10.22236/solma.v15i1.21213',
            'doi_label' => '10.22236/solma.v15i1.21213',
        ],
        [
            'jenis' => 'Penelitian',
            'authors' => 'Manggala, K.S., & Sudiatmono, D.P.',
            'year' => '2016',
            'title' => 'Probabilitas Pengguna Kereta Api Cepat Jakarta Bandung Menggunakan Model Logit Biner',
            'venue' => 'Karya Ilmiah Rekayasa Transportasi',
            'vol' => null,
            'doi' => null,
            'doi_label' => null,
        ],
    ];

    $existingTitles = collect($publikasiBase)->pluck('title')->map(fn (string $t): string => mb_strtolower(trim($t)));
    $adminPenelitians = \App\Models\Penelitian::published()
        ->where(function ($q) {
            $q->where('penulis', 'like', '%Kartika Seinari%')
                ->orWhere('penulis', 'like', '%Manggala, K%')
                ->orWhere('penulis', 'like', '%Seinari, K%');
        })
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get()
        ->reject(fn ($item): bool => $existingTitles->contains(mb_strtolower(trim($item->judul))))
        ->map(fn ($item): array => [
            'jenis' => $item->index_detail ?: $item->index_type,
            'authors' => $item->penulis,
            'year' => (string) ($item->tahun ?? ''),
            'title' => $item->judul,
            'venue' => $item->nama_jurnal,
            'vol' => collect([$item->volume, $item->terbitan])->filter()->implode(', '),
            'doi' => $item->doi_url,
            'doi_label' => $item->doi_label,
        ]);

    $publikasiList = collect($adminPenelitians)->concat($publikasiBase)->values();
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Dosen Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian ' . $kbkLabel . ', alumni Magister Rekayasa Transportasi ITB.')

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium flex-wrap">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('tentang-kami') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Tentang Kami</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">{{ $namaDosen }}</span>
            </nav>

            <div class="flex items-center gap-2 flex-wrap">
                <span class="bg-[#0070BA]/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full border border-blue-400/30 uppercase tracking-wider">
                    Dosen Tetap
                </span>
                <span class="bg-emerald-500/20 text-emerald-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-emerald-400/25">
                    KBK {{ $kbkLabel }}
                </span>
            </div>

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading tracking-tight text-white mt-2 leading-tight">
                {{ $namaDosen }}
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                {{-- Sidebar Kiri: Kartu Identitas --}}
                <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-24 lg:max-h-[calc(100vh-7.5rem)] lg:overflow-y-auto lg:overscroll-contain lg:pt-0.5 lg:pb-2 lg:pl-0.5 lg:pr-2 profile-sidebar-scroll">

                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 text-center">
                        <div class="relative w-48 sm:w-56 mx-auto aspect-square rounded-2xl overflow-hidden shadow-md border-2 border-slate-100 bg-[#CDCFDA] mb-5">
                            <img src="{{ $fotoUrl }}"
                                 alt="{{ $namaDosen }}"
                                 class="w-full h-full object-cover object-top">
                        </div>

                        <h2 class="text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            {{ $namaDosen }}
                        </h2>
                        <p class="text-xs font-semibold text-[#0070BA] mt-1">
                            Dosen Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
                                <i class="fa-solid fa-road text-emerald-600"></i> {{ $kbkLabel }}
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chart-simple text-[#0070BA]"></i> Ringkasan Rekam Jejak
                        </h3>
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">{{ $publikasiList->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Pengalaman Penelitian</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">{{ $books->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku</span>
                            </div>
                            <div class="col-span-2 p-2.5 sm:p-3 rounded-xl bg-emerald-50/70 border border-emerald-200/70 flex items-center justify-between">
                                <span class="text-xs font-semibold text-emerald-900 flex items-center gap-2">
                                    <i class="fa-solid fa-graduation-cap text-emerald-600"></i> Pendidikan Terakhir
                                </span>
                                <span class="text-xs font-extrabold text-[#0B2A4A]">S-2 Teknik Sipil ITB</span>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100">
                            <a href="{{ route('dosen') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-[#0B2A4A] hover:text-white text-slate-700 text-xs font-semibold transition duration-200">
                                <i class="fa-solid fa-arrow-left text-[11px]"></i> Kembali ke Semua Dosen
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Konten Utama Kanan --}}
                <div class="lg:col-span-8 space-y-8">

                    {{-- 1. Biografi & Profil Akademik --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-5 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070BA] border border-blue-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Biografi &amp; Profil Akademik
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Ringkasan fokus keahlian dan aktivitas riset di Program Studi Teknik Sipil</p>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-sm text-slate-600 leading-relaxed">
                            <p>
                                {{ $namaDosen }} adalah dosen dan peneliti di Program Studi Teknik Sipil, Universitas Siliwangi, dengan fokus keahlian pada bidang Rekayasa Transportasi. Ia menyelesaikan pendidikan Magister di Institut Teknologi Bandung (ITB).
                            </p>
                            <p>
                                Selain berdedikasi dalam pengajaran dan pembimbingan mahasiswa, ia aktif mempublikasikan karya ilmiah pada jurnal nasional maupun internasional bereputasi serta terlibat dalam berbagai program pengabdian kepada masyarakat. Minat penelitiannya saat ini berfokus pada Teknologi Rekayasa Transportasi dan terbuka untuk kolaborasi riset lintas disiplin.
                            </p>
                        </div>

                        <div class="mt-5 pt-5 border-t border-slate-100 flex flex-wrap gap-2">
                            @foreach(['Rekayasa Transportasi', 'Teknologi Rekayasa Transportasi', 'Pemodelan Logit & Perilaku Pengguna'] as $focus)
                                <span class="text-xs font-semibold text-emerald-900 bg-emerald-50 px-3 py-1 rounded-lg border border-emerald-200/70">
                                    {{ $focus }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- 2. Pendidikan --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Riwayat Pendidikan
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Jenjang pendidikan tinggi bidang Teknik Sipil &amp; Rekayasa Transportasi</p>
                            </div>
                        </div>

                        <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-2">
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100">
                                        Magister (S2)
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400 font-mono">2016 &ndash; 2019</span>
                                </div>
                                <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Institut Teknologi Bandung</h4>
                                <p class="text-xs text-slate-600 mt-0.5">Teknik Sipil &ndash; Rekayasa Transportasi</p>
                            </div>

                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                        Sarjana (S1)
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400 font-mono">2012 &ndash; 2016</span>
                                </div>
                                <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Institut Teknologi Nasional Bandung</h4>
                                <p class="text-xs text-slate-600 mt-0.5">Teknik Sipil</p>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Pengalaman Penelitian --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Pengalaman Penelitian &amp; Publikasi
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Karya ilmiah yang terbit dan tersinkron dengan menu Penelitian Admin</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-sm">
                                {{ $publikasiList->count() }} Karya
                            </span>
                        </div>

                        <div class="space-y-3.5">
                            @foreach($publikasiList as $index => $pub)
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white hover:shadow-sm transition-all duration-200">
                                    <div class="flex items-center justify-between gap-3 mb-1.5 flex-wrap">
                                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-indigo-50 text-indigo-700 border border-indigo-200/60">
                                            #{{ $index + 1 }} &bull; {{ $pub['jenis'] }}
                                        </span>
                                        @if(!empty($pub['year']))
                                            <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                                {{ $pub['year'] }}
                                            </span>
                                        @endif
                                    </div>
                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                                        {{ $pub['title'] }}
                                    </h4>
                                    <p class="text-xs text-indigo-950/80 font-medium italic mt-1.5 flex items-center gap-1.5 flex-wrap">
                                        <i class="fa-solid fa-book-open text-indigo-500 text-[11px]"></i>
                                        <span>{{ $pub['venue'] }}</span>
                                        @if(!empty($pub['vol']))
                                            <span class="text-slate-400 not-italic">&bull;</span>
                                            <span class="text-slate-600 not-italic">{{ $pub['vol'] }}</span>
                                        @endif
                                    </p>
                                    <p class="text-[11px] text-slate-500 mt-1">
                                        <strong class="text-slate-700">Penulis:</strong> {{ $pub['authors'] }}
                                    </p>
                                    @if(!empty($pub['doi']))
                                        <div class="mt-2.5 pt-2 border-t border-slate-100">
                                            <a href="{{ $pub['doi'] }}" target="_blank" rel="noopener noreferrer"
                                               class="text-[11px] text-[#0070BA] hover:text-[#0B2A4A] font-mono inline-flex items-center gap-1.5 bg-white px-2.5 py-0.5 rounded border border-slate-200/80 hover:border-[#0070BA]/40 transition shadow-sm">
                                                <i class="fa-solid fa-link text-[10px] text-slate-400"></i> DOI: {{ $pub['doi_label'] }}
                                                <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-0.5"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 4. Karya Buku (Terhubung Admin Buku) --}}
                    <div id="karya-buku" class="scroll-mt-24 bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 border border-cyan-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Karya Buku
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Buku ber-ISBN yang terhubung langsung ke katalog &amp; menu Buku Admin</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs font-bold px-3.5 py-1 bg-cyan-50 text-cyan-800 rounded-full border border-cyan-200 shadow-sm">
                                    {{ $books->count() }} Buku
                                </span>
                                <a href="{{ route('buku') }}" class="text-xs font-semibold text-[#0070BA] hover:text-[#0B2A4A] hover:underline px-2 py-1">
                                    Lihat Katalog
                                </a>
                            </div>
                        </div>

                        <div class="space-y-3.5">
                            @forelse($books as $index => $book)
                                @php
                                    $coverUrl = $book->cover_url;
                                    $badgeLabel = $book->label ?: ($book->kategori === 'fiksi' ? 'Novel Fiksi' : 'Non-Fiksi');
                                @endphp
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-cyan-400 hover:bg-white hover:shadow-sm transition-all duration-200 flex items-start gap-4 group">
                                    @if($coverUrl)
                                        <div class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-slate-200 bg-slate-100 shadow-xs">
                                            <img src="{{ $coverUrl }}" alt="Sampul {{ $book->judul }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                        </div>
                                    @else
                                        <div class="shrink-0 w-16 sm:w-20 aspect-[3/4] rounded-lg overflow-hidden border border-blue-950/20 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white p-2 flex flex-col justify-between shadow-xs">
                                            <span class="text-[8px] font-bold uppercase tracking-wider text-amber-400">{{ $badgeLabel }}</span>
                                            <i class="fa-solid fa-book text-base text-white/30 self-center"></i>
                                            <span class="text-[8px] font-semibold leading-tight text-slate-200 line-clamp-2">{{ $book->judul }}</span>
                                        </div>
                                    @endif

                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                                            <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-cyan-50 text-cyan-800 border border-cyan-200/70">
                                                #{{ $index + 1 }} &bull; {{ $badgeLabel }}
                                            </span>
                                            @if($book->tahun)
                                                <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                                    {{ $book->tahun }}
                                                </span>
                                            @endif
                                        </div>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug group-hover:text-[#0B2A4A] transition-colors">
                                            {{ $book->judul }}
                                        </h4>
                                        <p class="text-xs text-slate-600 mt-1">
                                            <strong class="text-slate-700">Penulis:</strong> {{ $book->penulis }}
                                        </p>
                                        @if(!empty($book->isbn))
                                            <div class="mt-2.5 pt-2 border-t border-slate-100">
                                                <span class="inline-block font-mono text-[11px] bg-white px-2.5 py-0.5 rounded-md border border-slate-200/80 text-slate-600">
                                                    ISBN: {{ $book->isbn }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="p-6 rounded-xl bg-slate-50 border border-slate-200/80 text-center text-xs text-slate-500">
                                    Belum ada karya buku yang ditautkan ke profil ini.
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @push('styles')
    <style>
        @media (min-width: 1024px) {
            .profile-sidebar-scroll::-webkit-scrollbar { width: 5px; }
            .profile-sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb { background-color: rgba(148, 163, 184, 0.55); border-radius: 9999px; }
            .profile-sidebar-scroll::-webkit-scrollbar-thumb:hover { background-color: rgba(100, 116, 139, 0.8); }
            .profile-sidebar-scroll { scrollbar-width: thin; scrollbar-color: rgba(148, 163, 184, 0.55) transparent; }
        }
    </style>
    @endpush

@endsection
