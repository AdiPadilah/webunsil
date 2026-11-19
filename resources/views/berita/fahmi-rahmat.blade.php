@extends('layouts.app')

@section('title', 'Fahmi Rahmat Amanulloh: Mahasiswa Ajaib Teknik Sipil UNSIL Tembus Scopus | Teknik Sipil UNSIL')
@section('meta_description', 'Fahmi Rahmat Amanulloh mahasiswa semester 7 Teknik Sipil UNSIL pecahkan rekor tembus 3 jurnal internasional bereputasi Scopus dan 2 jurnal nasional.')

@section('content')
    <!-- Breadcrumb Header -->
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Fahmi Rahmat Amanulloh Tembus Scopus Q1</span>
        </div>
    </div>

    <!-- Article -->
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- Konten Utama -->
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1 bg-emerald-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-award text-[9px]"></i> Prestasi &amp; Riset Internasional
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 23 Oktober 2025
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-book-bookmark text-[9px]"></i> Scopus Q1 &amp; SINTA
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            “Mahasiswa Ajaib” dari UNSIL: Fahmi Rahmat Amanulloh Pecahkan Rekor Tembus 3 Jurnal Internasional dan 2 Nasional di Semester 7
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2025/10/23/mahasiswa-ajaib-dari-unsil-fahmi-rahmat-amanulloh-pecahkan-rekor-tembus-3-jurnal-internasional-dan-2-nasional-di-semester-7/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-fahmi-rahmat.jpeg') }}" alt="Fahmi Rahmat Amanulloh Mahasiswa Teknik Sipil UNSIL" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Fahmi Rahmat Amanulloh, mahasiswa semester 7 Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi peraih rekor publikasi jurnal internasional bereputasi Scopus Q1.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Di usia akademiknya yang masih muda, Fahmi Rahmat Amanulloh, mahasiswa semester 7 pada Program Studi Teknik Sipil Universitas Siliwangi, menorehkan sejarah luar biasa. Julukan <strong>“Mahasiswa Ajaib Unsil”</strong> kini melekat padanya setelah berhasil mempublikasikan lima karya ilmiah sekaligus sebelum lulus &mdash; tiga di jurnal internasional bereputasi Scopus dan dua di jurnal nasional. Prestasi ini menempatkannya sebagai salah satu mahasiswa paling produktif dalam bidang penelitian di tingkat universitas.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Daftar Publikasi Jurnal Internasional Scopus:</h3>
                        <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700">
                            <li>
                                <strong>Journal of Natural Hazards Research (Scopus Q1, Elsevier - 21 Oktober 2025):</strong><br>
                                <em>“Does ENSO-driven Climate Variability Increase Coastal Flooding? Insights from the Brebes Coastal Area, Indonesia”</em>
                            </li>
                            <li>
                                <strong>Journal of Water and Climate Change (Scopus Q2, IWA Publishing, United Kingdom - Juli 2024):</strong><br>
                                <em>“Morpho-hydrodynamic Processes Impacted by the 2022-extreme La Niña Event and High River Discharge Conditions in the Southern Coastal Area of West Java, Indonesia”</em>
                            </li>
                            <li>
                                <strong>Journal of the Civil Engineering Forum (Scopus Q4, Universitas Gadjah Mada - Mei 2025):</strong><br>
                                <em>“The Effectiveness of Groin Modifications to Reduce the Impacts of Indian Ocean Dipole (IOD)-induced Port Siltation in Adapting to Climate Change”</em>
                            </li>
                        </ul>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Publikasi Nasional Terindeks SINTA:</h3>
                        <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700">
                            <li>
                                <strong>Journal of Medica Hospitalia (Sinta 3, Kemenkes RS. Kariadi Semarang - Juli 2025):</strong><br>
                                <em>“Spatial and Temporal Analysis of Gallbladder Stone Cases at dr. Soekardjo Hospital, West Java”</em>
                            </li>
                            <li>
                                <strong>Journal of Omni-Akuatika (Sinta 2, Universitas Jenderal Soedirman - November 2025):</strong><br>
                                <em>“Exploring Coastal Green Infrastructure (CGI) to Mitigate Climate Change-Related Disasters in West Java’s Southern Coast, Indonesia”</em>
                            </li>
                        </ul>

                        <div class="p-5 bg-emerald-50 border-l-4 border-emerald-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-emerald-950 italic">
                                "Prestasi Fahmi adalah bukti nyata bahwa mahasiswa Universitas Siliwangi mampu bersaing di kancah global. Ia menjadi teladan bagi mahasiswa lain tentang bagaimana penelitian yang dilakukan dengan kesungguhan dapat menghasilkan karya ilmiah yang berdampak luas."
                            </p>
                            <span class="text-xs text-emerald-800 font-bold block mt-2">&mdash; Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen Pembimbing &amp; Ketua Prodi Teknik Sipil FT UNSIL)</span>
                        </div>

                        <p>
                            Dalam wawancara singkatnya, Fahmi menyampaikan bahwa keberhasilannya tidak lepas dari bimbingan intensif dan suportif. <em>“Saya berusaha konsisten dan fokus. Semua ini tidak lepas dari bimbingan pak Andhy yang memberi ruang besar untuk ide-ide saya. Beliau dengan sabar membimbing saya dan membuka wawasan kepada saya jika riset itu menyenangkan,”</em> tuturnya dengan rendah hati.
                        </p>

                        <p>
                            Kini, nama Fahmi Rahmat Amanulloh menjadi bukti bahwa mahasiswa S-1 Teknik Sipil FT Universitas Siliwangi mampu mencetak bibit unggul kelas dunia yang diakui komunitas akademik internasional.
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

                <!-- Sidebar -->
                <aside class="space-y-6">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Rekam Prestasi
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-graduate text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">Fahmi Rahmat Amanulloh</strong> (Semester 7)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-newspaper text-blue-700 mt-0.5 w-4"></i>
                                <span>3 Artikel Scopus (Q1, Q2, Q4)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-scroll text-blue-700 mt-0.5 w-4"></i>
                                <span>2 Artikel SINTA (Sinta 2 &amp; Sinta 3)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-chalkboard-user text-blue-700 mt-0.5 w-4"></i>
                                <span>Pembimbing: Andhy Romdani, Ph.D.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Riset Teknik Sipil</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Pelajari payung riset dan kolaborasi ilmiah Program Studi S-1 Teknik Sipil FT UNSIL.
                        </p>
                        <a href="{{ route('riset') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Buka Halaman Riset</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
