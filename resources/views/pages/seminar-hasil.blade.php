@extends('layouts.app')

@section('title', 'Seminar Hasil | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Informasi, jadwal, dan persyaratan pendaftaran Seminar Hasil Skripsi Program Studi Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Seminar Hasil</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">Tahapan Skripsi 2</p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Seminar Hasil (Semhas)
            </h1>
        </div>
    </section>

    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-bold text-slate-900">Jadwal Seminar Hasil</h2>
                        <p class="text-xs text-slate-500 mt-1">Jadwal resmi seminar hasil yang tercatat di sistem prodi</p>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800 self-start sm:self-auto">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Update Real-time dari Prodi
                    </span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs sm:text-sm">
                        <thead class="bg-slate-50 text-slate-700 font-bold uppercase text-[11px] border-b border-slate-200">
                            <tr>
                                <th class="p-4 sm:px-6">Mahasiswa &amp; NIM</th>
                                <th class="p-4 sm:px-6">Judul Skripsi</th>
                                <th class="p-4 sm:px-6">Pembimbing &amp; Penguji</th>
                                <th class="p-4 sm:px-6">Waktu &amp; Ruangan</th>
                                <th class="p-4 sm:px-6 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($schedules as $s)
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="p-4 sm:px-6">
                                    <div class="font-bold text-slate-900">{{ $s->student_name }}</div>
                                    <div class="text-[11px] text-slate-500">{{ $s->student_id }}</div>
                                </td>
                                <td class="p-4 sm:px-6 max-w-xs"><p class="text-slate-800 font-medium leading-relaxed">{{ $s->title }}</p></td>
                                <td class="p-4 sm:px-6 text-slate-600">
                                    <div class="font-medium">Pembimbing 1: {{ $s->supervisor_1 }}</div>
                                    @if($s->supervisor_2)<div class="text-[11px] text-slate-500">Pembimbing 2: {{ $s->supervisor_2 }}</div>@endif
                                    @if($s->examiner_1)<div class="text-[11px] text-slate-500 mt-1">Penguji 1: {{ $s->examiner_1 }}</div>@endif
                                    @if($s->examiner_2)<div class="text-[11px] text-slate-500">Penguji 2: {{ $s->examiner_2 }}</div>@endif
                                </td>
                                <td class="p-4 sm:px-6">
                                    <div class="font-bold text-slate-900">{{ $s->date_time ? $s->date_time->translatedFormat('d M Y, H:i') : '-' }} WIB</div>
                                    <div class="text-[11px] text-blue-700 font-medium flex items-center gap-1 mt-0.5"><i class="fa-solid fa-location-dot text-[10px]"></i> {{ $s->room }}</div>
                                </td>
                                <td class="p-4 sm:px-6 text-center">
                                    <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold {{ $s->status_badge_class }}">{{ $s->status }}</span>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="p-8 text-center text-slate-500">Belum ada jadwal seminar hasil yang terdaftar saat ini.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

