@extends('layouts.app')

@section('title', 'HATHI FGD Sedimentasi Segara Anakan bersama Teknik Sipil UNSIL 2024 | Teknik Sipil UNSIL')
@section('meta_description', 'BBWS Citanduy berkolaborasi dengan Jurusan Teknik Sipil UNSIL dalam FGD Sedimentasi Segara Anakan dan Pelantikan Pengurus HATHI Cabang Banjar Periode 2024-2027.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">HATHI FGD Sedimentasi Segara Anakan 2024</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Kolaborasi &amp; Pengabdian · 22 Maret 2024 · Sumber Daya Air
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Pelantikan Pengurus HATHI Cabang Banjar &amp; FGD Penanganan Sedimentasi Segara Anakan bersama Jurusan Teknik Sipil UNSIL
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2024/03/22/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-hathi-segara-anakan.png') }}" alt="FGD HATHI Sedimentasi Segara Anakan Teknik Sipil UNSIL 2024" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Kegiatan Pelantikan Pengurus HATHI Cabang Banjar dan FGD Penanganan Sedimentasi Segara Anakan di Auditorium Gedung Data Center Fakultas Teknik Universitas Siliwangi, 22 Maret 2024.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Pada Jumat, <strong>22 Maret 2024</strong>, Balai Besar Wilayah Sungai Citanduy berkolaborasi dengan Jurusan Teknik Sipil Universitas Siliwangi, Tasikmalaya, menggelar acara penting di <strong>Auditorium Gedung Data Center Fakultas Teknik Universitas Siliwangi (UNSIL)</strong>. Acara tersebut merupakan pelantikan pengurus Himpunan Ahli Teknik Hidraulik Indonesia (HATHI) Cabang Banjar untuk periode 2024-2027 dan <em>Focus Group Discussion</em> (FGD) bertajuk <strong>"Penanganan Sedimentasi Segara Anakan"</strong> dalam rangka memperingati Hari Air Dunia ke-32.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Pelantikan Pengurus HATHI Cabang Banjar 2024–2027</h3>
                        <p>
                            <strong>Muhammad Adek Rizaldi, S.T., M.Tech</strong>, Sekretaris Umum HATHI Pusat yang juga menjabat sebagai Direktur Bina Operasi dan Pemeliharaan, Direktorat Jenderal Sumber Daya Air, Kementerian PUPR, secara langsung melantik seluruh pengurus HATHI Cabang Banjar periode 2024-2027. Acara pelantikan ini juga menjadi momen istimewa karena bertepatan dengan <strong>HUT HATHI Ke-43</strong>.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Narasumber FGD Bertaraf Nasional</h3>
                        <p>
                            Kegiatan dihadiri oleh sejumlah tokoh penting yang turut menjadi narasumber dalam FGD, di antaranya:
                        </p>
                        <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700">
                            <li><strong>Elroy Koyari, S.T., M.T.</strong> — Kepala Balai Besar Wilayah Sungai Citanduy</li>
                            <li><strong>Dr. Ir. Arie Setiadi Moerwanto, M.Sc.</strong> — Perekayasa Utama Balai Hidrolika dan Geoteknik Keairan</li>
                            <li><strong>Prof. Ir. Indratmo Soekarno, M.Sc., Ph.D.</strong> — Guru Besar Fakultas Teknik Sipil dan Lingkungan, Institut Teknologi Bandung</li>
                        </ul>

                        <div class="p-5 bg-cyan-50 border-l-4 border-cyan-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-cyan-950 italic">
                                "FGD ini diharapkan dapat menghasilkan alternatif-alternatif penanganan yang tepat untuk dilakukan dalam mengatasi sedimentasi di Segara Anakan — sebuah ekosistem laguna yang sangat penting bagi wilayah Ciamis dan Cilacap."
                            </p>
                            <span class="text-xs text-cyan-800 font-bold block mt-2">&mdash; Elroy Koyari, S.T., M.T. (Kepala BBWS Citanduy)</span>
                        </div>

                        <p>
                            Penanganan sedimentasi Laguna Segara Anakan diusulkan sebagai <strong>pilot project</strong> dalam <em>10th World Water Forum 2024</em> yang akan dilaksanakan di Bali pada 18–25 Mei 2024. Kolaborasi antara BBWS Citanduy dan Jurusan Teknik Sipil UNSIL dalam forum bergengsi ini menjadi bukti nyata kontribusi akademisi dalam penanganan isu lingkungan dan sumber daya air skala nasional.
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Info Kegiatan
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar text-cyan-600 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">22 Maret 2024</strong> — Hari Air Dunia ke-32</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Auditorium Gedung Data Center FT UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4"></i>
                                <span>Kolaborasi: BBWS Citanduy &amp; Teknik Sipil UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-water text-blue-700 mt-0.5 w-4"></i>
                                <span>Topik: Sedimentasi Laguna Segara Anakan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-globe text-blue-700 mt-0.5 w-4"></i>
                                <span>Usulan Pilot Project: 10th World Water Forum 2024, Bali</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Riset &amp; Kolaborasi</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Pelajari agenda riset dan kolaborasi Jurusan Teknik Sipil FT UNSIL bersama instansi nasional.
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
