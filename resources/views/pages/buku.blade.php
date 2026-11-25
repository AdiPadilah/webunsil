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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @php
                $books = [
                    // Karya Hidayanto, S.T., M.T.
                    ['judul' => 'Manajemen Proyek: Manajemen Kualitas Proyek', 'penulis' => 'Hidayanto, S.T., M.T.', 'penulis_url' => null, 'kategori' => 'non-fiksi', 'label' => 'Buku Ajar', 'tahun' => '2024', 'isbn' => '978-623-8722-77-8', 'cover' => null],

                    // Karya Ir. M. Ridha Al Mustafa, S.T., M.T.
                    ['judul' => 'Manajemen Konstruksi', 'penulis' => 'Ir. M. Ridha Al Mustafa, S.T., M.T.', 'penulis_url' => null, 'kategori' => 'non-fiksi', 'label' => 'Buku Ajar', 'tahun' => '2025', 'isbn' => '978-634-7310-43-9', 'cover' => null],

                    // Karya Andhy Romdani, S.T., M.Eng., Ph.D. — Non-Fiksi Keteknik-sipilan (12 Judul)
                    ['judul' => 'Manajemen Sungai dan Banjir: Adaptasi terhadap Perubahan Iklim Global',                                           'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-8221-10-3', 'cover' => 'manajemen-sungai-dan-banjir-adaptasi-terhadap-perubahan-iklim-global.png'],
                    ['judul' => 'Hidrodinamika Pantai dan Proteksi Kawasan Pesisir',                                                               'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-8267-23-4', 'cover' => 'hidrodinamika-pantai-dan-proteksi-kawasan-pesisir.jpeg'],
                    ['judul' => 'Mekanisme Pendangkalan di Alur Pelayaran Pelabuhan dan Solusi Komprehensifnya',                                   'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-8221-67-7', 'cover' => 'mekanisme-pendangkalan-di-alur-pelayaran-pelabuhan-dan-solusi-komprehensifnya.png'],
                    ['judul' => 'Teknik Irigasi dan Perencanaan Swasembada Pangan',                                                               'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '973-623-8267-39-2', 'cover' => 'teknik-irigasi-dan-perencanaan-swasembada-pangan.png'],
                    ['judul' => 'Estuari: Konsep Dasar dan Pengembangan Potensi Muara Sungai',                                                    'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-8313-56-1', 'cover' => 'estuari-konsep-dasar-dan-usaha-pengembangan-potensi-muara-sungai.png'],
                    ['judul' => 'Transpor Sedimen: Proses, Efek, dan Morfodinamika Pantai',                                                       'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-8496-78-5', 'cover' => 'transpor-sedimen-proses-efek-dan-morfodinamika-pantai-2.png'],
                    ['judul' => 'Mekanika Fluida: Teori Fundamental dan Aplikasinya',                                                             'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-508-029-1', 'cover' => 'mekanika-fluida-teori-fundamental-dan-aplikasinya.jpg'],
                    ['judul' => 'How to Write and Publish your First Research Paper (Cara Jitu Tembus Publikasi Artikel di Jurnal Internasional)', 'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-624-226-022-7', 'cover' => 'how-to-write-and-publish-your-first-research-paper.jpg'],
                    ['judul' => 'Soal dan Penyelesaian Mekanika Fluida Dasar',                                                                    'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-623-508-432-9', 'cover' => 'soal-dan-penyelesaian-mekanika-fluida-dasar.jpg'],
                    ['judul' => 'Hidrolika: Dasar-dasar, Aplikasi, dan Perencanaan Saluran Terbuka',                                              'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-624-226-427-0', 'cover' => 'hidraulika-dasar-dasar-aplikasi-dan-perencanaan-saluran-terbuka.jpg'],
                    ['judul' => 'Compound Flooding: Mekanisme, Risiko, dan Strategi Ketahanan terhadap Perubahan Iklim',                          'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-624-226-450-8', 'cover' => 'compound-flooding-di-pantai-dan-estuari.jpg'],
                    ['judul' => 'Soal dan Solusi untuk Hidrolika',                                                                                'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'non-fiksi', 'label' => 'Non-Fiksi',   'tahun' => null, 'isbn' => '978-624-226-567-3', 'cover' => 'soal-dan-solusi-untuk-hidraulika.jpg'],

                    // Karya Andhy Romdani, S.T., M.Eng., Ph.D. — Fiksi / Novel Kreatif (4 Judul)
                    ['judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 1): Aksi Penyelamatan Kocak Dimulai',                                  'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-060-4', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-1.jpg'],
                    ['judul' => '6 Hero dan Ancaman Bom di Borobudur (Seri 2): Pelumpuhan Profesor Gila Peramu Formula Penghancur',               'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-074-1', 'cover' => '6-hero-dan-ancaman-bom-di-borobudur-seri-2.jpg'],
                    ['judul' => 'Dua Burung Gereja di Kubah Emas Masjid',                                                                         'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-623-508-037-6', 'cover' => 'dua-burung-gereja-di-kubah-emas-masjid.jpg'],
                    ['judul' => 'Adam dan Hawa: Ketika Mereka Bukan dari Surga',                                                                  'penulis' => 'Andhy Romdani, S.T., M.Eng., Ph.D.', 'penulis_url' => route('dosen.andhy-romdani'), 'kategori' => 'fiksi',     'label' => 'Novel Fiksi', 'tahun' => null, 'isbn' => '978-624-226-110-1', 'cover' => 'adam-dan-hawa-ketika-mereka-bukan-dari-surga.jpg'],
                ];

                $totalBooks = count($books);
                $authorCounts = collect($books)->countBy('penulis');
                $nonFiksiCount = collect($books)->where('kategori', 'non-fiksi')->count();
                $fiksiCount = collect($books)->where('kategori', 'fiksi')->count();
            @endphp

            {{-- Toolbar Filter Multi-Dosen & Kategori --}}
            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs p-4 sm:p-5 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-center">
                    <div class="md:col-span-5 relative">
                        <i class="fa-solid fa-magnifying-glass text-xs text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                        <input type="search"
                               id="bookSearchInput"
                               oninput="applyBookFilters()"
                               placeholder="Cari judul buku, nama dosen, atau ISBN..."
                               class="w-full pl-9 pr-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition">
                    </div>

                    <div class="md:col-span-4">
                        <select id="bookAuthorFilter"
                                onchange="applyBookFilters()"
                                aria-label="Filter berdasarkan dosen penulis"
                                class="w-full px-3.5 py-2.5 text-xs sm:text-sm rounded-xl border border-slate-200 bg-slate-50/70 focus:bg-white focus:border-[#0070BA] focus:ring-2 focus:ring-blue-100 outline-none transition text-slate-700 font-medium">
                            <option value="all">Semua Dosen Penulis ({{ $totalBooks }})</option>
                            @foreach($authorCounts as $authorName => $authorTotal)
                                <option value="{{ $authorName }}">{{ $authorName }} ({{ $authorTotal }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="md:col-span-3 flex items-center justify-start md:justify-end text-xs text-slate-500">
                        <span>Menampilkan <strong id="visibleBookCount" class="text-[#0B2A4A]">{{ $totalBooks }}</strong> dari {{ $totalBooks }} buku</span>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-slate-100" role="tablist" aria-label="Filter kategori buku">
                    <button type="button" data-cat="all" onclick="setBookCategory('all', this)" class="book-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-[#0B2A4A] text-white transition">
                        Semua ({{ $totalBooks }})
                    </button>
                    <button type="button" data-cat="non-fiksi" onclick="setBookCategory('non-fiksi', this)" class="book-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                        Buku Ajar &amp; Non-Fiksi ({{ $nonFiksiCount }})
                    </button>
                    <button type="button" data-cat="fiksi" onclick="setBookCategory('fiksi', this)" class="book-filter-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                        Fiksi / Sastra ({{ $fiksiCount }})
                    </button>
                </div>
            </div>

            {{-- Grid Katalog Buku --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="book-catalog-grid">
                @foreach($books as $index => $book)
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
                             data-author="{{ $book['penulis'] }}"
                             data-search="{{ strtolower($book['judul'] . ' ' . $book['penulis'] . ' ' . $book['isbn']) }}"
                             class="book-card bg-white rounded-2xl border border-slate-200/90 {{ $hoverBorder }} p-4 sm:p-5 shadow-xs hover:shadow-md transition-all duration-200 flex items-start gap-4 group">
                        @if($book['cover'])
                            <div class="shrink-0 w-20 sm:w-24 aspect-[3/4] rounded-xl overflow-hidden border border-slate-200 bg-slate-100 shadow-xs">
                                <img src="{{ asset('images/buku/' . $book['cover']) }}"
                                     alt="{{ $book['judul'] }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="shrink-0 w-20 sm:w-24 aspect-[3/4] rounded-xl overflow-hidden border border-blue-950/20 bg-gradient-to-br from-[#0B2A4A] to-[#133E6C] text-white p-2.5 flex flex-col justify-between shadow-xs">
                                <span class="text-[9px] font-bold uppercase tracking-wider text-amber-400">{{ $book['label'] }}</span>
                                <i class="fa-solid fa-book text-lg text-white/30 self-center"></i>
                                <span class="text-[9px] font-semibold leading-tight text-slate-200 line-clamp-2">{{ $book['judul'] }}</span>
                            </div>
                        @endif

                        <div class="flex-1 min-w-0 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center gap-2 mb-2 flex-wrap">
                                    <span class="book-number w-5 h-5 rounded-md font-bold text-[10px] flex items-center justify-center border {{ $numClasses }}">
                                        {{ $index + 1 }}
                                    </span>
                                    <span class="font-semibold text-[10px] px-2.5 py-0.5 rounded-full border {{ $badgeClasses }}">
                                        {{ $book['label'] }}
                                    </span>
                                    @if($book['tahun'])
                                        <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded-full">
                                            {{ $book['tahun'] }}
                                        </span>
                                    @endif
                                </div>

                                <h3 class="text-sm sm:text-[15px] font-bold text-slate-900 leading-snug group-hover:text-[#0B2A4A] transition-colors">
                                    {{ $book['judul'] }}
                                </h3>
                            </div>

                            <div class="mt-3 pt-2.5 border-t border-slate-100 space-y-1.5">
                                <p class="text-xs text-slate-700 font-medium flex items-center gap-1.5">
                                    <i class="fa-solid fa-user-pen text-[10px] text-[#0070BA] shrink-0"></i>
                                    <span>Karya:
                                        @if($book['penulis_url'])
                                            <a href="{{ $book['penulis_url'] }}" class="font-bold text-[#0B2A4A] hover:text-[#0070BA] hover:underline">{{ $book['penulis'] }}</a>
                                        @else
                                            <span class="font-bold text-[#0B2A4A]">{{ $book['penulis'] }}</span>
                                        @endif
                                    </span>
                                </p>
                                <span class="inline-block text-slate-500 font-mono text-[11px] bg-slate-50 px-2.5 py-0.5 rounded-md border border-slate-200/80">
                                    ISBN: {{ $book['isbn'] }}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div id="bookEmptyState" class="hidden bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500 text-sm">
                <i class="fa-solid fa-book-open text-2xl text-slate-300 mb-2 block"></i>
                Tidak ada karya buku yang cocok dengan filter atau pencarian tersebut.
            </div>

        </div>
    </section>

    <script>
        let activeBookCategory = 'all';

        function setBookCategory(category, btn) {
            activeBookCategory = category;
            document.querySelectorAll('.book-filter-btn').forEach(function (el) {
                el.classList.remove('bg-[#0B2A4A]', 'text-white');
                el.classList.add('bg-slate-100', 'text-slate-700');
            });
            btn.classList.remove('bg-slate-100', 'text-slate-700');
            btn.classList.add('bg-[#0B2A4A]', 'text-white');
            applyBookFilters();
        }

        function applyBookFilters() {
            const author = document.getElementById('bookAuthorFilter').value;
            const query = document.getElementById('bookSearchInput').value.trim().toLowerCase();
            let visibleCount = 0;

            document.querySelectorAll('.book-card').forEach(function (card) {
                const matchCat = activeBookCategory === 'all' || card.dataset.category === activeBookCategory;
                const matchAuthor = author === 'all' || card.dataset.author === author;
                const matchQuery = query === '' || card.dataset.search.includes(query);
                const visible = matchCat && matchAuthor && matchQuery;

                card.style.display = visible ? '' : 'none';
                if (visible) {
                    visibleCount++;
                    card.querySelector('.book-number').textContent = visibleCount;
                }
            });

            document.getElementById('visibleBookCount').textContent = visibleCount;
            document.getElementById('bookEmptyState').classList.toggle('hidden', visibleCount > 0);
        }
    </script>
@endsection

