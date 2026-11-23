@extends('layouts.app')

@section('title', 'Prestasi Mahasiswa | Program Studi S-1 Teknik Sipil FT Universitas Siliwangi')
@section('meta_description', 'Prestasi mahasiswa Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi: juara kompetisi nasional, publikasi jurnal Scopus, dan kegiatan ilmiah.')

@section('content')
    {{-- Hero --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-slate-300 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-500"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:text-white transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-500"></i>
                <span class="text-white">Prestasi Mahasiswa</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Prestasi Mahasiswa
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
                Catatan pencapaian mahasiswa Teknik Sipil UNSIL di kompetisi nasional, publikasi jurnal internasional, dan kegiatan ilmiah.
            </p>
        </div>
    </section>

    {{-- Konten --}}
    <section class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Filter --}}
            <div class="flex flex-wrap items-center gap-2 mb-8">
                <span class="text-xs font-semibold text-slate-500 mr-1">Filter:</span>
                <button type="button" onclick="filterPrestasi('all')" class="filter-btn active-filter px-3.5 py-1.5 rounded-full text-xs font-semibold transition shadow-sm bg-[#0B2A4A] text-white" data-cat="all">
                    Semua
                </button>
                <button type="button" onclick="filterPrestasi('lomba')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-medium transition bg-white text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="lomba">
                    Kompetisi
                </button>
                <button type="button" onclick="filterPrestasi('publikasi')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-medium transition bg-white text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="publikasi">
                    Publikasi &amp; Riset
                </button>
                <button type="button" onclick="filterPrestasi('jembatan')" class="filter-btn px-3.5 py-1.5 rounded-full text-xs font-medium transition bg-white text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="jembatan">
                    Rancang Jembatan
                </button>
            </div>

            <div class="space-y-6">

                    {{-- 1. Tirta Adhipermana --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="lomba">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana saat presentasi NPC di USK Banda Aceh" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-blue-700 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">Kompetisi Nasional</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.tirta-adhipermana') }}" class="hover:text-blue-700 transition">
                                            Tim Tirta Adhipermana Raih Juara 1 National Paper Competition 2023
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        Ria, Farhan, dan Alfarozi dari Teknik Sipil UNSIL meraih Juara 1 pada AISCE 2023 di Universitas Syiah Kuala, Banda Aceh. Karya mereka tentang sumur artesis inovatif untuk krisis air pasca-gempa berhasil menyisihkan 81 peserta dari kampus se-Indonesia.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>26 Okt 2023 · Pembimbing: Andhy Romdani, Ph.D.</span>
                                    <a href="{{ route('berita.tirta-adhipermana') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 2. Fahmi Rahmat --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="publikasi">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat bersama dosen pembimbing" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded border border-indigo-100">Publikasi Scopus</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.fahmi-rahmat') }}" class="hover:text-blue-700 transition">
                                            Fahmi Rahmat Publikasikan 5 Karya Ilmiah di Jurnal Scopus dan Sinta Sebelum Lulus
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        Mahasiswa semester 7 ini berhasil mempublikasikan tiga artikel di jurnal Scopus (Q1 dan Q2) serta dua artikel di jurnal nasional Sinta. Risetnya mencakup bidang bencana alam dan perubahan iklim.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>Agustus 2025 · Pembimbing: Andhy Romdani, Ph.D.</span>
                                    <a href="{{ route('berita.fahmi-rahmat') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 3. Muhammad Raka --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="publikasi">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka El Ghifari bersama tim riset" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-cyan-700 bg-cyan-50 px-2 py-0.5 rounded border border-cyan-100">Publikasi Scopus</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.muhammad-raka') }}" class="hover:text-blue-700 transition">
                                            Muhammad Raka El Ghifari Tembus Dua Jurnal Scopus Q2 Sebelum Wisuda
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        Lulusan Teknik Sipil UNSIL angkatan 2021 ini mempublikasikan dua artikel di jurnal Scopus Q2 dan satu artikel Sinta di bidang pengelolaan sumber daya air sebelum hari wisudanya.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>21 Agt 2025 · Pembimbing: Andhy Romdani, Ph.D.</span>
                                    <a href="{{ route('berita.muhammad-raka') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 4. Bridge Competition SCIENCE 2026 --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="jembatan">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak final kompetisi jembatan SCIENCE 2026" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-100">Kompetisi Jembatan</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.kompetisi-jembatan') }}" class="hover:text-blue-700 transition">
                                            Babak Final National Bridge Design Competition di SCIENCE 2026
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        HMS FT UNSIL menyelenggarakan babak final kompetisi perancangan jembatan nasional di Kampus Mugarsari. Finalis dari berbagai perguruan tinggi menguji efisiensi struktur dan ketahanan beban jembatan mereka.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>20 Okt 2026 · Kampus Mugarsari</span>
                                    <a href="{{ route('berita.kompetisi-jembatan') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 5. Seminar Jalan Tol --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="lomba">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar jalan tol berkelanjutan SCIENCE 2026" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-100">Seminar Nasional</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.seminar-jalan-tol') }}" class="hover:text-blue-700 transition">
                                            Seminar Pembangunan Jalan Tol Berkelanjutan di SCIENCE 2026
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        HMS FT UNSIL mengundang praktisi dari Kementerian PUPR untuk membahas geoteknik, perkerasan jalan, dan keselamatan konstruksi jalan tol bersama mahasiswa dan dosen Teknik Sipil.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>22 Okt 2026 · Fakultas Teknik UNSIL</span>
                                    <a href="{{ route('berita.seminar-jalan-tol') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 6. Riset HATHI --}}
                    <article class="prestasi-card bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group" data-category="publikasi">
                        <div class="sm:flex">
                            <div class="sm:w-5/12 h-56 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
                                <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="FGD riset sedimentasi Segara Anakan bersama HATHI" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-semibold text-blue-700 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">Riset Kolaboratif</span>
                                    <h2 class="text-base sm:text-lg font-bold text-slate-900 mt-2 leading-snug">
                                        <a href="{{ route('berita.hathi-segara-anakan') }}" class="hover:text-blue-700 transition">
                                            Kolaborasi Riset Teknik Sipil UNSIL dalam Penanganan Sedimentasi Segara Anakan
                                        </a>
                                    </h2>
                                    <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                                        Dosen dan mahasiswa bidang keairan terlibat dalam riset bersama BBWS Citanduy dan HATHI untuk merumuskan strategi penanganan sedimentasi laguna Segara Anakan menggunakan pemodelan hidraulik.
                                    </p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                                    <span>September 2024 · Mitra: BBWS Citanduy &amp; HATHI</span>
                                    <a href="{{ route('berita.hathi-segara-anakan') }}" class="font-semibold text-blue-700 hover:underline">Baca &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>

            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        function filterPrestasi(category) {
            const cards = document.querySelectorAll('.prestasi-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                if (btn.getAttribute('data-cat') === category) {
                    btn.className = 'filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition shadow-sm bg-[#0B2A4A] text-white';
                } else {
                    btn.className = 'filter-btn px-3.5 py-1.5 rounded-full text-xs font-medium transition bg-white text-slate-600 hover:bg-slate-100 border border-slate-200';
                }
            });

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
    @endpush
@endsection
