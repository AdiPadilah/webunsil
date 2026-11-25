@extends('layouts.app')

@section('title', 'Beranda | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Website Resmi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL) Tasikmalaya. Akreditasi BAIK LAM Teknik.')

@section('content')
    @php
        $setting = $siteSetting ?? \App\Models\SiteSetting::current();
        $sambutanParagraphs = collect(preg_split('/\R{2,}/', trim((string) $setting->kaprodi_sambutan)))->filter();
    @endphp
    
    <section id="beranda" class="hero-banner relative min-h-[580px] lg:min-h-[680px] flex items-center py-20 lg:py-28 border-b border-slate-800 overflow-hidden">
        {{-- Decorative floating shapes --}}
        <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-20 -right-20 w-96 h-96 bg-amber-400/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-2xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-5 reveal">
                    {{-- Badge akreditasi --}}
                    <div class="flex flex-wrap items-center gap-2">
                        <button type="button" onclick="openModal('modal-akreditasi-top')"
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-emerald-500/20 hover:bg-emerald-500/30 border border-emerald-400/40 rounded-full text-emerald-200 text-xs font-semibold transition cursor-pointer">
                            <i class="fa-solid fa-award text-emerald-300 text-[11px]" aria-hidden="true"></i>
                            Akreditasi {{ $setting->akreditasi_peringkat }} ({{ \Illuminate\Support\Str::before($setting->akreditasi_lembaga, ' (') }})
                        </button>
                        <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-white/10 border border-white/20 rounded-full text-slate-100 text-xs font-semibold">
                            <i class="fa-solid fa-calendar-check text-amber-400 text-[11px]" aria-hidden="true"></i>
                            Berdiri Sejak 1984
                        </span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-heading tracking-tight leading-tight drop-shadow-lg">
                        Program Studi<br><span class="text-amber-400">Teknik Sipil</span>
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-100 font-semibold drop-shadow-md">
                        Fakultas Teknik Universitas Siliwangi
                    </p>

                    <p class="text-slate-200 text-sm sm:text-base leading-relaxed font-normal drop-shadow-md max-w-xl">
                        Mengembangkan ilmu pengetahuan, teknologi, dan rekayasa sipil untuk menjawab tantangan infrastruktur serta lingkungan yang tangguh, cerdas, dan berkelanjutan.
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-wrap gap-3 pt-1">
                        <a href="{{ route('tentang-kami') }}"
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-amber-400 hover:bg-amber-300 text-slate-900 text-sm font-bold rounded-xl shadow-lg hover:shadow-amber-400/30 transition-all duration-200">
                            <i class="fa-solid fa-building-columns text-sm" aria-hidden="true"></i>
                            Profil Prodi
                        </a>
                        <a href="{{ route('akademik') }}"
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 hover:bg-white/20 border border-white/30 text-white text-sm font-semibold rounded-xl transition-all duration-200 backdrop-blur-sm">
                            <i class="fa-solid fa-book-open text-sm" aria-hidden="true"></i>
                            Info Akademik
                        </a>
                    </div>
                </div>

                {{-- Right: Quick access panel --}}
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3 reveal reveal-delay-2">
                    <div class="bg-[#081F37]/80 backdrop-blur-md border border-white/15 rounded-2xl p-5 space-y-3 shadow-xl">
                        <p class="text-amber-400 text-xs font-bold uppercase tracking-wider">Akses Cepat</p>
                        <div class="grid grid-cols-2 gap-2.5">
                            <a href="{{ route('layanan') }}" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3.5 transition group flex items-center gap-3">
                                <span class="w-9 h-9 rounded-lg bg-amber-400/15 text-amber-300 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-bell-concierge text-sm" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0">
                                    <span class="block text-white text-xs font-bold leading-tight">Layanan</span>
                                    <span class="block text-slate-300 text-[11px] truncate">Persuratan &amp; TA</span>
                                </span>
                            </a>
                            <a href="{{ route('jadwal-sidang-skripsi') }}" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3.5 transition group flex items-center gap-3">
                                <span class="w-9 h-9 rounded-lg bg-sky-400/15 text-sky-300 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-calendar-days text-sm" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0">
                                    <span class="block text-white text-xs font-bold leading-tight">Jadwal Sidang</span>
                                    <span class="block text-slate-300 text-[11px] truncate">Seminar &amp; Skripsi</span>
                                </span>
                            </a>
                            <a href="{{ route('kurikulum') }}" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3.5 transition group flex items-center gap-3">
                                <span class="w-9 h-9 rounded-lg bg-emerald-400/15 text-emerald-300 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-graduation-cap text-sm" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0">
                                    <span class="block text-white text-xs font-bold leading-tight">Kurikulum OBE</span>
                                    <span class="block text-slate-300 text-[11px] truncate">5 Bidang Keahlian</span>
                                </span>
                            </a>
                            <a href="{{ route('dosen') }}" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3.5 transition group flex items-center gap-3">
                                <span class="w-9 h-9 rounded-lg bg-amber-400/15 text-amber-300 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-user-tie text-sm" aria-hidden="true"></i>
                                </span>
                                <span class="min-w-0">
                                    <span class="block text-white text-xs font-bold leading-tight">Daftar Dosen</span>
                                    <span class="block text-slate-300 text-[11px] truncate">Profil &amp; Kepakaran</span>
                                </span>
                            </a>
                        </div>
                        <div class="pt-3 border-t border-white/10 flex flex-wrap items-center justify-between gap-2 text-xs text-slate-300">
                            <a href="mailto:{{ $setting->kontak_email }}" class="inline-flex items-center gap-2 hover:text-amber-300 transition">
                                <i class="fa-solid fa-envelope text-amber-400" aria-hidden="true"></i> {{ $setting->kontak_email }}
                            </a>
                            <a href="https://instagram.com/sipilunsil" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 hover:text-pink-300 transition">
                                <i class="fa-brands fa-instagram text-pink-400" aria-hidden="true"></i> @sipilunsil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    {{-- Section Sambutan Ketua Program Studi --}}
    <section class="py-16 lg:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                
                <div class="lg:col-span-4 flex justify-center reveal">
                    <div class="relative">
                        {{-- Decorative accent --}}
                        <div class="absolute -top-3 -left-3 w-full h-full rounded-2xl bg-amber-400/20 border-2 border-amber-400/30"></div>
                        <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200 bg-white w-full max-w-[260px] sm:max-w-[280px]">
                            <div class="aspect-[4/5] overflow-hidden bg-slate-100">
                                <img src="{{ $setting->kaprodi_foto_url }}" 
                                     alt="{{ $setting->kaprodi_nama }} - {{ $setting->kaprodi_jabatan }}" 
                                     class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-700"
                                     onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            </div>
                            <div class="p-4 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white text-center">
                                <h4 class="text-sm font-bold text-white leading-tight">{{ $setting->kaprodi_nama }}</h4>
                                <p class="text-[11px] text-amber-400 font-semibold mt-1">{{ $setting->kaprodi_jabatan }}</p>
                                <p class="text-[10px] text-slate-300 mt-0.5">Teknik Sipil FT UNSIL</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5 reveal reveal-delay-1">
                    <div>
                        <p class="text-[#0070BA] font-bold text-xs sm:text-sm uppercase tracking-widest flex items-center gap-2">
                            <span class="inline-block w-6 h-0.5 bg-[#0070BA]"></span>
                            Sambutan Ketua Program Studi
                        </p>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#0B2A4A] font-heading leading-tight mt-2">
                            Selamat datang di<br class="hidden sm:block"> Teknik Sipil UNSIL.
                        </h2>
                    </div>

                    @if($setting->kaprodi_kutipan)
                        <blockquote class="border-l-4 border-amber-400 pl-5 py-1 bg-amber-50 rounded-r-xl">
                            <p class="text-[#0B2A4A] text-sm sm:text-base font-semibold leading-relaxed italic">
                                "{{ $setting->kaprodi_kutipan }}"
                            </p>
                        </blockquote>
                    @endif

                    <div class="space-y-3.5 text-slate-600 text-sm sm:text-[15px] leading-relaxed">
                        @foreach($sambutanParagraphs as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="flex flex-wrap gap-3 pt-1">
                        <a href="{{ route('tentang-kami') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-sm font-semibold rounded-xl transition-all duration-200 shadow-sm">
                            <i class="fa-solid fa-circle-info text-amber-400"></i>
                            Profil Lengkap Prodi
                        </a>
                        <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-2 px-5 py-2.5 border border-[#0B2A4A] hover:bg-slate-50 text-[#0B2A4A] text-sm font-semibold rounded-xl transition-all duration-200">
                            <i class="fa-solid fa-bullseye text-[#0070BA]"></i>
                            Visi &amp; Misi
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="py-12 bg-gradient-to-r from-[#0B2A4A] via-[#0d3155] to-[#0B2A4A] border-b border-blue-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <div class="absolute top-0 left-1/4 w-72 h-72 bg-amber-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-48 h-48 bg-blue-400 rounded-full blur-2xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div class="text-center group reveal reveal-delay-1">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-amber-400/15 border border-amber-400/30 mb-3 group-hover:bg-amber-400/25 transition mx-auto">
                        <i class="fa-solid fa-user-graduate text-amber-400 text-lg"></i>
                    </div>
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num leading-none" data-target="{{ $setting->mahasiswa_aktif }}">{{ number_format($setting->mahasiswa_aktif, 0, ',', '.') }}</span>
                    <span class="block text-xs font-semibold text-white mt-1">Mahasiswa Aktif</span>
                    <span class="block text-[11px] text-slate-300 mt-0.5">saat ini</span>
                </div>
                <div class="text-center group reveal reveal-delay-2">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-amber-400/15 border border-amber-400/30 mb-3 group-hover:bg-amber-400/25 transition mx-auto">
                        <i class="fa-solid fa-medal text-amber-400 text-lg"></i>
                    </div>
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num leading-none" data-target="{{ $setting->total_lulusan }}">{{ number_format($setting->total_lulusan, 0, ',', '.') }}</span>
                    <span class="block text-xs font-semibold text-white mt-1">Lulusan</span>
                    <span class="block text-[11px] text-slate-300 mt-0.5">total kelulusan</span>
                </div>
                <div class="text-center group reveal reveal-delay-3">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-amber-400/15 border border-amber-400/30 mb-3 group-hover:bg-amber-400/25 transition mx-auto">
                        <i class="fa-solid fa-trophy text-amber-400 text-lg"></i>
                    </div>
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num leading-none" data-target="{{ $setting->prestasi_mahasiswa }}">{{ number_format($setting->prestasi_mahasiswa, 0, ',', '.') }}</span>
                    <span class="block text-xs font-semibold text-white mt-1">Prestasi Mahasiswa</span>
                    <span class="block text-[11px] text-slate-300 mt-0.5">kompetisi &amp; kegiatan</span>
                </div>
                <div class="text-center group reveal reveal-delay-4">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-amber-400/15 border border-amber-400/30 mb-3 group-hover:bg-amber-400/25 transition mx-auto">
                        <i class="fa-solid fa-flask text-amber-400 text-lg"></i>
                    </div>
                    <span class="block text-3xl sm:text-4xl font-black text-amber-400 counter-num leading-none" data-target="{{ $setting->aktivitas_dosen }}">{{ number_format($setting->aktivitas_dosen, 0, ',', '.') }}</span>
                    <span class="block text-xs font-semibold text-white mt-1">Aktivitas Dosen</span>
                    <span class="block text-[11px] text-slate-300 mt-0.5">riset &amp; pengabdian</span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                
                <div class="lg:col-span-8 space-y-12">
                    
                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-2 mb-6">
                            <div>
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                                    Mengenal Program Studi
                                </h2>
                                <p class="text-sm text-slate-600 mt-1">
                                    Standar kompetensi, arah lulusan, dan pencapaian akademik mahasiswa Teknik Sipil.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <a href="{{ route('kurikulum') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100 relative">
                                    <img src="{{ asset('images/unsil-campus-hd.jpg') }}" alt="Capaian Pembelajaran Lulusan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?q=80&w=600'">
                                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-[#0B2A4A]/85 text-white text-[11px] font-semibold backdrop-blur-xs">Kurikulum OBE</span>
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Capaian Pembelajaran Lulusan
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Struktur mata kuliah 8 semester dan peminatan bidang keahlian rekayasa sipil.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Lihat kurikulum <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('visi-misi') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100 relative">
                                    <img src="{{ asset('images/wisuda-unsil.jpg') }}" alt="Profil Profesional Mandiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600'">
                                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-[#0B2A4A]/85 text-white text-[11px] font-semibold backdrop-blur-xs">Visi &amp; Misi</span>
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Profil Profesional Mandiri
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Kompetensi dan arah pengabdian lulusan Sarjana Teknik Sipil UNSIL.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Baca visi misi <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('prestasi-mahasiswa') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100 relative">
                                    <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Prestasi Mahasiswa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='{{ asset('images/event-2.jpg') }}'">
                                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-amber-500 text-slate-950 text-[11px] font-bold">Prestasi</span>
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Prestasi Mahasiswa
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Rekam jejak juara kompetisi nasional dan publikasi riset mahasiswa.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Lihat daftar prestasi <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 mb-6">
                            <div>
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                                    Kegiatan Mahasiswa
                                </h2>
                                <p class="text-sm text-slate-600 mt-1">
                                    Aktivitas kemahasiswaan, lomba rekayasa, dan forum ilmiah.
                                </p>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <a href="https://instagram.com/hmsftunsil" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-semibold text-slate-700 hover:text-pink-600 bg-white px-3 py-1.5 rounded-full border border-slate-200 gap-1.5 transition">
                                    <i class="fa-brands fa-instagram text-sm text-pink-500" aria-hidden="true"></i> @hmsftunsil
                                </a>
                                <a href="https://instagram.com/sipilunsil" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-semibold text-slate-700 hover:text-pink-600 bg-white px-3 py-1.5 rounded-full border border-slate-200 gap-1.5 transition">
                                    <i class="fa-brands fa-instagram text-sm text-pink-500" aria-hidden="true"></i> @sipilunsil
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <a href="{{ route('mahasiswa-alumni') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/event-1.jpg') }}" alt="Kompetisi Jembatan Nasional SCIENCE" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?q=80&w=600'">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        SCIENCE: Bridge Competition
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Ajang tahunan National Bridge Design Competition dan Lomba Kuat Tekan Beton.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Pelajari lebih lanjut <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('mahasiswa-alumni') }}#hms" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/hms-unsil.jpg') }}" alt="Himpunan Mahasiswa Sipil FT UNSIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600'">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Organisasi HMS FT UNSIL
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Wadah pengembangan kepemimpinan, keprofesian, dan solidaritas mahasiswa Teknik Sipil.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Profil HMS <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('berita.seminar-taiwan') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100 relative">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Internasional Indonesia-Taiwan NCKU" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-white/95 text-[#0B2A4A] text-[11px] font-semibold shadow-xs">12 Okt 2026</span>
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Seminar Internasional Indonesia-Taiwan
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        "Bridging Futures": peluang studi lanjut di Taiwan bersama Yanuar Haryanto, Ph.D. (NCKU).
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Baca liputan <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 mb-6">
                            <div>
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">
                                    Fasilitas Laboratorium
                                </h2>
                                <p class="text-sm text-slate-600 mt-1">
                                    Sarana praktikum, pengujian material, dan pemodelan struktur terintegrasi.
                                </p>
                            </div>
                            <a href="{{ route('laboratorium') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] hover:text-[#0B2A4A] bg-white px-3.5 py-2 rounded-full border border-slate-200 hover:border-[#0070BA] transition self-start sm:self-auto shrink-0">
                                Lihat Semua Laboratorium <i class="fa-solid fa-arrow-right text-[10px]" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <a href="{{ route('laboratorium') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/lab-civil.jpg') }}" alt="Laboratorium Bahan Konstruksi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='{{ asset('images/event-1.jpg') }}'">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Lab. Teknologi Bahan Konstruksi
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Uji mutu kuat tekan beton, tarik baja tulangan, agregat, dan material konstruksi.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Detail fasilitas <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('laboratorium') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Laboratorium Mekanika Tanah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Lab. Mekanika Tanah &amp; Geoteknik
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Penyelidikan tanah lapangan, analisis daya dukung fondasi, dan kestabilan lereng.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Detail fasilitas <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('laboratorium') }}" class="flex flex-col h-full rounded-2xl overflow-hidden shadow-xs hover:shadow-lg border border-slate-200/90 hover:border-[#0070BA]/50 bg-white group transition-all duration-200">
                                <div class="h-44 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/gedung-unsil.jpg') }}" alt="Studio Komputasi dan BIM" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src='{{ asset('images/event-3.jpg') }}'">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        Studio Komputasi &amp; BIM
                                    </h3>
                                    <p class="text-[13px] text-slate-600 mt-2 leading-relaxed">
                                        Pemodelan struktur SAP2000, ETABS, perancangan CAD, dan Building Information Modeling.
                                    </p>
                                    <span class="mt-auto pt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA] group-hover:gap-2 transition-all">
                                        Detail fasilitas <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                
                <aside class="lg:col-span-4 space-y-8 lg:sticky lg:top-24">
                    
                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading">
                                Agenda Terdekat
                            </h2>
                            <span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 text-[11px] font-bold">Agenda</span>
                        </div>
                        
                        @if(isset($agendaTerdekat) && $agendaTerdekat)
                            @php
                                $agThumb = $agendaTerdekat->thumbnail
                                    ? (str_starts_with($agendaTerdekat->thumbnail, 'images/') ? asset($agendaTerdekat->thumbnail) : asset('storage/' . $agendaTerdekat->thumbnail))
                                    : asset('images/workshop-obe.jpg');
                            @endphp
                            <a href="{{ route('berita.show', $agendaTerdekat->slug) }}" class="block bg-white rounded-2xl overflow-hidden shadow-xs hover:shadow-lg transition-all duration-200 border border-slate-200/90 hover:border-[#0070BA]/50 group">
                                <div class="aspect-[16/10] overflow-hidden bg-slate-100 relative">
                                    <img src="{{ $agThumb }}" alt="{{ $agendaTerdekat->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" loading="lazy">
                                    <span class="absolute bottom-3 left-3 px-3 py-1 rounded-full bg-[#0B2A4A]/90 text-amber-300 text-[11px] font-bold backdrop-blur-xs">
                                        {{ $agendaTerdekat->published_at ? $agendaTerdekat->published_at->translatedFormat('d F Y') : 'Terjadwal' }}
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <h3 class="text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0070BA] transition-colors">
                                        {{ $agendaTerdekat->title }}
                                    </h3>
                                    @if($agendaTerdekat->excerpt)
                                        <p class="text-xs text-slate-600 leading-relaxed pt-2 border-t border-slate-100">
                                            {{ $agendaTerdekat->excerpt }}
                                        </p>
                                    @endif
                                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#0070BA]">
                                        Lihat detail agenda <i class="fa-solid fa-chevron-right text-[10px]" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>
                        @else
                            <div class="bg-white rounded-2xl p-6 border border-slate-200 text-xs text-slate-500">
                                Belum ada agenda kegiatan mendatang.
                            </div>
                        @endif
                    </div>

                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading">
                                Berita Terbaru
                            </h2>
                            <a href="{{ route('berita.index') }}" class="text-xs font-bold text-[#0070BA] hover:underline">
                                Semua
                            </a>
                        </div>

                        <div class="space-y-3">
                            @forelse($articles as $art)
                            @php
                                $artUrl = route('berita.show', $art->slug);
                                $artThumb = $art->thumbnail ? (str_starts_with($art->thumbnail, 'images/') ? asset($art->thumbnail) : asset('storage/' . $art->thumbnail)) : asset('images/unsil-seminar-jalan-tol.jpeg');
                            @endphp
                            <a href="{{ $artUrl }}" class="flex items-start gap-3.5 p-3 bg-white rounded-xl border border-slate-200/80 hover:border-[#0070BA]/50 hover:shadow-md transition-all duration-200 group">
                                <div class="w-24 flex-shrink-0 rounded-lg overflow-hidden bg-slate-200 aspect-video">
                                    <img src="{{ $artThumb }}" alt="{{ $art->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <span class="text-[11px] font-medium text-slate-500 block mb-1">
                                        {{ $art->published_at ? $art->published_at->translatedFormat('d F Y') : '-' }}
                                    </span>
                                    <h3 class="text-[13px] font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2 transition-colors">
                                        {{ $art->title }}
                                    </h3>
                                </div>
                            </a>
                            @empty
                            <div class="p-4 bg-white rounded-xl border border-slate-200 text-xs text-slate-500">
                                Belum ada berita terbaru.
                            </div>
                            @endforelse
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('berita.index') }}" class="inline-flex items-center justify-center gap-2 w-full py-2.5 bg-white hover:bg-[#0B2A4A] text-[#0B2A4A] hover:text-white border border-slate-300 hover:border-[#0B2A4A] text-xs font-bold rounded-xl transition-colors">
                                <span>Lihat Semua Berita</span>
                                <i class="fa-solid fa-arrow-right text-[10px]" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>


    
    <section id="lokasi" class="bg-white py-14 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
                <div>
                    <p class="text-amber-700 font-bold uppercase text-xs tracking-wider">
                        Lokasi Kampus
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] mt-1 font-heading">
                        UNSIL Kampus 2 Mugarsari (Fakultas Teknik)
                    </h2>
                    <p class="text-slate-600 text-sm mt-1">Universitas Siliwangi, Tasikmalaya, Jawa Barat</p>
                </div>
                <a href="https://maps.app.goo.gl/szSbqfg9FWsZnMc67" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 bg-[#0B2A4A] hover:bg-[#133E6C] text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-xs transition whitespace-nowrap self-start md:self-auto">
                    <i class="fa-solid fa-location-arrow text-amber-400" aria-hidden="true"></i>
                    Buka di Google Maps
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 rounded-2xl overflow-hidden shadow-xs border border-slate-200">
                <div class="lg:col-span-2 h-72 lg:h-[380px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.883726715206!2d108.24907807499997!3d-7.379663392629738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5817bf80530b%3A0x170d075986c8ed42!2sUNIVERSITAS%20SILIWANGI%20-%20KAMPUS%202%20MUGARSARI!5e0!3m2!1sid!2sid!4v1731900000000!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Kampus 2 Universitas Siliwangi Mugarsari - Fakultas Teknik">
                    </iframe>
                </div>

                <div class="bg-slate-50 p-6 flex flex-col justify-between gap-5 border-t lg:border-t-0 lg:border-l border-slate-200">
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="w-9 h-9 rounded-xl bg-blue-100/80 text-[#0070BA] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-sm" aria-hidden="true"></i>
                            </span>
                            <div>
                                <p class="text-[#0B2A4A] font-bold text-xs uppercase tracking-wide mb-0.5">Alamat</p>
                                <p class="text-slate-700 text-xs sm:text-[13px] leading-relaxed">
                                    Jl. Mugarsari, Kelurahan Mugarsari, Kec. Tamansari, Kota Tasikmalaya, Jawa Barat 46196
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-9 h-9 rounded-xl bg-blue-100/80 text-[#0070BA] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope text-sm" aria-hidden="true"></i>
                            </span>
                            <div>
                                <p class="text-[#0B2A4A] font-bold text-xs uppercase tracking-wide mb-0.5">Email</p>
                                <a href="mailto:{{ $setting->kontak_email }}" class="text-[#0070BA] hover:underline font-semibold text-xs sm:text-[13px]">
                                    {{ $setting->kontak_email }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-9 h-9 rounded-xl bg-blue-100/80 text-[#0070BA] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-clock text-sm" aria-hidden="true"></i>
                            </span>
                            <div>
                                <p class="text-[#0B2A4A] font-bold text-xs uppercase tracking-wide mb-0.5">Jam Layanan</p>
                                <p class="text-slate-700 text-xs sm:text-[13px] leading-relaxed">
                                    {{ $setting->jam_layanan }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-4">
                        <p class="text-slate-600 text-xs font-bold uppercase tracking-wider mb-2">Akses Transportasi</p>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-train text-[10px] text-[#0070BA]" aria-hidden="true"></i> Kurang lebih 3 km dari Stasiun Tasikmalaya</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-bus text-[10px] text-[#0070BA]" aria-hidden="true"></i> Kurang lebih 1 km dari Terminal Indihiang</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-square-parking text-[10px] text-[#0070BA]" aria-hidden="true"></i> Area parkir tersedia di dalam kampus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
