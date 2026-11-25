@extends('layouts.app')

@section('title', 'Seminar Hasil | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Informasi dan jadwal pelaksanaan Seminar Hasil Skripsi Program Studi Teknik Sipil FT Universitas Siliwangi.')

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]" aria-hidden="true"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <a href="{{ route('jadwal-sidang-skripsi') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Jadwal Sidang Skripsi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400" aria-hidden="true"></i>
                <span class="text-slate-200">Seminar Hasil</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs">
                Tahapan Skripsi 2
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Seminar Hasil (Semhas)
            </h1>
        </div>
    </section>

    <section class="py-12 lg:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('pages._jadwal-table', [
                'schedules' => $schedules ?? \App\Models\DefenseSchedule::where('type', 'Seminar Hasil')->orderBy('date_time')->get(),
                'heading' => 'Jadwal Seminar Hasil',
                'subheading' => 'Daftar jadwal seminar hasil mahasiswa yang dikelola Program Studi Teknik Sipil',
                'emptyMessage' => 'Belum ada jadwal Seminar Hasil yang dijadwalkan saat ini.',
            ])
        </div>
    </section>
@endsection
