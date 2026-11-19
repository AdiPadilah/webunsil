@extends('layouts.app')

@section('title', 'Seminar Nasional SCIENCE 2026 HMS UNSIL Jalan Tol Berkelanjutan | Teknik Sipil UNSIL')
@section('meta_description', 'Himpunan Mahasiswa Sipil Fakultas Teknik UNSIL menggelar Seminar Nasional SCIENCE 2026 bertema strategi pembangunan jalan tol berkelanjutan bersama PT Adhi Karya.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Seminar Nasional SCIENCE 2026 Jalan Tol</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1 bg-[#0070BA] text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-road text-[9px]"></i> Transportasi &amp; Jalan
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 20 Oktober 2026
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Auditorium Rektorat UNSIL
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Seminar Nasional SCIENCE 2026 Himpunan Mahasiswa Sipil UNSIL Angkat Strategi Pembangunan Jalan Tol Berkelanjutan
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2026/10/20/seminar-nasional-science-2026-himpunan-mahasiswa-sipil-unsil-angkat-strategi-pembangunan-jalan-tol-berkelanjutan/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-seminar-jalan-tol.jpeg') }}" alt="Seminar Nasional SCIENCE 2026 HMS UNSIL Jalan Tol" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Foto bersama pimpinan Fakultas Teknik, pimpinan Program Studi Teknik Sipil, narasumber PT Adhi Karya (Persero) Tbk., serta pengurus HMS UNSIL dan peserta Seminar Nasional SCIENCE 2026 di Auditorium Rektorat UNSIL.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi menggelar Seminar Nasional bertajuk <em>“Managing the Future for a Greater Indonesia”</em> pada Selasa, 20 Oktober 2026, di Auditorium Rektorat Universitas Siliwangi. Kegiatan yang merupakan bagian dari SCIENCE (Siliwangi Civil Engineering Creativity) ini mengangkat tema <strong>“Sustainable Strategies for Toll Road Construction and Planning”</strong>.
                        </p>

                        <p>
                            Seminar tersebut dipimpin oleh Ketua Pelaksana Restu Ramadan dan Ketua Himpunan Mahasiswa Sipil Muhammad Naufal Alwan. Kegiatan ini dihadiri oleh Wakil Dekan I Bidang Akademik dan Kemahasiswaan Dr. Ir. Yusep Ramdani, S.T. M.T. turut hadir Ketua Program Studi Teknik Sipil Andhy Romdani, Ph.D., jajaran dosen Teknik Sipil, perwakilan Badan Legislatif Mahasiswa (BLM), Badan Eksekutif Mahasiswa (BEM), para ketua himpunan mahasiswa jurusan, panitia, serta peserta seminar.
                        </p>

                        <div class="p-5 bg-blue-50 border-l-4 border-[#0070BA] rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-blue-950 italic">
                                "Seminar nasional menjadi wadah penting bagi mahasiswa untuk memperluas wawasan, mengembangkan pola pikir kritis, serta memahami perkembangan ilmu pengetahuan dan praktik di bidang teknik sipil. Sinergi antara himpunan dan program studi perlu terus diperkuat melalui komunikasi dan kolaborasi berkelanjutan agar dapat menghadirkan program berkualitas serta mendukung kemajuan Teknik Sipil Universitas Siliwangi."
                            </p>
                            <span class="text-xs text-blue-800 font-bold block mt-2">&mdash; Andhy Romdani, Ph.D. (Ketua Program Studi Teknik Sipil FT UNSIL)</span>
                        </div>

                        <p>
                            Sementara itu, Wakil Dekan I Bidang Akademik dan Kemahasiswaan Fakultas Teknik, Dr. Ir. Yusep Ramdani, S.T., M.T., IPM., ASEAN Eng., yang hadir mewakili Dekan Fakultas Teknik, turut mengapresiasi penyelenggaraan seminar nasional ini. Ia menilai SCIENCE 2026 menjadi kesempatan bagi mahasiswa untuk memperoleh pengalaman belajar di luar ruang kelas, terutama melalui interaksi langsung dengan praktisi yang memiliki pengalaman di dunia industri dan lapangan.
                        </p>

                        <p>
                            Dalam seminar tersebut, narasumber <strong>Ir. Darmawan Adi Susanto, S.T., M.T., IPU, ASEAN Eng.</strong>, dari Departemen Infrastruktur II PT Adhi Karya (Persero) Tbk., menekankan pentingnya keterampilan nonteknis (soft skills) bagi mahasiswa sebagai bekal memasuki dunia kerja. Menurutnya, penguasaan kemampuan teknis perlu diimbangi dengan kemampuan berkomunikasi, bekerja sama, dan beradaptasi agar mahasiswa mampu berkembang serta menghadapi persaingan profesional.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Pengumuman Pemenang National Bridge Design Competition</h3>
                        <p>
                            Pada seminar ini juga, diumumkan pemenang lomba <em>National Bridge Design Competition</em> yang diikuti peserta dari berbagai perguruan tinggi di Indonesia:
                        </p>
                        <ul class="list-disc pl-5 space-y-1 text-sm text-slate-700">
                            <li><strong>Juara 1:</strong> Tim Joetata &mdash; Universitas Diponegoro (Undip)</li>
                            <li><strong>Juara 2:</strong> Tim Eljatar Closingan &mdash; Universitas Tidar (Untidar)</li>
                            <li><strong>Juara 3:</strong> Tim Circle Zenith &mdash; Universitas Diponegoro (Undip)</li>
                        </ul>

                        <p>
                            Melalui rangkaian kegiatan tersebut, SCIENCE 2026 diharapkan dapat menjadi ruang bagi mahasiswa teknik sipil untuk memperluas wawasan, mengembangkan kompetensi, serta mendorong lahirnya karya dan prestasi yang berkontribusi bagi kemajuan pembangunan infrastruktur di Indonesia.
                        </p>
                    </div>

                    <div class="mt-10 pt-6 border-t border-slate-200 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-blue-700 hover:text-blue-900 transition">
                            <i class="fa-solid fa-arrow-left"></i> Kembali ke Berita Lainnya
                        </a>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <span>Bagikan:</span>
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center hover:bg-emerald-200 transition" title="WhatsApp">
                                <i class="fa-brands fa-whatsapp text-sm"></i>
                            </a>
                        </div>
                    </div>
                </article>

                
                <aside class="space-y-6">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">Selasa, 20 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Auditorium Rektorat Universitas Siliwangi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-tie text-blue-700 mt-0.5 w-4"></i>
                                <span>Narasumber: Ir. Darmawan Adi Susanto (PT Adhi Karya)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-users text-blue-700 mt-0.5 w-4"></i>
                                <span>Penyelenggara: HMS FT UNSIL &bull; SCIENCE 2026</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Portal Resmi UNSIL</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Berita ini diliput resmi oleh Humas Universitas Siliwangi dan terbit di portal unsil.ac.id.
                        </p>
                        <a href="https://unsil.ac.id/2026/10/20/seminar-nasional-science-2026-himpunan-mahasiswa-sipil-unsil-angkat-strategi-pembangunan-jalan-tol-berkelanjutan/" target="_blank" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Baca di unsil.ac.id</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
