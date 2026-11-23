@extends('layouts.app')

@section('title', 'Muhammad Raka El Ghifari: Lulusan Teknik Sipil UNSIL Tembus Dua Jurnal Scopus | Teknik Sipil UNSIL')
@section('meta_description', 'Muhammad Raka El Ghifari, lulusan baru Teknik Sipil Universitas Siliwangi, menorehkan prestasi luar biasa dengan dua publikasi internasional bereputasi Scopus dan satu artikel Sinta.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Muhammad Raka El Ghifari Tembus Scopus</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Prestasi &amp; Riset Internasional · 22 Agustus 2025 · Scopus &amp; SINTA
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Lulusan Teknik Sipil UNSIL Taklukkan Dua Jurnal Internasional Bereputasi Scopus: Muhammad Raka El Ghifari
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2025/08/22/muhammad-raka-el-ghifari-lulusan-teknik-sipil-unsil-taklukkan-dua-jurnal-internasional-bereputasi-scopus/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-muhammad-raka.jpeg') }}" alt="Muhammad Raka El Ghifari Lulusan Teknik Sipil UNSIL" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Muhammad Raka El Ghifari, lulusan Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi yang berhasil menembus dua jurnal internasional bereputasi Scopus.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Universitas Siliwangi kembali melahirkan sosok inspiratif yang membawa harum nama bangsa. <strong>Muhammad Raka El Ghifari</strong>, lulusan baru Program Studi Teknik Sipil Universitas Siliwangi, berhasil menorehkan sejarah dengan capaian akademik luar biasa: dua publikasi internasional bereputasi Scopus dan satu artikel terindeks Sinta.
                        </p>

                        <p>
                            Tidak banyak lulusan sarjana di Indonesia yang mampu menembus jurnal bereputasi global. Namun Raka, putra kelahiran Garut, 15 Juni 2003, membuktikan bahwa mimpi besar bisa lahir dari kampus daerah asalkan ada tekad dan kerja keras.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Dua Karya Ilmiah Bereputasi Scopus:</h3>
                        <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700">
                            <li>
                                Penelitian pertama Raka berfokus pada bidang <strong>hidrodynamika pantai</strong>, mengkaji dampak perubahan iklim terhadap morfologi pesisir Jawa Barat — diterbitkan di jurnal internasional bergengsi terindeks Scopus.
                            </li>
                            <li>
                                Penelitian keduanya melintasi batas disiplin ilmu, berkontribusi dalam bidang <strong>kedokteran klinis</strong> lewat artikel di jurnal Scopus mengenai analisis maraknya kasus batu empedu di wilayah Tasikmalaya, Jawa Barat.
                            </li>
                        </ul>

                        <p>
                            Uniknya, Raka juga berkontribusi dalam bidang kedokteran klinis lewat artikelnya di <em>Jurnal Medica Hospitalia</em> (Sinta 3, RS Kariadi, Semarang) melalui penelitian tentang maraknya kasus batu empedu di Tasikmalaya berjudul <em>"Spatial and Temporal Analysis of Gallbladder Stone Cases at dr. Soekardjo Hospital, West Java: An Evidence-Based Study."</em> Kolaborasi lintas disiplin ini menegaskan bahwa generasi muda tidak takut melintasi batas-batas ilmu.
                        </p>

                        <div class="p-5 bg-emerald-50 border-l-4 border-emerald-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-emerald-950 italic">
                                "Raka memiliki semangat yang jarang dimiliki anak seusianya. Ia ulet, tekun, dan tidak pernah ragu mengemukakan ide."
                            </p>
                            <span class="text-xs text-emerald-800 font-bold block mt-2">&mdash; Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen Pembimbing, alumni S3 National Cheng Kung University, Taiwan)</span>
                        </div>

                        <p>
                            Dosen berprestasi Universitas Siliwangi yang energik ini telah menerbitkan 13 buku dan 9 artikel internasional terindeks Scopus. Menariknya, proses pembimbingan mahasiswa oleh Romdani, Ph.D. tidak hanya berlangsung di ruang laboratorium. Seringkali diskusi riset dilakukan di kafe, sambil menikmati kopi, agar mahasiswa merasa lebih relaks. Pola ini terbukti melahirkan ide-ide besar dengan cara sederhana namun efektif.
                        </p>

                        <p>
                            <em>"Generasi Z memang unik sehingga perlu pendekatan yang spesial juga. Mereka hanya butuh dipancing dengan sesuatu yang menyenangkan sehingga talenta mereka bisa dengan mudah diasah dan dilejitkan ke pentas dunia,"</em> ujar Romdani, Ph.D. bersemangat.
                        </p>

                        <p>
                            Pada hari wisudanya, 21 Agustus 2025, Raka mengungkapkan rasa terima kasihnya. <em>"Pak Andhy bukan hanya dosen, tapi sosok yang benar-benar hadir untuk mahasiswanya. Beliau mengajarkan bahwa riset bukan sekadar angka dan data, melainkan karya yang dibuat dengan menyenangkan dan bisa berdampak untuk masyarakat luas,"</em> katanya. Tak lupa, Raka mempersembahkan prestasi gemilang ini kepada kedua orang tuanya serta keluarga besarnya di Garut, Banjar, dan Yogyakarta.
                        </p>

                        <p>
                            Kisah Raka menjadi bukti bahwa anak daerah mampu menembus batas global. Dari kota kecil di Priangan Timur, ia menunjukkan bahwa ketekunan, keberanian, dan bimbingan yang tepat mampu membawa mahasiswa Indonesia berdiri sejajar dengan peneliti dunia.
                        </p>

                        <p class="text-xs text-slate-500 mt-6 italic">
                            Pewarta: Humas UNSIL
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Rekam Prestasi
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-user-graduate text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">Muhammad Raka El Ghifari</strong> (Lulusan 2025)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-newspaper text-blue-700 mt-0.5 w-4"></i>
                                <span>2 Artikel Scopus Internasional</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-scroll text-blue-700 mt-0.5 w-4"></i>
                                <span>1 Artikel SINTA 3 Nasional</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-chalkboard-user text-blue-700 mt-0.5 w-4"></i>
                                <span>Pembimbing: Andhy Romdani, Ph.D.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-graduation-cap text-blue-700 mt-0.5 w-4"></i>
                                <span>Wisuda: 21 Agustus 2025</span>
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
