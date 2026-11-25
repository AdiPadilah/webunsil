@extends('layouts.app')

@section('title', 'Buku Ajar & Referensi | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Katalog buku ajar dan buku referensi keinsinyuran ber-ISBN karya staf pengajar Program Studi S-1 Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('karya-dosen') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Karya Dosen</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Buku</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Luaran Penelitian &amp; Buku Ajar
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Buku Ajar &amp; Referensi Dosen
            </h1>
        </div>
    </section>

    <section class="py-12 sm:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            {{-- Info Penulis & Filter --}}
            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-5 sm:p-6 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl overflow-hidden border border-slate-200 bg-[#CDCFDA] shrink-0">
                        <img src="{{ asset('images/dosen/andhy-romdani.jpg') }}?v={{ @filemtime(public_path('images/dosen/andhy-romdani.jpg')) ?: 2 }}"
                             alt="Andhy Romdani, S.T., M.Eng., Ph.D."
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-[#0070BA] mb-0.5">
                            Koleksi Karya Buku Ber-ISBN
                        </span>
                        <h2 class="text-base sm:text-lg font-bold text-[#0B2A4A] font-heading leading-snug">
                            Karya Andhy Romdani, S.T., M.Eng., Ph.D.
                        </h2>
                        <p class="text-xs text-slate-500 mt-0.5">
                            16 judul buku ber-ISBN (12 Non-Fiksi Keteknik-sipilan &amp; 4 Fiksi/Sastra)
                            &middot;
                            <a href="{{ route('dosen.andhy-romdani') }}" class="text-[#0070BA] font-semibold hover:underline">
                                Lihat Profil Penulis &rarr;
                            </a>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2" role="tablist" aria-label="Filter kategori buku">
                    <button type="button" onclick="filterBooks('all', this)" class="book-filter-btn px-3.5 py-2 rounded-xl text-xs font-semibold bg-[#0B2A4A] text-white transition">
                        Semua (16)
                    </button>
                    <button type="button" onclick="filterBooks('non-fiksi', this)" class="book-filter-btn px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                        Non-Fiksi Teknik Sipil (12)
                    </button>
                    <button type="button" onclick="filterBooks('fiksi', this)" class="book-filter-btn px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                        Fiksi / Novel (4)
                    </button>
                </div>
            </div>

            @php
                $books = [
                    // Non-Fiksi Keteknik-sipilan (12 Judul) — Karya Andhy Romdani, S.T., M.Eng., Ph.D.
                    ['no' => 1,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Manajemen Sungai dan Banjir: Adaptasi terhadap Perubahan Iklim Global',                                           'isbn' => '978-623-8221-10-3', 'cover' => 'manajemen-sungai-dan-banjir-adaptasi-terhadap-perubahan-iklim-global.png'],
                    ['no' => 2,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Hidrodinamika Pantai dan Proteksi Kawasan Pesisir',                                                               'isbn' => '978-623-8267-23-4', 'cover' => 'hidrodinamika-pantai-dan-proteksi-kawasan-pesisir.jpeg'],
                    ['no' => 3,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Mekanisme Pendangkalan di Alur Pelayaran Pelabuhan dan Solusi Komprehensifnya',                                   'isbn' => '978-623-8221-67-7', 'cover' => 'mekanisme-pendangkalan-di-alur-pelayaran-pelabuhan-dan-solusi-komprehensifnya.png'],
                    ['no' => 4,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Teknik Irigasi dan Perencanaan Swasembada Pangan',                                                               'isbn' => '973-623-8267-39-2', 'cover' => 'teknik-irigasi-dan-perencanaan-swasembada-pangan.png'],
                    ['no' => 5,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Estuari: Konsep Dasar dan Pengembangan Potensi Muara Sungai',                                                    'isbn' => '978-623-8313-56-1', 'cover' => 'estuari-konsep-dasar-dan-usaha-pengembangan-potensi-muara-sungai.png'],
                    ['no' => 6,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Transpor Sedimen: Proses, Efek, dan Morfodinamika Pantai',                                                       'isbn' => '978-623-8496-78-5', 'cover' => 'transpor-sedimen-proses-efek-dan-morfodinamika-pantai-2.png'],
                    ['no' => 7,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Mekanika Fluida: Teori Fundamental dan Aplikasinya',                                                             'isbn' => '978-623-508-029-1', 'cover' => 'mekanika-fluida-teori-fundamental-dan-aplikasinya.jpg'],
                    ['no' => 8,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'How to Write and Publish your First Research Paper (Cara Jitu Tembus Publikasi Artikel di Jurnal Internasional)', 'isbn' => '978-624-226-022-7', 'cover' => 'how-to-write-and-publish-your-first-research-paper.jpg'],
                    ['no' => 9,  'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Soal dan Penyelesaian Mekanika Fluida Dasar',                                                                    'isbn' => '978-623-508-432-9', 'cover' => 'soal-dan-penyelesaian-mekanika-fluida-dasar.jpg'],
                    ['no' => 10, 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Hidrolika: Dasar-dasar, Aplikasi, dan Perencanaan Saluran Terbuka',                                              'isbn' => '978-624-226-427-0', 'cover' => 'hidraulika-dasar-dasar-aplikasi-dan-perencanaan-saluran-terbuka.jpg'],
                    ['no' => 11, 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Compound Flooding: Mekanisme, Risiko, dan Strategi Ketahanan terhadap Perubahan Iklim',                          'isbn' => '978-624-226-450-8', 'cover' => 'compound-flooding-di-pantai-dan-estuari.jpg'],
                    ['no' => 12, 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'judul' => 'Soal dan Solusi untuk Hidrolika',                                                                                'isbn' => '978-624-226-567-3', 'cover' => 'soal-dan-solusi-untuk-hidraulika.jpg'],

                    // Fiksi / Novel Kreatif (4 Judul) — Karya Andhy Romdani, S.T., M.Eng., Ph.D.
                    ['no' => 13, 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 1): Aksi Penyelamatan Kocak Dimulai',                                  'isbn' => '978-623-508-060-4', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-1.jpg'],
                    ['no' => 14, 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 2): Pelumpuhan Profesor Gila Peramu Formula Penghancur',               'isbn' => '978-623-508-074-1', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-2.jpg'],
                    ['no' => 15, 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'judul' => 'Dua Burung Gereja di Kubah Emas Masjid',                                                                         'isbn' => '978-623-508-037-6', 'cover' => 'dua-burung-gereja-di-kubah-emas-masjid.jpg'],
                    ['no' => 16, 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'judul' => 'Adam dan Hawa: Ketika Mereka Bukan dari Surga',                                                                  'isbn' => '978-624-226-110-1', 'cover' => 'adam-dan-hawa-ketika-mereka-bukan-dari-surga.jpg'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="book-catalog-grid">
                @foreach($books as $book)
                    @php
                        $isFiksi = $book['kategori'] === 'fiksi';
                        $badgeClasses = $isFiksi
                            ? 'text-amber-800 bg-amber-50 border-amber-200/80'
                            : 'text-cyan-800 bg-cyan-50 border-cyan-200/80';
                        $numClasses = $isFiksi
                            ? 'bg-amber-100 text-amber-800 border-amber-200/80'
                            : 'bg-cyan-100 text-cyan-800 border-cyan-200/80';
                        $hoverBorder = $isFiksi ? 'hover:border-amber-400' : 'hover:border-cyan-400';
                    @endphp
                    <article data-category="{{ $book['kategori'] }}"
                             class="book-card bg-white rounded-2xl border border-slate-200/90 {{ $hoverBorder }} p-4 sm:p-5 shadow-xs hover:shadow-md transition-all duration-200 flex items-start gap-4 group">
                        <div class="shrink-0 w-20 sm:w-24 aspect-[3/4] rounded-xl overflow-hidden border border-slate-200 bg-slate-100 shadow-xs">
                            <img src="{{ asset('images/buku/' . $book['cover']) }}"
                                 alt="{{ $book['judul'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                 onerror="this.style.display='none'">
                        </div>

                        <div class="flex-1 min-w-0 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center gap-2 mb-2 flex-wrap">
                                    <span class="w-5 h-5 rounded-md font-bold text-[10px] flex items-center justify-center border {{ $numClasses }}">
                                        {{ $book['no'] }}
                                    </span>
                                    <span class="font-semibold text-[10px] px-2.5 py-0.5 rounded-full border {{ $badgeClasses }}">
                                        {{ $book['label'] }}
                                    </span>
                                </div>

                                <h3 class="text-sm sm:text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0B2A4A] transition-colors">
                                    {{ $book['judul'] }}
                                </h3>
                            </div>

                            <div class="mt-3 pt-2.5 border-t border-slate-100 space-y-1.5">
                                <p class="text-xs text-slate-700 font-medium flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-pen text-[10px] text-[#0070BA] shrink-0"></i>
                                    <span>Karya: <a href="{{ route('dosen.andhy-romdani') }}" class="font-bold text-[#0B2A4A] hover:text-[#0070BA] hover:underline">Andhy Romdani, S.T., M.Eng., Ph.D.</a></span>
                                </p>
                                <span class="inline-block text-slate-500 font-mono text-[11px] bg-slate-50 px-2.5 py-0.5 rounded-md border border-slate-200/80">
                                    ISBN: {{ $book['isbn'] }}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    <script>
        function filterBooks(category, btn) {
            document.querySelectorAll('.book-filter-btn').forEach(function (el) {
                el.classList.remove('bg-[#0B2A4A]', 'text-white');
                el.classList.add('bg-slate-100', 'text-slate-700');
            });
            btn.classList.remove('bg-slate-100', 'text-slate-700');
            btn.classList.add('bg-[#0B2A4A]', 'text-white');

            document.querySelectorAll('.book-card').forEach(function (card) {
                card.style.display = (category === 'all' || card.dataset.category === category) ? '' : 'none';
            });
        }
    </script>
@endsection

