@extends('layouts.app')

@section('title', 'Dosen Teknik Sipil UNSIL Menjadi Penguji Eksternal Seminar Hasil Disertasi di UNS | Program Studi Teknik Sipil UNSIL')
@section('meta_description', 'Dosen Program Studi Teknik Sipil FT UNSIL diundang sebagai Penguji Eksternal dalam Seminar Hasil Disertasi Program Studi Pascasarjana Teknik Sipil Fakultas Teknik Universitas Sebelas Maret (UNS), 29 Oktober 2026.')

@section('content')
    
    {{-- Breadcrumb --}}
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Penguji Eksternal Seminar Hasil Disertasi UNS</span>
        </div>
    </div>

    {{-- Main Article --}}
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <article class="lg:col-span-2">
                    
                    {{-- Header Berita --}}
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Riset &amp; Kolaborasi &bull; 29 Oktober 2026 &bull; Universitas Sebelas Maret, Surakarta
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Dosen Teknik Sipil UNSIL Diundang sebagai Penguji Eksternal Seminar Hasil Disertasi di Program Pascasarjana Teknik Sipil FT UNS
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas Program Studi Teknik Sipil UNSIL</strong>
                        </p>
                    </div>

                    {{-- Foto Utama / Cover --}}
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}"
                             alt="Foto bersama peserta dan penguji Seminar Hasil Disertasi Pascasarjana Teknik Sipil UNS"
                             class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Foto bersama promotor, ko-promotor, penguji eksternal, dan kandidat doktor usai pelaksanaan Seminar Hasil Disertasi di Program Studi Pascasarjana Teknik Sipil Fakultas Teknik UNS, Rabu 29 Oktober 2026.
                        </figcaption>
                    </figure>

                    {{-- Isi Berita --}}
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p>
                            Ketua Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL), <strong>Andhy Romdani, S.T., M.Eng., Ph.D.</strong>, mendapat kepercayaan untuk tampil sebagai <strong>Penguji Eksternal</strong> dalam kegiatan <em>Seminar Hasil Disertasi</em> yang diselenggarakan oleh <strong>Program Studi Pascasarjana Teknik Sipil, Fakultas Teknik, Universitas Sebelas Maret (UNS), Surakarta</strong>, pada Rabu (29/10/2026).
                        </p>

                        <p>
                            Seminar Hasil merupakan tahapan krusial dalam proses penyelesaian Program Doktor (S-3), di mana kandidat doktor mempresentasikan hasil penelitian disertasinya di hadapan dewan penguji. Pada kesempatan istimewa ini, disertasi tersebut dipresentasikan oleh <strong>Sri Wanto, S.T., M.T.</strong>, yang juga merupakan dosen di Program Studi Teknik Sipil FT UNSIL yang tengah menempuh studi doktoral di UNS.
                        </p>

                        <p>
                            Disertasi yang diseminarkan berjudul <em>"Optimasi Kekuatan Mekanik dan Peningkatan Ketahanan Paparan Cuaca Sambungan Ethylene Propylene Diene Monomer (EPDM) untuk Peningkatan Performa Sambungan Ekspansi Jembatan Kareta"</em>. Penelitian ini berfokus pada inovasi material rekayasa jembatan dan optimasi performa sambungan ekspansi yang sangat aplikatif untuk menunjang keandalan infrastruktur jembatan nasional.
                        </p>

                        <p>
                            Keterlibatan pimpinan prodi dan dosen UNSIL dalam sidang doktoral di UNS mencerminkan pengakuan atas kompetensi keilmuan, kepakaran rekayasa, dan rekam jejak riset sivitas akademika Program Studi Teknik Sipil FT UNSIL di tingkat nasional. Hal ini sekaligus mempererat jalinan kolaborasi riset dan akademik antara FT UNSIL dan FT UNS.
                        </p>

                        <p>
                            Kegiatan seminar berlangsung secara khidmat di ruang sidang Program Studi Pascasarjana Teknik Sipil FT UNS dan berjalan dengan sukses. Seluruh tim penguji memberikan masukan konstruktif guna penyempurnaan naskah disertasi sebelum melangkah ke tahapan ujian terbuka/promosi doktor.
                        </p>
                    </div>

                    {{-- Galeri Foto Dokumentasi --}}
                    <div class="mt-10 pt-8 border-t border-slate-200">
                        <div class="mb-5">
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2">
                                <i class="fa-solid fa-images text-[#0070BA]"></i> Dokumentasi Kegiatan
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">
                                Rangkaian dokumentasi foto Seminar Hasil Disertasi di FT UNS, 29 Oktober 2026:
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            {{-- Foto 1 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-1.jpg') }}"
                                         alt="Dosen UNSIL bersama kandidat doktor usai seminar hasil"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Dosen Teknik Sipil UNSIL selaku Penguji Eksternal bersama kandidat doktor usai sesi seminar hasil disertasi.
                                </div>
                            </div>

                            {{-- Foto 2 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}"
                                         alt="Foto bersama seluruh tim penguji dan kandidat doktor"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Foto bersama seluruh tim penguji: promotor, ko-promotor, penguji internal, dan penguji eksternal dari UNSIL.
                                </div>
                            </div>

                            {{-- Foto 3 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-3.jpg') }}"
                                         alt="Penguji Eksternal UNSIL sedang meninjau naskah disertasi"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Penguji Eksternal dari UNSIL sedang menelaah naskah disertasi sebelum sesi pertanyaan dimulai.
                                </div>
                            </div>

                            {{-- Foto 4 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-4.jpg') }}"
                                         alt="Suasana presentasi seminar hasil disertasi di ruang sidang FT UNS"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Kandidat doktor memaparkan hasil disertasinya di hadapan tim penguji di ruang sidang Pascasarjana Teknik Sipil FT UNS.
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Tombol Navigasi --}}
                    <div class="mt-8 pt-6 border-t border-slate-200 flex flex-wrap items-center gap-3">
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-[#0070BA] hover:text-[#005a96] text-xs font-semibold transition">
                            <i class="fa-solid fa-newspaper"></i> Kembali ke Berita
                        </a>
                        <span class="text-slate-300">&bull;</span>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-solid fa-house"></i> Beranda
                        </a>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="space-y-6">
                    
                    {{-- Informasi Kegiatan --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span><strong class="text-slate-800">Rabu, 29 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Ruang Sidang Pascasarjana Teknik Sipil FT UNS, Surakarta</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-building-columns text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Penyelenggara: Prodi Pascasarjana Teknik Sipil FT UNS</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-tie text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Peran UNSIL: <strong class="text-slate-800">Penguji Eksternal</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-tag text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Riset Material, Jembatan, Kolaborasi S-3</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Halaman Terkait --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4">Halaman Terkait</h3>
                        <div class="space-y-3">
                            <a href="{{ route('riset') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Riset" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    Penelitian &amp; Inovasi Keteknikan Dosen Teknik Sipil UNSIL
                                </p>
                            </a>
                            <a href="{{ route('berita.seminar-taiwan') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Taiwan" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    Seminar Internasional "Bridging Futures" Indonesia-Taiwan di FT UNSIL
                                </p>
                            </a>
                        </div>
                    </div>

                    {{-- Info Lebih Lanjut --}}
                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Info Lebih Lanjut</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Ikuti akun Instagram resmi untuk update kegiatan akademik dan kemahasiswaan terbaru Program Studi Teknik Sipil UNSIL.
                        </p>
                        <a href="https://instagram.com/sipilunsil" target="_blank"
                           class="inline-flex items-center gap-2 text-slate-300 hover:text-white text-xs font-semibold transition w-full justify-center">
                            <i class="fa-brands fa-instagram"></i> @sipilunsil
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
