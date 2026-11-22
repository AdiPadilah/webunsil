@extends('layouts.app')

@section('title', 'Mahasiswa dan Alumni | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Himpunan Mahasiswa Sipil (HMS), Ikatan Alumni, dan Galeri Dokumentasi @sipilunsil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Mahasiswa &amp; Alumni</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Komunitas &amp; Jejak Lulusan
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Mahasiswa &amp; Alumni
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl leading-relaxed">
                Wadah kebersamaan, kepemimpinan organisasi Himpunan Mahasiswa Sipil (HMS), serta jejaring ribuan alumni Teknik Sipil FT UNSIL yang berkiprah di kancah nasional.
            </p>
        </div>
    </section>

    
    <section class="py-12 md:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2A4A] font-heading">Organisasi &amp; Ikatan Alumni</h2>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed max-w-2xl">
                    Menghubungkan mahasiswa aktif dengan jejaring alumni profesional di BUMN, kementerian PUPR, konsultan rekayasa, dan jasa konstruksi.
                </p>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14 items-stretch">
                
                {{-- HMS --}}
                <div id="hms" class="bg-white rounded-xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between scroll-mt-28">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider block">Organisasi Kemahasiswaan</span>
                                <h3 class="text-xl font-bold text-slate-900 mt-0.5">Himpunan Mahasiswa Sipil (HMS)</h3>
                            </div>
                            <a href="https://instagram.com/hmsftunsil" target="_blank" class="text-xs font-semibold text-pink-600 hover:underline">
                                <i class="fa-brands fa-instagram mr-1"></i> @hmsftunsil
                            </a>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Organisasi kemahasiswaan tingkat program studi yang aktif mengembangkan kepemimpinan, kompetensi teknis, dan kebersamaan mahasiswa. HMS rutin menyelenggarakan seminar rekayasa infrastruktur, kegiatan pengabdian masyarakat, dan kompetisi rancang jembatan nasional (SCIENCE).
                        </p>
                        <div class="mt-5 p-4 bg-slate-50 rounded-lg border border-slate-200 text-xs">
                            <span class="font-bold text-slate-800 block mb-1">Kegiatan &amp; Prestasi:</span>
                            <p class="text-slate-600 leading-relaxed">
                                Keikutsertaan dan raihan finalis dalam Lomba Kuat Tekan Beton Nasional, Bridge Design Competition, dan Program Kreativitas Mahasiswa (PKM).
                            </p>
                        </div>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Fakultas Teknik Universitas Siliwangi</span>
                        <a href="https://instagram.com/hmsftunsil" target="_blank" class="font-semibold text-[#0070BA] hover:underline flex items-center gap-1">
                            Instagram HMS <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                
                {{-- Alumni --}}
                <div id="alumni" class="bg-white rounded-xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between scroll-mt-28">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider block">Jejaring Lulusan</span>
                                <h3 class="text-xl font-bold text-slate-900 mt-0.5">Ikatan Alumni Teknik Sipil</h3>
                            </div>
                            <span class="text-xs text-slate-500">
                                - Alumni
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Jejaring alumni Sarjana Teknik Sipil UNSIL yang berkarier di BUMN konstruksi nasional (Wika, PT PP, Adhi Karya, Waskita, Hutama Karya), instansi pemerintah dan Kementerian PUPR, konsultan perencana/pengawas, perbankan, dan kontraktor mandiri.
                        </p>
                        <div class="mt-5 p-4 bg-slate-50 rounded-lg border border-slate-200 text-xs">
                            <span class="font-bold text-slate-800 block mb-1">Tracer Study &amp; Rekrutmen:</span>
                            <p class="text-slate-600 leading-relaxed">
                                Pendataan masa tunggu kerja dan umpan balik pengguna lulusan untuk penyelarasan kurikulum dengan kebutuhan industri konstruksi modern.
                            </p>
                        </div>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">Kiprah Sejak 1984</span>
                        <a href="https://unsil.ac.id" target="_blank" class="font-semibold text-[#0070BA] hover:underline flex items-center gap-1">
                            Portal Tracer Study <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            
            <div class="border-t border-slate-200 pt-10">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0B2A4A] font-heading">Dokumentasi Kegiatan</h2>
                        <p class="text-slate-500 text-xs sm:text-sm mt-0.5">Potret aktivitas akademik, seminar, praktikum, dan kehidupan kampus.</p>
                    </div>
                    <a href="https://instagram.com/sipilunsil" target="_blank"
                       class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 hover:text-pink-600 transition">
                        <i class="fa-brands fa-instagram text-sm"></i>
                        Instagram @sipilunsil â†’
                    </a>
                </div>

                
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                    $igPhotos = [
                        ['img' => 'seminar-taiwan-ncku.jpg',       'caption' => 'Seminar Internasional NCKU Taiwan'],
                        ['img' => 'tugu-fakultas-teknik-unsil.jpg', 'caption' => 'Fakultas Teknik Universitas Siliwangi'],
                        ['img' => 'event-1.jpg',                   'caption' => 'Kunjungan Ilmiah Bendungan Leuwikeris'],
                        ['img' => 'event-3.jpg',                   'caption' => 'National Bridge Design Competition'],
                        ['img' => 'hms-unsil.jpg',                 'caption' => 'Himpunan Mahasiswa Sipil FT UNSIL'],
                        ['img' => 'wisuda-unsil.jpg',              'caption' => 'Wisuda Sarjana Teknik Sipil'],
                    ];
                    @endphp
                    @foreach($igPhotos as $p)
                    <div class="aspect-square rounded-lg overflow-hidden bg-slate-200 border border-slate-200 group">
                        <img src="{{ asset('images/' . $p['img']) }}" alt="{{ $p['caption'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             onerror="this.style.display='none'">
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection

