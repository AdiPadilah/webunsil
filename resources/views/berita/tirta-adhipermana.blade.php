@extends('layouts.app')

@section('title', 'Tim Tirta Adhipermana Juara 1 National Paper Competition 2023 | Teknik Sipil UNSIL')
@section('meta_description', 'Tim Tirta Adhipermana Jurusan Teknik Sipil Universitas Siliwangi meraih Juara 1 National Paper Competition 2023 di Aceh, menyisihkan 81 peserta dari seluruh Indonesia.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Tirta Adhipermana Juara 1 NPC 2023</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1 bg-pink-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-trophy text-[9px]"></i> Prestasi &amp; Kompetisi
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 9 November 2023
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-medal text-[9px]"></i> Juara 1 Nasional
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Tim Tirta Adhipermana Jurusan Teknik Sipil UNSIL Menyabet Juara 1 National Paper Competition (NPC) 2023
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2023/11/09/tim-tirta-adhipermana-jurusan-teknik-sipil-universitas-siliwangi-menyabet-juara-1-national-paper-competition-npc-2023/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-tirta-adhipermana-npc.jpeg') }}" alt="Tim Tirta Adhipermana Juara 1 NPC 2023 Teknik Sipil UNSIL" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Tim Tirta Adhipermana dari Jurusan Teknik Sipil Universitas Siliwangi berhasil meraih Juara 1 National Paper Competition (NPC) 2023 di Aceh.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            Universitas Siliwangi patut berbangga oleh keberhasilan tim <strong>"Tirta Adhipermana"</strong> dari Jurusan Teknik Sipil yang telah meraih <strong>Juara 1</strong> dalam ajang bergengsi <em>National Paper Competition (NPC), the 4th Aceh International Symposium on Civil Engineering (AISCE) 2023</em>. Acara yang berlangsung pada 25&ndash;26 Oktober 2023 ini mengusung tema <em>"Menuju Masa Depan Berkelanjutan: Implementasi Sustainable Development Goals (SDGs) dalam Pembangunan Nasional"</em>.
                        </p>

                        <p>
                            Perwakilan Jurusan Teknik Sipil Universitas Siliwangi ini berhasil menyisihkan <strong>81 peserta</strong> dari berbagai penjuru Indonesia pada acara yang diselenggarakan oleh Himpunan Mahasiswa Sipil (HMS) Universitas Syiah Kuala, Aceh. Lomba dilaksanakan secara hibrid — langsung dan daring — dengan penilaian yang sangat ketat.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Topik Paper: Sumur Artesis Pasca-Gempa Bumi</h3>
                        <p>
                            Dibimbing oleh <strong>Andhy Romdani, S.T., M.Eng., Ph.D.</strong>, tim Tirta Adhipermana yang terdiri dari <strong>Ria, Farhan, dan Alfarozi</strong> mengusung tema:
                        </p>
                        <div class="p-4 bg-pink-50 border-l-4 border-pink-600 rounded-r-xl">
                            <p class="text-sm font-semibold text-pink-950 italic">
                                "Aplikasi Sumur Artesis Inovatif sebagai Solusi Krisis Air Bersih Pasca-Bencana Gempa Bumi dan Strategi Perwujudan Sustainable Development Goals (SDGs)"
                            </p>
                        </div>

                        <p>
                            Topik ini sangat relevan di tengah ancaman berbagai bencana alam terutama gempa bumi yang kerap terjadi di Indonesia. Badan Pusat Statistik (BPS) merilis data frekuensi gempa bumi sebanyak <strong>10.843 kejadian</strong> sepanjang 2022. Dampak bencana gempa bumi dapat merusak infrastruktur, sarana air bersih, bahkan timbulnya korban jiwa. Tantangan inilah yang menjadi dasar pengangkatan topik penanganan krisis air bersih pasca-bencana gempa bumi.
                        </p>

                        <div class="p-5 bg-pink-50 border-l-4 border-pink-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-pink-950 italic">
                                "Mahasiswa yang memiliki semangat besar untuk berkompetisi dan meraih prestasi maksimal harus berkolaborasi dengan para dosen sebagai pembina yang memiliki pengalaman. Tidak mustahil jika dua komponen utama tersebut bersinergi, Jurusan Teknik Sipil Universitas Siliwangi akan melesat untuk sejajar dengan jurusan Teknik Sipil dari universitas top Indonesia."
                            </p>
                            <span class="text-xs text-pink-800 font-bold block mt-2">&mdash; Andhy Romdani, S.T., M.Eng., Ph.D. (Dosen Pembimbing)</span>
                        </div>

                        <p>
                            Ria sebagai ketua tim Tirta Adhipermana mengucapkan rasa syukur telah mampu memberi sumbangsih prestasi bagi Jurusan Teknik Sipil, Universitas Siliwangi. Ia bersama tim berharap pencapaian juara 1 tingkat nasional ini dapat memberikan semangat bagi seluruh mahasiswa Universitas Siliwangi, khususnya Jurusan Teknik Sipil, untuk mengejar prestasi berikutnya yang lebih prestisius baik di tingkat nasional maupun internasional.
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Info Kompetisi
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-trophy text-pink-600 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">Juara 1</strong> National Paper Competition</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-users text-blue-700 mt-0.5 w-4"></i>
                                <span>Tim: Ria, Farhan &amp; Alfarozi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>AISCE 2023, Aceh (25–26 Okt 2023)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-ranking-star text-blue-700 mt-0.5 w-4"></i>
                                <span>Menyisihkan 81 peserta nasional</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-chalkboard-user text-blue-700 mt-0.5 w-4"></i>
                                <span>Pembimbing: Andhy Romdani, Ph.D.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Mahasiswa &amp; Alumni</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Lihat prestasi dan kegiatan mahasiswa Teknik Sipil FT UNSIL lainnya.
                        </p>
                        <a href="{{ route('mahasiswa-alumni') }}" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Lihat Mahasiswa</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
