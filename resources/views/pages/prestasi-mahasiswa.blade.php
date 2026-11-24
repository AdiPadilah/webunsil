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
        </div>
    </section>

    {{-- Konten Utama Tema UNSIL (Clean White Canvas, Aksen Navy #0B2A4A & Biru UNSIL #0070BA) --}}
    <section class="py-12 lg:py-16 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Filter Kategori --}}
            <div class="flex flex-wrap items-center gap-2 mb-10 pb-6 border-b border-slate-100">
                <span class="text-xs font-semibold text-slate-500 mr-1">Filter:</span>
                <button type="button" onclick="filterPrestasi('all')" class="filter-btn active-filter px-4 py-2 rounded-full text-xs font-semibold transition shadow-sm bg-[#0070BA] text-white" data-cat="all">
                    Semua
                </button>
                <button type="button" onclick="filterPrestasi('lomba')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="lomba">
                    Kompetisi
                </button>
                <button type="button" onclick="filterPrestasi('publikasi')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="publikasi">
                    Publikasi &amp; Riset
                </button>
                <button type="button" onclick="filterPrestasi('jembatan')" class="filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200" data-cat="jembatan">
                    Rancang Jembatan
                </button>
            </div>

            <div class="divide-y divide-slate-200/80">

                {{-- 1. Tirta Adhipermana --}}
                <article class="prestasi-card py-12 lg:py-16 first:pt-0 reveal group" data-category="lomba">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Kompetisi Nasional &bull; 26 Oktober 2023
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Tim &ldquo;Tirta Adhipermana&rdquo; Juara 1 National Paper Competition 2023
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Tim delegasi mahasiswa Jurusan Teknik Sipil Universitas Siliwangi yang beranggotakan Ria (Ketua), Farhan, dan Alfarozi di bawah bimbingan Andhy Romdani, Ph.D. sukses meraih Juara 1 pada ajang The 4th Aceh International Symposium on Civil Engineering (AISCE 2023) di Universitas Syiah Kuala Banda Aceh. Karya inovatif aplikasi sumur artesis untuk penanganan krisis air pasca-bencana gempa berhasil menyisihkan 81 tim dari berbagai perguruan tinggi terkemuka se-Indonesia.
                            </p>
                            <a href="{{ route('berita.tirta-adhipermana') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana saat presentasi NPC di USK Banda Aceh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </article>

                {{-- 2. Fahmi Rahmat --}}
                <article class="prestasi-card py-12 lg:py-16 reveal group" data-category="publikasi">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Publikasi Scopus &bull; Agustus 2025
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Fahmi Rahmat Amanulloh Publikasikan 5 Karya Ilmiah Scopus &amp; Sinta Sebelum Lulus
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Fahmi Rahmat Amanulloh, mahasiswa semester 7 Teknik Sipil UNSIL bersama dosen pembimbing Andhy Romdani, Ph.D. menorehkan capaian riset internasional membanggakan dengan mempublikasikan lima karya ilmiah sekaligus sebelum menyelesaikan studi sarjana. Publikasinya menembus jurnal internasional bereputasi terindeks Scopus Q1 (Journal of Natural Hazards Research) dan Scopus Q2 (Water and Climate Change), serta dua jurnal nasional terakreditasi Sinta.
                            </p>
                            <a href="{{ route('berita.fahmi-rahmat') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat bersama dosen pembimbing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </article>

                {{-- 3. Muhammad Raka --}}
                <article class="prestasi-card py-12 lg:py-16 reveal group" data-category="publikasi">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Publikasi Scopus &bull; 21 Agustus 2025
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Muhammad Raka El Ghifari Tembus Dua Jurnal Scopus Q2 Sebelum Wisuda
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Muhammad Raka El Ghifari, lulusan sarjana Teknik Sipil Universitas Siliwangi angkatan 2021, membuktikan keunggulan riset mahasiswa dengan mempublikasikan dua artikel ilmiah di jurnal internasional bereputasi global terindeks Scopus Q2 pada bidang pengelolaan sumber daya air terapan serta satu artikel Sinta menjelang hari wisudanya.
                            </p>
                            <a href="{{ route('berita.muhammad-raka') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka El Ghifari bersama tim riset" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </article>

                {{-- 4. Bridge Competition SCIENCE 2026 --}}
                <article class="prestasi-card py-12 lg:py-16 reveal group" data-category="jembatan">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Kompetisi Jembatan &bull; 20 Oktober 2026
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Babak Final National Bridge Design Competition di SCIENCE 2026
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menyelenggarakan babak final kompetisi perancangan jembatan berskala nasional di Kampus Mugarsari. Delegasi finalis dari berbagai perguruan tinggi nasional bersaing menguji ketahanan beban, efisiensi bahan, serta inovasi desain rancang bangun jembatan masa depan.
                            </p>
                            <a href="{{ route('berita.kompetisi-jembatan') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-final-bridge-competition.jpeg') }}" alt="Babak final kompetisi jembatan SCIENCE 2026" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </article>

                {{-- 5. Seminar Jalan Tol --}}
                <article class="prestasi-card py-12 lg:py-16 reveal group" data-category="lomba">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Seminar Nasional &bull; 22 Oktober 2026
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Seminar Pembangunan Jalan Tol Berkelanjutan dalam Rangkaian SCIENCE 2026
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Menghadirkan praktisi Kementerian PUPR dan pakar transportasi nasional di Fakultas Teknik UNSIL, seminar ini membekali mahasiswa dengan keilmuan mutakhir seputar perkerasan jalan, stabilitas geoteknik tanah lunak, dan keselamatan konstruksi jalan tol berstandar ramah lingkungan.
                            </p>
                            <a href="{{ route('berita.seminar-jalan-tol') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar jalan tol berkelanjutan SCIENCE 2026" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </article>

                {{-- 6. Riset HATHI --}}
                <article class="prestasi-card py-12 lg:py-16 reveal group" data-category="publikasi">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                        <div class="lg:col-span-7 flex flex-col items-start">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#0070BA] mb-2">
                                Riset Kolaboratif &bull; September 2024
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                                Kolaborasi Riset Teknik Sipil UNSIL dalam Penanganan Sedimentasi Segara Anakan
                            </h2>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 text-justify sm:text-left">
                                Sivitas akademika dosen dan mahasiswa bidang keairan Teknik Sipil FT UNSIL bersama BBWS Citanduy dan HATHI terlibat langsung dalam perumusan solusi teknis sedimentasi laguna Segara Anakan melalui pemodelan hidraulik dan penanganan erosi hulu daerah aliran sungai secara berkelanjutan.
                            </p>
                            <a href="{{ route('berita.hathi-segara-anakan') }}" class="inline-flex items-center justify-center bg-[#0070BA] hover:bg-[#005a96] text-white font-semibold px-8 py-3 rounded-full text-sm shadow-sm hover:shadow transition">
                                Selengkapnya
                            </a>
                        </div>
                        <div class="lg:col-span-5 order-first lg:order-last">
                            <div class="w-full aspect-[4/3] rounded-[28px] overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="FGD riset sedimentasi Segara Anakan bersama HATHI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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
                    btn.className = 'filter-btn active-filter px-4 py-2 rounded-full text-xs font-semibold transition shadow-sm bg-[#0070BA] text-white';
                } else {
                    btn.className = 'filter-btn px-4 py-2 rounded-full text-xs font-medium transition bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200';
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
