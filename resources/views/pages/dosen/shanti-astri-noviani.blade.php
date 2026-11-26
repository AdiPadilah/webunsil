@extends('layouts.app')

@php
    $dosen ??= \App\Models\Dosen::where('slug', 'shanti-astri-noviani')->orWhere('profile_route', 'dosen.shanti-astri-noviani')->first();
    $books ??= \App\Models\Buku::published()
        ->where('penulis_route', 'dosen.shanti-astri-noviani')
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get();
    $namaDosen = $dosen?->nama ?? 'Shanti Astri Noviani, S.Pd., M.T.';
    $kbkLabel = $dosen?->kbk_label ?? 'Manajemen Rekayasa Konstruksi';
    $fotoUrl = $dosen?->foto_url ?: asset('images/dosen/shanti-astri-noviani.jpg');

    $penelitianBase = [
        ['tahun' => '2025', 'judul' => 'Analisis Faktor Penyebab Waste dalam Pendekatan Lean Construction pada Beberapa Kontraktor', 'meta' => null],
        ['tahun' => '2025', 'judul' => 'Analisis Jalur Kritis dan Percepatan dengan Metode Precedence Diagram Method (PDM) dan Metode Crashing pada Pekerjaan Struktur Proyek Pembangunan Gedung', 'meta' => null],
        ['tahun' => '2025', 'judul' => 'Kajian Kontribusi Penerapan Building Information Modeling (BIM) dalam Proyek BUMN Konstruksi pada Tahun 2022', 'meta' => null],
        ['tahun' => '2025', 'judul' => 'Pengaruh Variasi Ketinggian Tekanan Beton Segar terhadap Ketahanan Formwork pada Struktur Pile Cap Jembatan', 'meta' => null],
        ['tahun' => '2022', 'judul' => 'The Impact Of 3D, 4D, And 5D Building Information Modeling for Reducing Claims To Service Providers', 'meta' => null],
        ['tahun' => '2021', 'judul' => 'Metode Building Information Modeling 5D Untuk Meminimalkan Klaim Konstruksi Yang Ditimbulkan Oleh Penyedia Jasa', 'meta' => null],
    ];

    $existingPenelitianTitles = collect($penelitianBase)->pluck('judul')->map(fn (string $t): string => mb_strtolower(trim($t)));
    $adminPenelitians = \App\Models\Penelitian::published()
        ->where(function ($q) {
            $q->where('penulis', 'like', '%Shanti Astri%')
                ->orWhere('penulis', 'like', '%Noviani, S%');
        })
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get()
        ->reject(fn ($item): bool => $existingPenelitianTitles->contains(mb_strtolower(trim($item->judul))))
        ->map(fn ($item): array => [
            'tahun' => (string) ($item->tahun ?? ''),
            'judul' => $item->judul,
            'meta' => collect([$item->nama_jurnal, $item->index_detail ?: $item->index_type])->filter()->implode(' • '),
        ]);
    $penelitianList = collect($adminPenelitians)->concat($penelitianBase)->values();

    $pengabdianBase = [
        ['tahun' => '2026', 'judul' => 'Inovasi Alat Press Batako Semi Manual untuk Meningkatkan Produktivitas dan Kualitas Produk Batako'],
        ['tahun' => '2026', 'judul' => 'PPIBM: Sosialisasi Teknologi Building Information Modeling (BIM) sebagai Inovasi Terkini di Dunia Konstruksi untuk Siswa DPIB SMKN 2 Ciamis'],
        ['tahun' => '2026', 'judul' => 'Sosialisasi Teknologi Building Information Modeling (BIM) sebagai Inovasi Terkini di Dunia Konstruksi untuk Siswa DPIB SMKN 2 Ciamis'],
        ['tahun' => '2026', 'judul' => 'Uji Kompetensi/Sertifikasi Tenaga Kerja Konstruksi Ahli SDM Vokasional Bidang Konstruksi'],
        ['tahun' => '2025', 'judul' => 'Pelatihan Penyusunan Portofolio Digital bagi Siswa Jurusan Desain Pemodelan Informasi Bangunan SMKN 2 Tasikmalaya agar Lulusannya Siap Kerja dan Kuliah'],
        ['tahun' => '2025', 'judul' => 'Peningkatan Kapasitas Masyarakat Kelurahan Mugarsari Melalui Edukasi Teknik Konstruksi Bangunan Sederhana Tahan Gempa'],
        ['tahun' => '2025', 'judul' => 'Peningkatan Keterampilan Digital Siswa di Jurusan DPIB SMKN 2 Tasikmalaya Melalui Pelatihan Software Microsoft Word'],
    ];

    $existingPengabdianTitles = collect($pengabdianBase)->pluck('judul')->map(fn (string $t): string => mb_strtolower(trim($t)));
    $adminPengabdians = \App\Models\Pengabdian::published()
        ->where(function ($q) {
            $q->where('penulis', 'like', '%Shanti Astri%')
                ->orWhere('penulis', 'like', '%Noviani, S%');
        })
        ->orderByDesc('tahun')
        ->orderByDesc('id')
        ->get()
        ->reject(fn ($item): bool => $existingPengabdianTitles->contains(mb_strtolower(trim($item->judul))))
        ->map(fn ($item): array => [
            'tahun' => (string) ($item->tahun ?? ''),
            'judul' => $item->judul,
        ]);
    $pengabdianList = collect($adminPengabdians)->concat($pengabdianBase)->values();

    $bukuMetaByTitle = [
        'Transportasi Perkerasan Jalan' => 'CV. HEI Publishing • Juli 2025',
        'Timbunan dan Konstruksi Penahan Tanah' => 'CV. HEI Publishing • Maret 2026',
        'Manajemen Konstruksi' => 'Menara Press Indonesia • 2026',
    ];
@endphp

@section('title', $namaDosen . ' | Profil Dosen Teknik Sipil FT UNSIL')
@section('meta_description', 'Biodata dan profil akademik ' . $namaDosen . ' - Dosen Tetap Program Studi S-1 Teknik Sipil FT Universitas Siliwangi, bidang keahlian ' . $kbkLabel . ' & BIM.')

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
                <span class="bg-blue-500/20 text-blue-200 text-[11px] font-medium px-2.5 py-0.5 rounded-full border border-blue-400/25">
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

                {{-- Sidebar Kiri --}}
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
                            Dosen Tetap Program Studi S-1 Teknik Sipil
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Fakultas Teknik &bull; Universitas Siliwangi
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-100 flex flex-wrap gap-2 justify-center">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-medium text-blue-800 bg-blue-50 px-2.5 py-1 rounded-md border border-blue-100">
                                <i class="fa-solid fa-building-columns text-blue-600"></i> {{ $kbkLabel }}
                            </span>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100 space-y-2.5 text-left text-xs">
                            <a href="mailto:shantinoviani@unsil.ac.id"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-[#0070BA] transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070BA] flex items-center justify-center shrink-0 group-hover:bg-[#0070BA] group-hover:text-white transition">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Email Resmi</span>
                                    <span class="font-medium truncate block">shantinoviani@unsil.ac.id</span>
                                </div>
                            </a>

                            <a href="tel:085793772358"
                               class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-emerald-700 transition border border-transparent hover:border-slate-200 group">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Telepon / HP</span>
                                    <span class="font-medium truncate block font-mono">085793772358</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-chart-simple text-[#0070BA]"></i> Ringkasan Rekam Jejak
                        </h3>
                        <div class="grid grid-cols-2 gap-2.5 text-center">
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0B2A4A] block">{{ $penelitianList->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Penelitian</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-[#0070BA] block">{{ $pengabdianList->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Pengabdian (PkM)</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-amber-600 block">{{ $books->count() }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Karya Buku</span>
                            </div>
                            <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xl sm:text-2xl font-black text-emerald-600 block">4</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium leading-tight block mt-0.5">Sertifikasi / Pelatihan</span>
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
                                {{ $namaDosen }} adalah dosen tetap di Program Studi Teknik Sipil, Universitas Siliwangi, dengan fokus keahlian pada bidang Manajemen Rekayasa Konstruksi dan transformasi digital berbasis Building Information Modeling (BIM). Ia menyelesaikan pendidikan Magister Teknik Sipil di Universitas Mercu Buana.
                            </p>
                            <p>
                                Sebelum bergabung sebagai akademisi, ia berpengalaman sebagai Tenaga Ahli Knowledge Management di Balai Penerapan Teknologi Konstruksi — Kementerian PUPR. Minat risetnya mencakup Green &amp; Sustainable Construction, Lean Construction, dan penerapan BIM 5D pada proyek konstruksi skala besar.
                            </p>
                        </div>

                        <div class="mt-5 pt-5 border-t border-slate-100 flex flex-wrap gap-2">
                            @foreach(['Building Information Modeling (BIM)', 'Green & Sustainable Construction', 'Lean Construction'] as $focus)
                                <span class="text-xs font-semibold text-blue-900 bg-blue-50 px-3 py-1 rounded-lg border border-blue-200/70">
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
                                    Pendidikan Formal
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Riwayat pendidikan Magister Teknik Sipil dan Sarjana Pendidikan Teknik Bangunan</p>
                            </div>
                        </div>

                        <div class="border-l-2 border-[#0070BA]/25 pl-4 sm:pl-6 space-y-6 ml-2.5 my-2">
                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#0070BA] ring-4 ring-blue-100"></div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100">
                                        Magister Teknik Sipil (S2)
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400 font-mono">2021</span>
                                </div>
                                <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Mercu Buana</h4>
                                <p class="text-xs text-slate-600 mt-0.5">Manajemen Konstruksi</p>
                            </div>

                            <div class="relative">
                                <div class="absolute -left-[23px] sm:-left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-400 ring-4 ring-slate-100"></div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="inline-block text-[11px] font-bold text-slate-700 bg-slate-100 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                        Sarjana Pendidikan (S1)
                                    </span>
                                    <span class="text-xs font-semibold text-slate-400 font-mono">2014</span>
                                </div>
                                <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">Universitas Pendidikan Indonesia</h4>
                                <p class="text-xs text-slate-600 mt-0.5">Pendidikan Teknik Sipil / Pendidikan Teknik Bangunan</p>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Karya Buku (Terhubung Admin Buku) --}}
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
                                    <p class="text-xs text-slate-400 font-medium">Buku ajar dan referensi yang terhubung langsung ke katalog &amp; menu Buku Admin</p>
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
                                    $penerbitMeta = $bukuMetaByTitle[$book->judul] ?? null;
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
                                        @if($penerbitMeta)
                                            <p class="text-[11px] text-slate-500 mt-0.5">
                                                <strong class="text-slate-700">Penerbit:</strong> {{ $penerbitMeta }}
                                            </p>
                                        @endif
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

                    {{-- 4. Pengalaman Kerja --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pengalaman Kerja
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Rekam jejak pengajaran, Kementerian PUPR, dan pendidikan vokasi</p>
                            </div>
                        </div>

                        <div class="space-y-3.5">
                            @foreach([
                                ['periode' => '2024 – Sekarang', 'tag' => 'Akademisi', 'instansi' => 'Universitas Siliwangi', 'jabatan' => 'Dosen Tetap Program Studi Teknik Sipil'],
                                ['periode' => '2016 – 2022', 'tag' => 'Kementerian PUPR', 'instansi' => 'Balai Penerapan Teknologi Konstruksi - Kementerian PUPR', 'jabatan' => 'Tenaga Ahli Knowledge Management Bidang Konstruksi'],
                                ['periode' => '2015 – 2016', 'tag' => 'Pendidikan Vokasi (3T)', 'instansi' => 'SMKN 1 Cilaku', 'jabatan' => 'Guru Program Sarjana Mengajar SMK di daerah 3T, Jurusan Teknik Gambar Bangunan'],
                                ['periode' => '2014 – 2015', 'tag' => 'Pendidikan Vokasi', 'instansi' => 'SMKN Rajapolah', 'jabatan' => 'Guru Produktif SMK Jurusan Teknik Gambar Bangunan'],
                            ] as $exp)
                                <div class="p-4 sm:p-5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-blue-300 hover:bg-white transition-all duration-200">
                                    <div class="flex items-start justify-between gap-3 flex-wrap">
                                        <div>
                                            <span class="inline-block text-[10px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200/70 uppercase tracking-wider">
                                                {{ $exp['tag'] }}
                                            </span>
                                            <h4 class="text-sm sm:text-base font-bold text-slate-900 mt-1.5">{{ $exp['jabatan'] }}</h4>
                                            <p class="text-xs font-semibold text-slate-600 mt-0.5">{{ $exp['instansi'] }}</p>
                                        </div>
                                        <span class="text-[11px] font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200/80 font-mono inline-block">
                                            {{ $exp['periode'] }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 5. Penelitian --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-flask"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Penelitian
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Daftar penelitian &amp; tersinkron dengan menu Penelitian Admin</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-indigo-50 text-indigo-800 rounded-full border border-indigo-200 shadow-sm">
                                {{ $penelitianList->count() }} Penelitian
                            </span>
                        </div>

                        <div class="space-y-3">
                            @foreach($penelitianList as $index => $item)
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-indigo-400 hover:bg-white transition-all duration-200">
                                    <div class="flex items-center justify-between gap-2 mb-1">
                                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-indigo-50 text-indigo-700 border border-indigo-200/60">
                                            #{{ $index + 1 }}
                                        </span>
                                        @if(!empty($item['tahun']))
                                            <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono">
                                                {{ $item['tahun'] }}
                                            </span>
                                        @endif
                                    </div>
                                    <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">{{ $item['judul'] }}</h4>
                                    @if(!empty($item['meta']))
                                        <p class="text-[11px] text-slate-500 mt-1">{{ $item['meta'] }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 6. Riwayat Pengajaran --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-[#0070BA] border border-sky-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Riwayat Pengajaran
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Mata kuliah yang diampu per semester akademik</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach([
                                ['semester' => '2026/2027 Ganjil', 'matkul' => ['Statistika dan Probabilitas', 'Metoda Pelaksanaan Konstruksi', 'Manajemen Konstruksi', 'Fisika Teknik', 'Dasar-Dasar Pemetaan']],
                                ['semester' => '2025/2026 Genap', 'matkul' => ['Sistem Perancangan Infrastruktur Berbasis Aplikasi', 'Kewirausahaan', 'Ekonomi Rekayasa', 'Alat-Alat Berat dan Pemindahan Tanah Mekanis']],
                                ['semester' => '2025/2026 Ganjil', 'matkul' => ['Statistika dan Probabilitas', 'Metoda Pelaksanaan Konstruksi', 'Manajemen Konstruksi', 'Fisika Teknik', 'Dasar-Dasar Pemetaan']],
                                ['semester' => '2024/2025 Genap', 'matkul' => ['Literasi Teknologi Informasi', 'Etika Profesi']],
                            ] as $teach)
                                <div class="p-4 rounded-xl bg-slate-50/80 border border-slate-200/80">
                                    <span class="inline-block text-[11px] font-bold text-[#0070BA] bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-100 font-mono mb-2.5">
                                        {{ $teach['semester'] }}
                                    </span>
                                    <ul class="space-y-1 text-xs text-slate-700 list-disc pl-4">
                                        @foreach($teach['matkul'] as $mk)
                                            <li>{{ $mk }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 7. Pengabdian pada Masyarakat --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center justify-between flex-wrap gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-600 border border-teal-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                    <i class="fa-solid fa-hand-holding-heart"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                        Pengabdian pada Masyarakat
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium">Kegiatan PkM &amp; tersinkron dengan menu Pengabdian Admin</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold px-3.5 py-1 bg-teal-50 text-teal-800 rounded-full border border-teal-200 shadow-sm">
                                {{ $pengabdianList->count() }} Kegiatan
                            </span>
                        </div>

                        <div class="space-y-3">
                            @foreach($pengabdianList as $index => $pkm)
                                <div class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/80 hover:border-teal-400 hover:bg-white transition-all duration-200 flex items-start justify-between gap-3">
                                    <div class="space-y-1">
                                        <span class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-teal-50 text-teal-700 border border-teal-200/60">
                                            #{{ $index + 1 }}
                                        </span>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">{{ $pkm['judul'] }}</h4>
                                    </div>
                                    @if(!empty($pkm['tahun']))
                                        <span class="text-[11px] font-bold text-slate-500 bg-slate-100/90 px-2.5 py-0.5 rounded-md border border-slate-200/60 font-mono shrink-0">
                                            {{ $pkm['tahun'] }}
                                        </span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 8. Pelatihan yang Diikuti --}}
                    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 border border-amber-100/80 flex items-center justify-center font-bold text-base shadow-sm">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-[#0B2A4A] font-heading tracking-tight">
                                    Pelatihan &amp; Sertifikasi Perangkat Lunak
                                </h3>
                                <p class="text-xs text-slate-400 font-medium">Kompetensi BIM 5D dan permodelan struktur</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @foreach([
                                ['tahun' => '2025', 'nama' => '5D BIM Application Basic Level Cubicost TBQ'],
                                ['tahun' => '2025', 'nama' => '5D BIM Application Basic Level Cubicost TAS'],
                                ['tahun' => '2025', 'nama' => '5D BIM Application Basic Level Cubicost TRB'],
                                ['tahun' => '2018', 'nama' => 'Tekla Structure Foundation Program'],
                            ] as $tr)
                                <div class="p-3.5 rounded-xl bg-amber-50/50 border border-amber-200/70 flex items-center justify-between gap-3">
                                    <span class="text-xs font-semibold text-slate-800">{{ $tr['nama'] }}</span>
                                    <span class="text-[11px] font-bold text-amber-800 bg-white px-2.5 py-0.5 rounded-md border border-amber-200 font-mono shrink-0">{{ $tr['tahun'] }}</span>
                                </div>
                            @endforeach
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
