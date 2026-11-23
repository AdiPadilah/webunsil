@extends('layouts.app')

@section('title', 'Kolaborasi & Kemitraan | Program Studi S-1 Teknik Sipil Universitas Siliwangi')
@section('meta_description', 'Kemitraan strategis Program Studi S-1 Teknik Sipil FT UNSIL dengan BUMN Karya, Kementerian PUPR, asosiasi profesi PII, dan universitas internasional.')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition">
                    <i class="fa-solid fa-house text-[10px]"></i> Beranda
                </a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('riset') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Riset &amp; Kolaborasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Kolaborasi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Sinergi Industri &bull; Kemitraan Strategis
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Kolaborasi Industri &amp; Instansi
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Pengantar & Nilai Kolaborasi --}}
            <div class="max-w-3xl mb-12">
                <p class="text-xs font-bold text-[#0070BA] tracking-wide uppercase mb-1.5">
                    Sinergi Multi-Sektor
                </p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Membangun Masa Depan Melalui Kerja Sama Nyata
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
                    Program Studi S-1 Teknik Sipil FT UNSIL aktif menjalin kemitraan erat dengan pemangku kepentingan industri konstruksi, instansi pemerintah pembina infrastruktur, dan organisasi keinsinyuran guna mencetak lulusan kompeten yang adaptif terhadap standar industri global.
                </p>
            </div>

            {{-- 4 Pilar Ekosistem Kemitraan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">

                {{-- Pilar 1: BUMN Karya & Kontraktor --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-blue-100 text-[#0070BA] flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-building-flag"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Sektor Industri</span>
                                <h3 class="text-lg font-bold text-slate-900">BUMN Jasa Konstruksi &amp; Kontraktor Nasional</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Kerja sama dengan BUMN konstruksi terkemuka seperti <strong>PT Wijaya Karya (Persero) Tbk, PT PP (Persero) Tbk, PT Adhi Karya (Persero) Tbk</strong>, dan <strong>PT Hutama Karya (Persero)</strong>.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Program Magang Bersertifikat Kampus Merdeka (MBKM)</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Studi proyek langsung di lokasi konstruksi jalan tol &amp; gedung bertingkat</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Akses rekrutmen jalur prioritas alumni Teknik Sipil UNSIL</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pilar 2: Kementerian PUPR & Pemerintah Daerah --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-landmark"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Instansi Pemerintah</span>
                                <h3 class="text-lg font-bold text-slate-900">Kementerian PUPR, BBWS &amp; Dinas Teknis</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Kemitraan strategis dengan <strong>Balai Besar Wilayah Sungai (BBWS) Citanduy</strong>, <strong>Dinas Bina Marga &amp; Penataan Ruang Provinsi Jawa Barat</strong>, serta <strong>Dinas PUTR Kota/Kabupaten Tasikmalaya</strong>.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Kajian teknis pengelolaan dan pemeliharaan Bendungan Leuwikeris</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Penyusunan rekomendasi drainase dan penataan sempadan sungai</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pendampingan teknis perencanaan jalan dan jembatan daerah</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pilar 3: Asosiasi Profesi PII & HATHI --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-certificate"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Profesi Keinsinyuran</span>
                                <h3 class="text-lg font-bold text-slate-900">Persatuan Insinyur Indonesia &amp; Asosiasi Keahlian</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Sinergi bersama <strong>Persatuan Insinyur Indonesia (PII Cabang Tasikmalaya)</strong>, <strong>Himpunan Ahli Teknik Hidraulik Indonesia (HATHI)</strong>, dan <strong>Lembaga Pengembangan Jasa Konstruksi (LPJK)</strong>.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Pembinaan sertifikasi insinyur profesional (IPP &amp; IPM)</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Uji sertifikasi kompetensi kerja (SKK) konstruksi untuk lulusan</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Penyelenggaraan seminar nasional dan FGD mitigasi sedimentasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pilar 4: Kemitraan Akademik Global (Taiwan) --}}
                <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-12 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-globe"></i>
                            </span>
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Internasional</span>
                                <h3 class="text-lg font-bold text-slate-900">Kolaborasi Internasional &amp; Studi Global</h3>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                            Kerja sama dengan <strong>National Cheng Kung University (NCKU) Taiwan</strong> dalam penguatan riset ketahanan gempa dan peluang studi pascasarjana.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 bg-white p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Seminar Internasional tahunan "Bridging Futures" NCKU-UNSIL</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Fasilitasi beasiswa studi lanjut magister (S-2) &amp; doktor (S-3) di Taiwan</span>
                            </div>
                            <div class="flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-check text-emerald-600 text-[11px]"></i>
                                <span>Kolaborasi publikasi ilmiah dan penelitian rekayasa gempa</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Dokumentasi Kegiatan Kolaborasi Terkini --}}
            <div class="pt-10 border-t border-slate-200">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 font-heading">
                            Dokumentasi Implementasi Kerja Sama
                        </h3>
                        <p class="text-slate-500 text-xs sm:text-sm mt-0.5">
                            Bukti konkret kegiatan bersama mitra di lapangan dan forum ilmiah:
                        </p>
                    </div>
                    <a href="{{ route('berita.index') }}" class="text-xs font-semibold text-[#0070BA] hover:underline flex items-center gap-1">
                        <span>Warta Lengkap</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="h-44 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Leuwikeris" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <span class="text-[10px] font-bold text-[#0070BA] uppercase tracking-wide block mb-1">Studi Lapangan</span>
                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">Kunjungan Ilmiah Proyek Bendungan Leuwikeris BBWS Citanduy</h4>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="h-44 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/seminar-taiwan-ncku.jpg') }}" alt="Seminar Taiwan" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <span class="text-[10px] font-bold text-[#0070BA] uppercase tracking-wide block mb-1">Kemitraan Luar Negeri</span>
                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">Seminar Internasional Bridging Futures Bersama NCKU Taiwan</h4>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="h-44 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar HATHI" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <span class="text-[10px] font-bold text-[#0070BA] uppercase tracking-wide block mb-1">Asosiasi Profesi</span>
                            <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">Seminar Nasional &amp; FGD Sedimentasi Bersama HATHI</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
