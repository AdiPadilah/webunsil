@extends('layouts.app')

@section('title', 'Dosen Teknik Sipil UNSIL Ikuti Workshop Penulisan Artikel Jurnal Internasional Q1 (PASTI-Q1) 2026 di Bogor | Program Studi Teknik Sipil UNSIL')
@section('meta_description', 'Ketua Program Studi Teknik Sipil FT UNSIL, Andhy Romdani, S.T., M.Eng., Ph.D. terpilih mengikuti Workshop Penulisan Artikel Submit to Journal International Q1 (PASTI-Q1) Tahun 2026 yang diselenggarakan Kemendiktisaintek di Bogor.')

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
            <span class="text-slate-800 font-semibold truncate">Workshop Jurnal Internasional Q1 (PASTI-Q1)</span>
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
                            Publikasi &amp; Riset &bull; 29 September &ndash; 2 Oktober 2026 &bull; Bogor
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Dosen Teknik Sipil UNSIL Terpilih Mengikuti Workshop Penulisan Artikel Submit to Journal International Q1 (PASTI-Q1) Tahun 2026 di Bogor
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas Program Studi Teknik Sipil UNSIL</strong>
                        </p>
                    </div>

                    {{-- Foto Utama / Cover --}}
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/workshop-jurnal-q1/foto-2.jpg') }}"
                             alt="Sesi foto bersama peserta Workshop Penulisan Artikel Submit to Journal International Q1 2026"
                             class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Foto bersama para akademisi dan peneliti terpilih bersama narasumber pada penutupan Workshop Penulisan Artikel Submit to Journal International Q1 (PASTI-Q1) Tahun 2026 di Bogor.
                        </figcaption>
                    </figure>

                    {{-- Isi Berita --}}
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p>
                            Dosen sekaligus Ketua Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi (UNSIL), <strong>Andhy Romdani, S.T., M.Eng., Ph.D.</strong>, berhasil lolos seleksi nasional dan terpilih sebagai peserta dalam kegiatan bergengsi <strong>Workshop Penulisan Artikel Submit to Journal International Q1 (PASTI-Q1) Tahun 2026</strong> yang diselenggarakan di Bogor pada 29 September hingga 2 Oktober 2026.
                        </p>

                        <p>
                            Kegiatan ini diinisiasi secara resmi oleh <strong>Direktorat Bina Talenta Penelitian dan Pengembangan, Direktorat Jenderal Riset dan Pengembangan, Kementerian Pendidikan Tinggi, Sains, dan Teknologi (Kemendiktisaintek)</strong> yang bekerja sama dengan <strong>Universitas Pakuan</strong> sebagai mitra pelaksana.
                        </p>

                        <p>
                            Program PASTI-Q1 merupakan program akselerasi nasional yang dirancang khusus untuk membina dan mendampingi para akademisi terpilih dari berbagai perguruan tinggi di Indonesia agar mampu menembus publikasi naskah ilmiah pada jurnal internasional bereputasi kuartil tertinggi (Scopus Q1).
                        </p>

                        <p>
                            Selama empat hari pelaksanaan intensif, para peserta mendapatkan pendampingan tatap muka (mentoring) langsung dari para editor jurnal internasional ternama dan pakar publikasi global. Materi yang diberikan mencakup teknik penyusunan manuskrip berstandar tinggi, penguatan state-of-the-art dan novelty riset, strategi visualisasi data keteknikan, hingga kiat merespons telaah reviewer (peer review response) secara tepat.
                        </p>

                        <p>
                            Keikutsertaan perwakilan dosen Program Studi Teknik Sipil UNSIL dalam forum ini diharapkan dapat memacu peningkatan iklim publikasi ilmiah internasional bereputasi tinggi di lingkungan Fakultas Teknik UNSIL, serta menjadi motivasi bagi dosen muda dan mahasiswa untuk terus berkontribusi dalam riset rekayasa sipil berdaya saing global.
                        </p>
                    </div>

                    {{-- Galeri Foto Dokumentasi --}}
                    <div class="mt-10 pt-8 border-t border-slate-200">
                        <div class="mb-5">
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900 font-heading flex items-center gap-2">
                                <i class="fa-solid fa-images text-[#0070BA]"></i> Dokumentasi Kegiatan
                            </h3>
                            <p class="text-xs text-slate-500 mt-1">
                                Dokumentasi kegiatan Workshop PASTI-Q1 Tahun 2026 di Bogor:
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            {{-- Foto 1 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/workshop-jurnal-q1/foto-1.jpg') }}"
                                         alt="Andhy Romdani, S.T., M.Eng., Ph.D. di depan banner Workshop PASTI-Q1"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen &amp; Ketua Prodi Teknik Sipil FT UNSIL) saat registrasi peserta Workshop PASTI-Q1 di Bogor.
                                </div>
                            </div>

                            {{-- Foto 2 --}}
                            <div class="group rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                                <div class="aspect-[4/3] overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/workshop-jurnal-q1/foto-2.jpg') }}"
                                         alt="Foto bersama peserta dan narasumber Workshop PASTI-Q1 di depan panggung utama"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-3 text-xs text-slate-600 bg-slate-50 border-t border-slate-100 leading-relaxed">
                                    Sesi foto bersama seluruh peneliti dan dosen peserta pendampingan artikel jurnal internasional kuartil Q1 di panggung ballroom acara.
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
                                <span><strong class="text-slate-800">29 September &ndash; 2 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Bogor, Jawa Barat</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-building-columns text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Penyelenggara: Ditjen Riset &amp; Pengembangan, Kemendiktisaintek</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Mitra Kerja Sama: Universitas Pakuan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-tie text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Delegasi UNSIL: <strong class="text-slate-800">Andhy Romdani, S.T., M.Eng., Ph.D.</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-tag text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Publikasi Ilmiah, Scopus Q1, Kemendiktisaintek</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Halaman Terkait --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4">Halaman Terkait</h3>
                        <div class="space-y-3">
                            <a href="{{ route('karya-dosen') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/event-3.jpg') }}" alt="Karya Dosen" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    Karya Ilmiah &amp; Publikasi Dosen Teknik Sipil UNSIL
                                </p>
                            </a>
                            <a href="{{ route('berita.seminar-hasil-uns') }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    <img src="{{ asset('images/seminar-hasil-uns/foto-2.jpg') }}" alt="Seminar UNS" class="w-full h-full object-cover group-hover:scale-105 transition">
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    Dosen Teknik Sipil UNSIL Penguji Eksternal Seminar Hasil Disertasi di FT UNS
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
