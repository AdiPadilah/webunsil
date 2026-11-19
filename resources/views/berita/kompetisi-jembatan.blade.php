@extends('layouts.app')

@section('title', 'National Bridge Design Competition SCIENCE di FT UNSIL | Teknik Sipil UNSIL')
@section('meta_description', 'Babak Final National Bridge Design Competition SCIENCE diselenggarakan oleh Himpunan Mahasiswa Sipil FT Universitas Siliwangi.')

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
            <span class="text-slate-800 font-semibold truncate">Kompetisi Rancang Jembatan SCIENCE 2025</span>
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
                            <span class="inline-flex items-center gap-1 bg-pink-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-trophy text-[9px]"></i> Prestasi &amp; Kompetisi
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 20 Desember 2025
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Gedung FT UNSIL Kampus Mugarsari
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Babak Final National Bridge Design Competition SCIENCE di FT UNSIL
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Himpunan Mahasiswa Sipil (HMS) FT UNSIL</strong> &bull; Sumber: <a href="https://instagram.com/hmsftunsil" target="_blank" class="text-pink-600 font-semibold hover:underline">@hmsftunsil</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/event-3.jpg') }}" alt="National Bridge Design Competition SCIENCE FT UNSIL" class="w-full object-cover" onerror="this.src='{{ asset('images/unsil-campus-hd.jpg') }}'">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Suasana pengujian pembebanan miniatur jembatan balsa dan presentasi rancangan struktur para finalis National Bridge Design Competition SCIENCE di Fakultas Teknik UNSIL.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>TASIKMALAYA</strong> &mdash; Himpunan Mahasiswa Sipil (HMS) Fakultas Teknik Universitas Siliwangi sukses menyelenggarakan babak final <em>National Bridge Design Competition</em> dalam rangkaian agenda akbar <strong>SCIENCE (Siliwangi Civil Engineering Competition)</strong>.
                        </p>

                        <p>
                            Kompetisi ini menantang mahasiswa teknik sipil se-Indonesia untuk merancang miniatur jembatan yang memenuhi kriteria kekuatan struktural maksimum, efisiensi berat material, nilai estetika, dan kemudahan metode perakitan lapangan. Babak final mempertemukan tim-tim terbaik dari berbagai universitas setelah melalui seleksi proposal desain yang ketat.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Uji Beban Nyata dan Inovasi Struktur</h3>
                        <p>
                            Pada sesi pengujian, seluruh model jembatan diuji beban hingga batas keruntuhan (destructive load test) menggunakan alat uji presisi di Laboratorium Bahan dan Struktur FT UNSIL. Dewan juri yang terdiri dari akademisi senior dan praktisi asosiasi profesi HAKI mengapresiasi tingginya standar inovasi konfigurasi rangka batang (truss) yang dihadirkan para peserta.
                        </p>

                        <div class="p-5 bg-blue-50 border-l-4 border-blue-700 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-blue-950 italic">
                                "SCIENCE menjadi ajang strategis bagi mahasiswa untuk mengasah pemahaman analitis mekanika rekayasa ke dalam purwarupa fisik nyata, melatih kolaborasi tim, dan memupuk daya saing keinsinyuran tingkat nasional."
                            </p>
                            <span class="text-xs text-blue-800 font-bold block mt-2">&mdash; Pembina Kemahasiswaan Program Studi Teknik Sipil FT UNSIL</span>
                        </div>

                        <p>
                            Melalui perhelatan rutin tahunan ini, Program Studi S-1 Teknik Sipil FT UNSIL menegaskan komitmennya dalam memfasilitasi kreativitas mahasiswa keteknikan serta memperluas jejaring persahabatan akademis antarperguruan tinggi di seluruh Nusantara.
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">20 Desember 2025</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Gedung Fakultas Teknik, Kampus 2 UNSIL Mugarsari</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-trophy text-blue-700 mt-0.5 w-4"></i>
                                <span>SCIENCE: National Bridge Design Competition</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Instagram HMS FT UNSIL</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Ikuti kanal media sosial resmi himpunan untuk pengumuman lomba, pendaftaran delegasi, dan rekaman kegiatan mahasiswa.
                        </p>
                        <a href="https://instagram.com/hmsftunsil" target="_blank"
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white text-xs font-bold px-4 py-2 rounded-full hover:opacity-90 transition w-full justify-center">
                            <i class="fa-brands fa-instagram"></i> @hmsftunsil
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
