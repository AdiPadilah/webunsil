@extends('layouts.app')

@section('title', 'Seminar Nasional Perdana HATHI: Teknologi Modern Pengelolaan Sumber Daya Air Berkelanjutan 2024 | Teknik Sipil UNSIL')
@section('meta_description', 'Seminar Nasional Perdana HATHI Cabang Banjar bersama Teknik Sipil UNSIL menyoroti pemanfaatan teknologi modern untuk pengelolaan sumber daya air berkelanjutan, 3 Juni 2024.')

@section('content')
    
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-700 transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate">Seminar Nasional HATHI Sumber Daya Air 2024</span>
        </div>
    </div>

    
    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                
                <article class="lg:col-span-2">
                    <div class="mb-6">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">
                            Seminar &amp; Kolaborasi · 3 Juni 2024 · Sumber Daya Air
                        </p>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            Seminar Nasional Perdana HATHI: Menyoroti Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas UNSIL</strong> &bull; Sumber: <a href="https://unsil.ac.id/2024/06/03/seminar-nasional-perdana-hathi-menyoroti-pemanfaatan-teknologi-modern-untuk-pengelolaan-sumber-daya-air-berkelanjutan/" target="_blank" class="text-blue-700 font-semibold hover:underline">unsil.ac.id</a>
                        </p>
                    </div>

                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ asset('images/unsil-seminar-hathi-air.jpg') }}" alt="Seminar Nasional Perdana HATHI Sumber Daya Air Berkelanjutan 2024 Teknik Sipil UNSIL" class="w-full object-cover">
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            Seminar Nasional Perdana HATHI Cabang Banjar bersama Jurusan Teknik Sipil Universitas Siliwangi, 3 Juni 2024, membahas teknologi modern untuk pengelolaan sumber daya air berkelanjutan.
                        </figcaption>
                    </figure>

                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        <p class="text-base font-medium text-slate-900 leading-relaxed">
                            <strong>Humas UNSIL</strong> &mdash; Himpunan Ahli Teknik Hidraulik Indonesia (HATHI) Cabang Banjar bersama Jurusan Teknik Sipil Universitas Siliwangi (UNSIL) sukses menyelenggarakan <strong>Seminar Nasional Perdana</strong> yang mengangkat tema penting: <em>"Pemanfaatan Teknologi Modern untuk Pengelolaan Sumber Daya Air Berkelanjutan"</em>. Seminar ini berlangsung pada <strong>Senin, 3 Juni 2024</strong>.
                        </p>

                        <p>
                            Seminar nasional ini menjadi forum strategis yang mempertemukan para pakar, akademisi, praktisi, dan pemangku kebijakan di bidang teknik sumber daya air dari seluruh Indonesia untuk membahas tantangan dan solusi dalam pengelolaan air di era modern.
                        </p>

                        <h3 class="text-lg font-bold text-slate-900 mt-6 mb-2">Fokus Pembahasan: Teknologi Modern Pengelolaan Air</h3>
                        <p>
                            Seminar ini secara khusus menyoroti bagaimana teknologi terkini — mulai dari pemodelan hidrologi berbasis digital, sensor IoT untuk monitoring sungai dan bendungan, hingga penginderaan jauh untuk pemetaan potensi banjir — dapat diintegrasikan dalam manajemen sumber daya air yang berkelanjutan di Indonesia.
                        </p>

                        <div class="p-5 bg-blue-50 border-l-4 border-blue-600 rounded-r-xl my-6">
                            <p class="text-sm font-semibold text-blue-950 italic">
                                "Pengelolaan sumber daya air yang berkelanjutan tidak bisa dipisahkan dari inovasi teknologi. Kolaborasi antara HATHI, akademisi, dan pemerintah adalah kunci untuk mewujudkan ketahanan air nasional."
                            </p>
                            <span class="text-xs text-blue-800 font-bold block mt-2">&mdash; Narasumber Seminar Nasional HATHI, 3 Juni 2024</span>
                        </div>

                        <p>
                            Keterlibatan Jurusan Teknik Sipil UNSIL sebagai tuan rumah dan mitra strategis dalam penyelenggaraan seminar nasional ini memperkuat posisi UNSIL sebagai salah satu institusi akademik yang aktif berkontribusi dalam isu-isu strategis keairan dan infrastruktur nasional.
                        </p>

                        <p>
                            Seminar ini juga menjadi ajang mempererat sinergi antara dunia akademik, pemerintah (Kementerian PUPR, BBWS), dan Himpunan Ahli Teknik Hidraulik Indonesia dalam menghadapi tantangan perubahan iklim yang berdampak langsung pada ketersediaan dan pengelolaan air bersih di Indonesia.
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
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Info Seminar
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar text-blue-600 mt-0.5 w-4"></i>
                                <span><strong class="text-slate-800">3 Juni 2024</strong></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-location-dot text-blue-700 mt-0.5 w-4"></i>
                                <span>Universitas Siliwangi, Tasikmalaya</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-handshake text-blue-700 mt-0.5 w-4"></i>
                                <span>Penyelenggara: HATHI Cabang Banjar &amp; Teknik Sipil UNSIL</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-droplet text-blue-700 mt-0.5 w-4"></i>
                                <span>Tema: Teknologi Modern Pengelolaan SDA Berkelanjutan</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">Riset &amp; Kolaborasi</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Pelajari agenda riset Teknik Sipil UNSIL di bidang sumber daya air dan infrastruktur berkelanjutan.
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
