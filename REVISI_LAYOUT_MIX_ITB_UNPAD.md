# Blueprint Revisi Layout Website Teknik Sipil FT UNSIL
## Konsep Mix Tata Letak: ITB (Editorial & Prestisius) × UNPAD (Modular & Akademik Terstruktur)

Dokumen ini adalah panduan komprehensif penataan ulang tata letak (*layout overhaul*) untuk proyek **Website Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi** (`D:\webunsil`).

> [!IMPORTANT]
> **Prinsip Utama Revisi:**
> 1. **Data 100% Utuh:** Tidak ada data, teks sambutan, kurikulum, sejarah, angka statistik, atau tautan yang dihapus.
> 2. **Warna Tetap Terkunci:** Tetap menggunakan palet khas UNSIL (`#0B2A4A`, `#0070BA`, `#F39C12`/`#E5A823`, `#F4F7FB`, `#133E6C`).
> 3. **Tipografi Tetap Terkunci:** Tetap menggunakan font `Plus Jakarta Sans` (Body) dan `Montserrat` (Heading).
> 4. **Fokus Perubahan:** Menghilangkan kesan "kaku & standar template" dengan mengadopsi struktur visual editorial ala **ITB** dan kepraktisan hierarki akademik modular ala **UNPAD**.

---

## 1. Analisis Komparasi Tata Letak

| Bagian Halaman | Layout Saat Ini (UNSIL) | Inspirasi ITB (`itb.ac.id/tentang-itb`) | Inspirasi UNPAD (`unpad.ac.id/akademik/`) | **Hasil Mix Rekomendasi untuk UNSIL** |
| :--- | :--- | :--- | :--- | :--- |
| **Hero & Header** | Standar banner teks kiri penuh, linear. | Split visual asimetris dengan *floating badge* dan narasi institusi yang elegan. | Breadcrumbs bersih dengan quick action buttons & status akreditasi. | **Hero Asimetris + Floating Metric Card** (Akreditasi & Jenjang Studi) + Quick Action Pills. |
| **Profil & Sambutan** | Grid 50:50 standar, foto di kiri, teks panjang di kanan. | Editorial magazine split (asimetris 4:8), pull-quote besar berbobot, tanda kutip dekoratif, tanda tangan pimpinan. | Kartu pimpinan berbingkai rapi dengan badge jabatan resmi dan tombol navigasi profil cepat. | **ITB Editorial Split:** Foto berbingkai arsitektural di kiri, kutipan besar inspiratif di kanan dengan blok sambutan yang mudah di-skim. |
| **Statistik / Angka Kunci** | Baris teks horizontal sederhana (`flex justify-between`), teks kecil monoton. | Stat Counter Cards dengan aksen garis atas tebal (*top border highlight*) dan label kontras. | Metric card dengan ikon ilustratif dan latar kontras ringan. | **Modular Bento Stat Grid:** 4-6 kartu stat dengan border aksen emas/biru, angka tebal besar, dan ikon pendukung. |
| **Pilar / Bidang Keahlian** | Card 3 kolom standar simetris. | **Bento Grid** dinamis (1 card besar fitur utama + 2 card medium + 1 card ringkasan). | Card modular dengan hover lift animation (`-translate-y-1`), tag chip kategori. | **Asymmetric Bento Grid (4 Pilar Rekayasa Sipil):** Struktur, Geoteknik, Transportasi, dan Manajemen Sumber Daya Air. |
| **Akademik & Kurikulum** | Grid 2 kolom standar + sidebar pengumuman biasa. | Sub-navigation sticky (jump links) antar sub-bagian. | **Tab Segmented Filter** (Kurikulum, Pedoman, Kalender, Layanan) + Card ber-chip SKS/Gelar. | **UNPAD Filterable Card Grid** + Timeline alur tahapan akademik (KP $\rightarrow$ Sempro $\rightarrow$ Sidang). |
| **Alur & Layanan** | Teks paragraf / link list standar. | Milestone storytelling vertikal. | **Numbered Step Badge (`01 -> 02 -> 03`)** dengan garis penghubung horizontal responsif. | **Connected Process Flow:** Alur pengurusan skripsi & KP dengan 4 langkah visual yang intuitif. |

---

## 2. Blueprint Layout: Halaman Beranda (`home.blade.php`)

### A. Struktur Baru Hero Section
**Masalah Sebelumnya:** Teks bertumpuk dalam satu kolom besar dengan background gelap standar.
**Solusi Mix:**
* Sisi Kiri (60%): Headline `Montserrat` berbobot tebal, sub-headline, narasi singkat, dan 2 tombol aksi (CTA) bergaya UNPAD (*Jelajahi Kurikulum* & *Profil Program Studi*).
* Sisi Kanan (40%): **Floating Glassmorphic Highlights Card** (gaya ITB) yang memuat status akreditasi resmi **LAM Teknik**, jenjang **S-1**, dan lokasi kampus **Mugarsari**.

```html
<!-- Wireframe Markup Hero Mix -->
<section class="hero-banner relative min-h-[600px] flex items-center py-20 lg:py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Kiri: Headline & Quick CTA (65%) -->
            <div class="lg:col-span-8 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-900/60 border border-amber-400/40 text-amber-300 text-xs font-semibold backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Program Studi Terakreditasi LAM Teknik
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-heading tracking-tight leading-tight">
                    Program Studi <br><span class="text-amber-400">Teknik Sipil</span>
                </h1>
                <p class="text-xl sm:text-2xl text-slate-100 font-bold">
                    Fakultas Teknik Universitas Siliwangi
                </p>
                <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-2xl">
                    Mengembangkan ilmu pengetahuan, teknologi, dan inovasi untuk menjawab tantangan di bidang infrastruktur, teknologi, dan lingkungan yang tangguh, cerdas, dan berkelanjutan.
                </p>
                <!-- Quick Action Buttons (Gaya Unpad) -->
                <div class="pt-2 flex flex-wrap gap-3">
                    <a href="{{ route('akademik') }}" class="px-5 py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-sm font-semibold rounded-lg shadow-md hover:shadow-lg transition flex items-center gap-2">
                        <span>Pusat Akademik</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="{{ route('tentang-kami') }}" class="px-5 py-2.5 bg-slate-900/70 hover:bg-slate-900 text-slate-200 hover:text-white border border-slate-700 text-sm font-semibold rounded-lg backdrop-blur-sm transition">
                        Profil &amp; Sambutan
                    </a>
                </div>
            </div>

            <!-- Kanan: Floating Stat Card (Gaya ITB) (35%) -->
            <div class="lg:col-span-4 hidden lg:block">
                <div class="bg-gradient-to-br from-[#0B2A4A]/90 to-slate-900/90 border border-slate-700/60 rounded-2xl p-6 backdrop-blur-md shadow-2xl space-y-4">
                    <div class="border-b border-slate-700 pb-3">
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">Identitas Akademik</span>
                        <h3 class="text-lg font-bold text-white font-heading mt-0.5">S-1 Teknik Sipil FT UNSIL</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-3 pt-1">
                        <div class="p-3 rounded-lg bg-slate-800/50 border border-slate-700/50">
                            <span class="text-xs text-slate-400 block">Jenjang</span>
                            <span class="text-sm font-bold text-white">Sarjana (S-1)</span>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-800/50 border border-slate-700/50">
                            <span class="text-xs text-slate-400 block">Gelar</span>
                            <span class="text-sm font-bold text-white">S.T. (Sipil)</span>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-800/50 border border-slate-700/50">
                            <span class="text-xs text-slate-400 block">Akreditasi</span>
                            <span class="text-sm font-bold text-amber-400">BAIK (LAM Teknik)</span>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-800/50 border border-slate-700/50">
                            <span class="text-xs text-slate-400 block">Kampus</span>
                            <span class="text-sm font-bold text-white">Kampus 2 Mugarsari</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
```

---

### B. Sejarah & Sambutan Singkat: Editorial Split (Inspirasi ITB)
**Masalah Sebelumnya:** Foto kotak biasa bersebelahan dengan teks panjang standar.
**Solusi Mix:**
* Gunakan gaya layout **editorial majalah**: Foto dengan sudut arsitektural (*accent border/shadow*).
* Tambahkan **Pull-Quote** (kutipan berukuran besar) dengan tanda kutip raksasa warna emas/biru transparan sebagai *visual anchor*.
* Teks disusun dalam dua kolom pendek bertahap atau disertai *milestone bullet tags*.

```html
<!-- Wireframe Sejarah Singkat (Gaya Editorial ITB) -->
<section class="py-16 lg:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Foto dengan Frame Artistik & Badge Sejarah (5 Kolom) -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border-4 border-slate-100 group">
                    <img src="{{ asset('images/sejarah-singkat-beranda.jpg') }}" alt="Sejarah Teknik Sipil UNSIL" class="w-full h-[400px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2A4A]/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white p-3 rounded-xl bg-[#0B2A4A]/80 backdrop-blur-md border border-slate-700/50">
                        <span class="text-xs font-bold text-amber-400 block">Didirikan Sejak 1980-an</span>
                        <p class="text-xs text-slate-200 mt-0.5">Program studi rekayasa pertama di lingkungan Fakultas Teknik UNSIL.</p>
                    </div>
                </div>
                <!-- Dekorasi Aksen Emas di Sudut (Gaya ITB) -->
                <div class="absolute -top-3 -left-3 w-16 h-16 border-t-4 border-l-4 border-amber-400 rounded-tl-xl pointer-events-none"></div>
            </div>

            <!-- Teks Editorial dengan Pull-Quote (7 Kolom) -->
            <div class="lg:col-span-7 space-y-5">
                <div class="flex items-center gap-2">
                    <span class="h-0.5 w-8 bg-[#0070BA]"></span>
                    <span class="text-[#0070BA] font-bold text-xs uppercase tracking-wider">Perjalanan &amp; Kiprah</span>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#0B2A4A] font-heading leading-tight">
                    Empat Dekade Membangun Infrastruktur dan Peradaban Bangsa
                </h2>

                <!-- Pull Quote Besar (Ciri Khas ITB Editorial) -->
                <blockquote class="pl-4 border-l-4 border-amber-400 italic text-slate-700 text-base sm:text-lg font-medium leading-relaxed bg-amber-50/50 py-2 rounded-r-lg">
                    "Berkomitmen menyelenggarakan pendidikan tinggi keteknikan yang unggul berbasis Outcome-Based Education (OBE) dan berjiwa wirausaha kebangsaan."
                </blockquote>

                <div class="text-slate-600 text-sm leading-relaxed space-y-3">
                    <p>
                        Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi merupakan tonggak awal pendidikan keteknikan di Priangan Timur. Kini bertransformasi menjadi Perguruan Tinggi Negeri terdepan dan terus mencetak lulusan kompeten di sektor konstruksi nasional maupun internasional.
                    </p>
                    <p>
                        Berpusat di Kampus 2 Mugarsari dengan fasilitas laboratorium terintegrasi, kami membekali mahasiswa dengan penguasaan analisis rekayasa, teknologi BIM (*Building Information Modelling*), dan kesadaran lingkungan berkelanjutan.
                    </p>
                </div>

                <div class="pt-2 flex items-center gap-4">
                    <a href="{{ route('sejarah') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#0070BA] hover:bg-[#005a96] text-white text-sm font-semibold rounded-lg shadow transition">
                        <span>Baca Sejarah Selengkapnya</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="{{ route('visi-misi') }}" class="text-xs font-bold text-[#0B2A4A] hover:text-[#0070BA] underline transition">
                        Visi &amp; Misi Prodi
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
```

---

### C. Statistik Kunci: Bento Grid Cards (Inspirasi ITB Key Figures)
**Masalah Sebelumnya:** Angka dan label tersusun rata dalam satu garis gelap tanpa pembatas visual.
**Solusi Mix:**
* Buat kartu-kartu metrik independen berbingkai halus dengan garis atas emas/biru (*card with top accent border*).
* Setiap kartu memiliki ikon tematik, angka tebal mencolok, dan label yang jelas.

```html
<!-- Wireframe Statistik Bento Grid -->
<section class="py-12 bg-[#0B2A4A] text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            
            <!-- Item 1: Laboratorium -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-amber-400 rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-flask-vial text-amber-400 text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">6+</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Laboratorium Terpadu</span>
            </div>

            <!-- Item 2: Dosen Tetap -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-[#0070BA] rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-user-tie text-[#0070BA] text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">20+</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Dosen Berkualifikasi</span>
            </div>

            <!-- Item 3: Bidang Keahlian -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-amber-400 rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-compass-drafting text-amber-400 text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">5</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Kelompok Keahlian</span>
            </div>

            <!-- Item 4: Mahasiswa Aktif -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-[#0070BA] rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-user-graduate text-[#0070BA] text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">600+</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Mahasiswa Aktif</span>
            </div>

            <!-- Item 5: Alumni -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-amber-400 rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-users-gear text-amber-400 text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">2.500+</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Alumni Tersebar</span>
            </div>

            <!-- Item 6: Tahun Berdiri -->
            <div class="bg-slate-900/60 border border-slate-700/60 border-t-2 border-t-amber-400 rounded-xl p-4 text-center hover:bg-slate-800/80 transition group">
                <i class="fa-solid fa-landmark text-amber-400 text-xl mb-1.5 block group-hover:scale-110 transition"></i>
                <span class="block text-2xl lg:text-3xl font-extrabold font-heading text-white">1982</span>
                <span class="block text-xs text-slate-300 font-medium mt-0.5">Tahun Berdiri</span>
            </div>

        </div>
    </div>
</section>
```

---

### D. Pilar Keunggulan & Bidang Rekayasa: Asymmetrical Bento Grid (ITB × UNPAD)
**Masalah Sebelumnya:** Tiga kartu kotak simetris sederhana di kolom kiri dan sidebar rapat di kanan.
**Solusi Mix:**
* Ubah menjadi format **Bento Grid Modern**:
  * 1 Kotak Unggulan Besar (Struktur & Konstruksi Tahan Gempa)
  * 2 Kotak Menengah (Geoteknik & Transportasi Cerdas)
  * 1 Kotak Panjang Horizontal (Manajemen Sumber Daya Air & Lingkungan)
* Dilengkapi chip tag kategori khas UNPAD (contoh: `[Laboratorium Uji]`, `[BIM Ready]`, `[OBE Based]`).

---

## 3. Blueprint Layout: Halaman Akademik (`akademik.blade.php`)

Halaman `akademik.blade.php` adalah area di mana inspirasi **UNPAD** paling kuat diterapkan.

### A. Sub-Navigation / Quick Jump Bar (Inspirasi ITB & UNPAD)
Tepat di bawah Hero Header, tambahkan bar navigasi pil (*pill sticky bar*) untuk melompat langsung ke bagian yang diinginkan:
1. `Kurikulum & SKS`
2. `Alur Tugas Akhir & KP`
3. `Kalender Akademik`
4. `Layanan & Unduhan`

```html
<!-- Sub-Navigation Pills -->
<div class="bg-white border-b border-slate-200 sticky top-16 z-30 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 overflow-x-auto no-scrollbar py-3 text-xs font-semibold">
            <a href="#kurikulum" class="px-4 py-2 rounded-full bg-[#0B2A4A] text-white whitespace-nowrap">
                Kurikulum OBE
            </a>
            <a href="#alur-studi" class="px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 whitespace-nowrap transition">
                Alur KP &amp; Skripsi
            </a>
            <a href="#kelompok-keahlian" class="px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 whitespace-nowrap transition">
                Kelompok Bidang Keahlian
            </a>
            <a href="#layanan-unduhan" class="px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 whitespace-nowrap transition">
                Layanan &amp; Unduhan Berkas
            </a>
        </div>
    </div>
</div>
```

---

### B. Alur Tahapan Akademik: Connected Step Badge (Inspirasi UNPAD)
**Masalah Sebelumnya:** Tautan pengurusan skripsi & seminar hasil hanya berupa link biasa di dalam menu atau card kecil.
**Solusi UNPAD:** Tampilkan dalam bentuk **Flowchart 4 Langkah** yang jelas:
1. `01. Bimbingan & Proposal` $\rightarrow$
2. `02. Kerja Praktik (KP)` $\rightarrow$
3. `03. Seminar Hasil` $\rightarrow$
4. `04. Sidang Skripsi & Yudisium`

```html
<!-- Wireframe Connected Step Timeline (Gaya UNPAD) -->
<section id="alur-studi" class="py-14 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold text-[#0070BA] uppercase tracking-wider block mb-1">Panduan Jalur Kelulusan</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0B2A4A] font-heading">
                Alur Penyelesaian Studi &amp; Tugas Akhir
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-2">
                Tahapan terstruktur bagi mahasiswa S-1 Teknik Sipil FT UNSIL dalam menyelesaikan kewajiban akademik akhir.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
            
            <!-- Step 1 -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 relative hover:shadow-md transition">
                <span class="text-xs font-black text-amber-500 bg-amber-100 px-2.5 py-1 rounded-md mb-3 inline-block">TAHAP 01</span>
                <h3 class="text-base font-bold text-[#0B2A4A] mb-1.5">Pengajuan Judul &amp; Sempro</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Pengajuan topik riset ke Koordinator KBK, penentuan dosen pembimbing, dan pelaksanaan Seminar Proposal.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-200">
                    <a href="{{ route('seminar-proposal') }}" class="text-xs font-bold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Detail Prosedur</span>
                        <i class="fa-solid fa-angle-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 relative hover:shadow-md transition">
                <span class="text-xs font-black text-blue-600 bg-blue-100 px-2.5 py-1 rounded-md mb-3 inline-block">TAHAP 02</span>
                <h3 class="text-base font-bold text-[#0B2A4A] mb-1.5">Kerja Praktik (KP)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Terjun langsung ke proyek konstruksi lapangan selama minimal 2 bulan dan penyusunan laporan proyek.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-200">
                    <a href="{{ route('alur-pengurusan-kp-skripsi') }}" class="text-xs font-bold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Panduan KP</span>
                        <i class="fa-solid fa-angle-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 relative hover:shadow-md transition">
                <span class="text-xs font-black text-amber-500 bg-amber-100 px-2.5 py-1 rounded-md mb-3 inline-block">TAHAP 03</span>
                <h3 class="text-base font-bold text-[#0B2A4A] mb-1.5">Seminar Hasil Riset</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Pemaparan hasil pengujian laboratorium atau simulasi numerik di hadapan dosen penguji dan audiens.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-200">
                    <a href="{{ route('seminar-hasil') }}" class="text-xs font-bold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Syarat Semhas</span>
                        <i class="fa-solid fa-angle-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 relative hover:shadow-md transition">
                <span class="text-xs font-black text-emerald-600 bg-emerald-100 px-2.5 py-1 rounded-md mb-3 inline-block">TAHAP 04</span>
                <h3 class="text-base font-bold text-[#0B2A4A] mb-1.5">Sidang Skripsi &amp; Yudisium</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Ujian komprehensif akhir untuk mempertahankan skripsi guna memperoleh gelar Sarjana Teknik (S.T.).
                </p>
                <div class="mt-4 pt-3 border-t border-slate-200">
                    <a href="{{ route('sidang-akhir') }}" class="text-xs font-bold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Jadwal Sidang</span>
                        <i class="fa-solid fa-angle-right text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
```

---

### C. Kurikulum & Informasi Akademik: Card Grid Interaktif (Inspirasi UNPAD)
**Pembaruan Visual:**
* Card kurikulum dilengkapi dengan **Badge Chip**: `[144 SKS]`, `[8 Semester]`, `[Gelar: S.T.]`, `[Akreditasi: BAIK]`.
* Efek *hover micro-interaction*: Card sedikit terangkat (`hover:-translate-y-1 hover:shadow-lg transition-all duration-300`).
* Sidebar Pengumuman dibuat **Sticky** (`sticky top-24`) agar saat pengguna menggulir halaman panjang ke bawah, informasi pengumuman tetap terlihat.

---

## 4. Blueprint Layout: Halaman Tentang Kami (`tentang-kami.blade.php`)

### A. Sambutan Pimpinan (Executive Editorial Layout - ITB)
1. **Foto Pimpinan (Andhy Romdani, S.T., M.Eng., Ph.D.):**
   * Format foto tegak (*portrait 4:5*) dengan frame sudut melengkung dan *badge* institusi resmi.
2. **Kutipan Besar:**
   * Di atas sambutan terdapat *Key Statement* dengan ukuran font 24px yang merangkum arah prodi.
3. **Blok Sambutan 2 Kolom:**
   * Teks sambutan dipecah menjadi paragraf yang memiliki jarak pembacaan nyaman (*line-height 1.7*), diakhiri tanda tangan digital atau nama pimpinan dengan stempel resmi.

### B. Visi, Misi, & Nilai Dasar (Bento Card Layout)
* **Visi:** Kartu berlatar Navy gelap (`#0B2A4A`) dengan teks putih dan aksen emas.
* **Misi:** Tiga kartu putih modular bernomor `01`, `02`, `03` dengan ikon pendukung.

---

## 5. Rencana File yang Diperbarui (File Change Plan)

| File Target | Lokasi | Perubahan Tata Letak yang Dilakukan |
| :--- | :--- | :--- |
| `app.blade.php` | `resources/views/layouts/` | Menambahkan kelas utilitas Tailwind untuk `.hover-lift`, `.badge-chip`, dan sub-navigation sticky. |
| `home.blade.php` | `resources/views/pages/` | Mengubah Hero menjadi split grid asimetris, Sejarah Singkat menjadi editorial pull-quote, dan Statistik menjadi Bento Cards. |
| `akademik.blade.php` | `resources/views/pages/` | Menambahkan Sub-Nav Sticky Pills, Timeline Alur Tahapan (4 Step Cards), dan Card Kurikulum ber-chip informasi. |
| `tentang-kami.blade.php`| `resources/views/pages/` | Merestrukturisasi Sambutan Kaprodi menjadi format executive editorial dan Visi Misi menjadi Bento Card. |

---

## 6. Jaminan Integritas Data & Kode

```
┌────────────────────────────────────────────────────────────────────────┐
│                        DATA INTEGRITY CHECKLIST                        │
├────────────────────────────────────────────────────────────────────────┤
│ [✓] Teks Sambutan Kaprodi Andhy Romdani, S.T., M.Eng., Ph.D. LENGKAP   │
│ [✓] Seluruh Teks Sejarah 1982 s.d. Sekarang LENGKAP                    │
│ [✓] Seluruh Berita & Dokumentasi Kegiatan Mahasiswa LENGKAP            │
│ [✓] Seluruh Route Laravel (web.php) TIDAK BERUBAH                      │
│ [✓] Warna Unsil (#0B2A4A, #0070BA, #F39C12, #F4F7FB) TERKUNCI          │
│ [✓] Font Plus Jakarta Sans & Montserrat TERKUNCI                       │
└────────────────────────────────────────────────────────────────────────┘
```

---

## 7. Langkah Eksekusi / Next Steps

1. **Review Rencana Ini:** Tinjau rancangan layout di atas apakah perpaduan ITB × UNPAD ini sudah sesuai dengan selera Anda.
2. **Penerapan Bertahap:**
   * **Tahap 1:** Terapkan pembaruan layout pada `home.blade.php` (Beranda).
   * **Tahap 2:** Terapkan pembaruan layout pada `akademik.blade.php` (Alur & Kurikulum).
   * **Tahap 3:** Terapkan pembaruan layout pada `tentang-kami.blade.php` (Editorial Sambutan).
3. **Verifikasi Tampilan:** Jalankan `php artisan serve` untuk memeriksa tampilan baru di browser.
