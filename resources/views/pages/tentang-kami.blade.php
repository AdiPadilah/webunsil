@extends('layouts.app')

@section('title', 'Tentang Kami | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Profil lengkap, sambutan pimpinan, struktur organisasi, visi misi, sejarah, serta akreditasi Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    @php
        $setting = $siteSetting ?? \App\Models\SiteSetting::current();
        $sambutanParagraphs = collect(preg_split('/\R{2,}/', trim((string) $setting->kaprodi_sambutan)))->filter();
    @endphp
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[11px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Tentang Kami</span>
            </nav>

            <p class="text-[#0070BA] font-medium text-xs">
                Profil Program Studi
            </p>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Tentang Kami
            </h1>
        </div>
    </section>

    
    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            
            {{-- Sambutan Ketua Program Studi (Proporsional & Relevan) --}}
            <div class="max-w-5xl mx-auto bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm p-6 sm:p-8 lg:p-10 reveal">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    {{-- Foto Pimpinan / Ketua Program Studi --}}
                    <div class="lg:col-span-4 flex justify-center">
                        <div class="rounded-2xl overflow-hidden shadow-sm border border-slate-200 bg-white w-full max-w-[250px] sm:max-w-[270px] hover:shadow-md transition-shadow">
                            <div class="aspect-[4/5] overflow-hidden bg-slate-100">
                                <img src="{{ $setting->kaprodi_foto_url }}" 
                                     alt="{{ $setting->kaprodi_nama }} - {{ $setting->kaprodi_jabatan }}" 
                                     class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500"
                                     onerror="this.src='{{ asset('images/tugu-fakultas-teknik-unsil.jpg') }}'">
                            </div>
                            <div class="p-3 bg-[#0B2A4A] text-white text-center">
                                <h4 class="text-xs sm:text-sm font-bold text-white leading-tight">{{ $setting->kaprodi_nama }}</h4>
                                <p class="text-[11px] text-amber-400 font-medium mt-0.5">{{ $setting->kaprodi_jabatan }}</p>
                                <p class="text-[10px] text-slate-300">Fakultas Teknik Universitas Siliwangi</p>
                            </div>
                        </div>
                    </div>

                    {{-- Isi Sambutan --}}
                    <div class="lg:col-span-8 flex flex-col justify-between space-y-4">
                        <div>
                            <span class="text-[11px] font-semibold text-[#0070BA] uppercase tracking-wider block mb-1">
                                Pimpinan Program Studi
                            </span>
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading leading-tight mb-3">
                                Sambutan Ketua Program Studi
                            </h2>
                            
                            <div class="text-xs sm:text-[13px] text-slate-600 space-y-3 leading-relaxed text-justify">
                                <p class="font-semibold text-slate-800">
                                    Selamat datang di Program Studi Teknik Sipil Universitas Siliwangi.
                                </p>
                                @foreach($sambutanParagraphs as $paragraph)
                                <p>
                                    {{ $paragraph }}
                                </p>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4 pt-3.5 border-t border-slate-100 flex items-center justify-end gap-4">
                            <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#0070BA] hover:underline">
                                <span>Lihat Visi &amp; Misi Prodi</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            
            {{-- 2 Card Sejarah & Dosen (Gaya Gambar 2: Full-bleed Image, Rounded-2xl, Judul di Kiri Bawah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal">

                {{-- Card 1: Sejarah Program Studi --}}
                <a href="{{ route('sejarah') }}" class="group relative rounded-2xl overflow-hidden block h-64 sm:h-72 lg:h-[280px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 hover-lift">
                    <img src="{{ asset('images/gedung-rektorat-unsil.jpg') }}" alt="Sejarah Program Studi" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors">
                            Sejarah Program Studi
                        </h3>
                    </div>
                </a>

                {{-- Card 2: Dosen & Tenaga Pengajar --}}
                <a href="{{ route('dosen') }}" class="group relative rounded-2xl overflow-hidden block h-64 sm:h-72 lg:h-[280px] shadow-sm hover:shadow-xl transition-all duration-300 bg-slate-900 hover-lift">
                    <img src="{{ asset('images/workshop-obe.jpg') }}" alt="Dosen & Tenaga Pengajar" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-lg sm:text-xl font-bold font-heading leading-tight drop-shadow-md text-white group-hover:text-amber-300 transition-colors">
                            Dosen &amp; Tenaga Pengajar
                        </h3>
                    </div>
                </a>

            </div>

            
            <div class="space-y-6 pt-2">
                
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-3 border-b border-slate-200">
                    <div>
                        <h2 class="text-2xl font-bold text-[#0B2A4A] font-heading">
                            Berita &amp; Informasi Terkini
                        </h2>
                    </div>
                    <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                        Lihat Semua Berita &rarr;
                    </a>
                </div>

                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($articles as $art)
                    @php
                        $artUrl = Route::has('berita.' . $art->slug) ? route('berita.' . $art->slug) : route('berita.show', $art->slug);
                        $artThumb = $art->thumbnail ? (str_starts_with($art->thumbnail, 'images/') ? asset($art->thumbnail) : asset('storage/' . $art->thumbnail)) : asset('images/unsil-seminar-jalan-tol.jpeg');
                    @endphp
                    <article class="bg-white rounded-lg overflow-hidden border border-slate-200 flex flex-col group">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="{{ $artThumb }}" alt="{{ $art->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block mb-1">
                                    {{ $art->published_at ? $art->published_at->translatedFormat('d F Y') : '-' }} &bull; {{ $art->category }}
                                </span>
                                <h3 class="text-sm font-bold text-slate-900 group-hover:text-[#0070BA] leading-snug line-clamp-2">
                                    <a href="{{ $artUrl }}">
                                        {{ $art->title }}
                                    </a>
                                </h3>
                                <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                    {{ $art->excerpt ?? Str::limit(strip_tags($art->content), 120) }}
                                </p>
                            </div>
                            <div class="pt-4 mt-3 border-t border-slate-100">
                                <a href="{{ $artUrl }}" class="text-xs font-semibold text-[#0070BA] hover:underline">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </article>
                    @empty
                    <div class="col-span-3 text-center py-6 text-slate-400 text-xs">
                        Belum ada berita.
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </section>

    
    <div id="modal-akreditasi" class="fixed inset-0 z-50 hidden bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200">
            <div class="relative bg-[#0B2A4A] p-6 text-white rounded-t-xl">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="absolute top-5 right-5 text-slate-300 hover:text-white w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <span class="text-amber-400 text-[10px] font-bold uppercase tracking-wider block">Sertifikasi &amp; Legalitas</span>
                <h3 class="text-xl font-bold mt-1">Status Akreditasi LAM Teknik</h3>
            </div>
            <div class="p-6 sm:p-8 space-y-4 text-sm text-slate-700 leading-relaxed">
                <div class="bg-emerald-50 border border-emerald-200 p-4 rounded-xl flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div>
                        <span class="block text-xs font-bold text-emerald-800">Peringkat Akreditasi</span>
                        <span class="block text-lg font-black text-emerald-900">{{ $setting->akreditasi_peringkat }} ({{ \Illuminate\Support\Str::before($setting->akreditasi_lembaga, ' (') }})</span>
                    </div>
                </div>
                <div class="space-y-2 text-xs text-slate-600">
                    <p><strong>Lembaga:</strong> {{ $setting->akreditasi_lembaga }}</p>
                    <p><strong>Nomor SK:</strong> {{ $setting->akreditasi_sk }}</p>
                    <p><strong>Jenjang Program:</strong> Sarjana (S-1)</p>
                    <p><strong>Program Studi:</strong> Teknik Sipil, Fakultas Teknik Universitas Siliwangi</p>
                    <p><strong>Masa Berlaku:</strong> {{ $setting->akreditasi_berlaku }}</p>
                </div>

            </div>
            <div class="p-4 bg-slate-50 rounded-b-xl border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeModal('modal-akreditasi')" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-white text-xs font-semibold rounded-lg transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
@endsection

