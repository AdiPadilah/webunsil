@extends('layouts.app')

@section('title', 'Kunjungan Ilmiah Bendungan Leuwikeris HMS UNSIL | Teknik Sipil UNSIL')
@section('meta_description', 'Himpunan Mahasiswa Sipil Universitas Siliwangi perluas wawasan keteknikan melalui kunjungan ilmiah ke Bendungan Leuwikeris dalam rangkaian SCIENCE 2026.')

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
            <span class="text-slate-800 font-semibold truncate">Kunjungan Ilmiah Bendungan Leuwikeris</span>
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
                            <span class="inline-flex items-center gap-1 bg-cyan-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                <i class="fa-solid fa-water text-[9px]"></i> Sumber Daya Air
                            </span>
                            <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-800 text-[10px] font-bold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-calendar text-[9px]"></i> 23 Oktober 2026
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-700 text-[10px] font-semibold px-3 py-1 rounded-full">
                                <i class="fa-solid fa-location-dot text-[9px]"></i> Bendungan Leuwikeris, Tasikmalaya - Ciamis
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Himpunan Mahasiswa Sipil Universitas Siliwangi Perluas Wawasan Keteknikan melalui Kunjungan Ilmiah ke Bendungan Leuwikeris
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2026/10/23/himpunan-mahasiswa-sipil-universitas-siliwangi-perluas-wawasan-keteknikan-melalui-kunjungan-ilmiah-ke-bendungan-leuwikeris/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-kunjungan-leuwikeris.jpeg') }}" alt="Kunjungan Ilmiah Mahasiswa Teknik Sipil ke Bendungan Leuwikeris" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Rombongan Himpunan Mahasiswa Sipil (HMS) dan dosen Teknik Sipil Universitas Siliwangi berfoto bersama di area puncak Bendungan Leuwikeris didampingi tim Unit Pengelola Bendungan (UPB) Leuwikeris.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Himpunan Mahasiswa Sipil (HMS) Universitas Siliwangi melaksanakan Kunjungan Ilmiah ke Bendungan Leuwikeris pada Kamis (22/10/2026). Kegiatan ini merupakan bagian dari rangkaian Siliwangi Civil Engineering Creativity (SCIENCE) 2026 yang bertujuan memperluas wawasan mahasiswa melalui pembelajaran langsung mengenai konstruksi dan pengelolaan infrastruktur sumber daya air.
                        </p>

                        <p>
                            Kunjungan tersebut disambut oleh Kepala Unit Pengelola Bendungan (UPB) Leuwikeris, <strong>Soni Senjaya Efendi, S.T., M.T.</strong>, beserta jajaran. Turut hadir perwakilan dosen Teknik Sipil Universitas Siliwangi, yakni Galih Rahmat Jatnika, S.T., M.T.; Raden Roro Dita Arviananda, S.Pd., M.Eng.; Muhamad Anugerah Ramadhan, S.T., M.T.; dan Kartika Seinari Manggala, S.T., M.T. Kegiatan ini juga dihadiri oleh Ketua Pelaksana, Restu Ramadhan, Ketua HMS, Muhammad Naufal Alwan, serta panitia dan peserta mahasiswa.
                        </p>

                        <div class="p-5 bg-cyan-50 border-l-4 border-cyan-700 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-cyan-950 italic">
                                "Melalui Kunjungan Ilmiah dalam rangka SCIENCE 2026 ini, mahasiswa diharapkan mampu menghubungkan teori perkuliahan dengan praktik keteknikan secara nyata, khususnya dalam aspek konstruksi, pemantauan deformasi, keamanan, dan pengelolaan bendungan modern."
                            </p>
                            <span class="text-xs text-cyan-800 font-bold block mt-2">&mdash; Tim Dosen Pembimbing Teknik Sipil FT UNSIL</span>
                        </div>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Pemaparan Teknis &amp; Peninjauan Lapangan</h3>
                        <p>
                            Rangkaian kegiatan diawali dengan pembukaan dan sambutan dari pihak UPB Leuwikeris serta perwakilan kampus, dilanjutkan dengan pemaparan materi mengenai gambaran umum, fungsi, dan aspek teknis pengelolaan Bendungan Leuwikeris. Materi juga mencakup instrumentasi bendungan, pemantauan deformasi dan rembesan, serta sistem peringatan dini sebagai bagian dari upaya menjaga keamanan dan mendukung operasional bendungan.
                        </p>

                        <p>
                            Para peserta juga melakukan peninjauan langsung ke bangunan bendungan dan fasilitas pendukungnya serta diperkenalkan dengan bagian-bagian utama bendungan, bangunan pelimpah (<em>spillway</em>), pintu air, serta instrumen pemantauan kondisi bendungan.
                        </p>

                        <p>
                            Kegiatan ini sekaligus menjadi upaya HMS Universitas Siliwangi untuk memperluas wawasan akademik mahasiswa serta mempererat hubungan dengan UPB Leuwikeris dalam mendukung pembelajaran berbasis pengalaman lapangan di bidang rekayasa sumber daya air dan keinsinyuran sipil.
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
                                <span><strong class="text-slate-800">Kamis, 22 Oktober 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Bendungan Leuwikeris, Kab. Ciamis &amp; Tasikmalaya</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4"></i>
                                <span>Penyambut: Soni Senjaya Efendi, S.T., M.T. (Kepala UPB)</span>
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
                        <a href="https://unsil.ac.id/2026/10/23/himpunan-mahasiswa-sipil-universitas-siliwangi-perluas-wawasan-keteknikan-melalui-kunjungan-ilmiah-ke-bendungan-leuwikeris/" target="_blank" class="inline-flex items-center gap-2 bg-[#0070BA] hover:bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition w-full justify-center">
                            <span>Baca di unsil.ac.id</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
