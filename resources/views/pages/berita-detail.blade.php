@extends('layouts.app')

@section('title', $article->title . ' | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', $article->excerpt ?? Str::limit(strip_tags($article->content), 150))

@section('content')
    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('berita.index') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Berita &amp; Informasi</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200 truncate max-w-xs">{{ Str::limit($article->title, 40) }}</span>
            </nav>
            <p class="text-sky-300 font-semibold text-xs uppercase tracking-wide">
                {{ $article->category }} &bull; {{ $article->published_at ? $article->published_at->translatedFormat('d F Y') : '-' }}
            </p>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading tracking-tight text-white mt-1 leading-snug">
                {{ $article->title }}
            </h1>
        </div>
    </section>

    <section class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm p-6 sm:p-10">
                @if($article->thumbnail)
                <div class="mb-8 rounded-xl overflow-hidden bg-slate-100 max-h-[450px]">
                    <img src="{{ str_starts_with($article->thumbnail, 'images/') ? asset($article->thumbnail) : asset('storage/' . $article->thumbnail) }}" 
                         alt="{{ $article->title }}" 
                         class="w-full h-full object-cover">
                </div>
                @endif

                <div class="prose max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-4">
                    {!! $article->content !!}
                </div>

                <div class="mt-10 pt-6 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-blue-700 hover:text-blue-900">
                        <i class="fa-solid fa-arrow-left text-xs"></i> Kembali ke Berita
                    </a>
                    <span class="text-xs text-slate-400">Teknik Sipil FT Universitas Siliwangi</span>
                </div>
            </article>
        </div>
    </section>
@endsection
