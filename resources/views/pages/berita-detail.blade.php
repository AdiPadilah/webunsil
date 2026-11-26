@extends('layouts.app')

@section('title', $article->title . ' | Program Studi Teknik Sipil FT UNSIL')
@section('meta_description', $article->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($article->content), 150))

@section('content')

    {{-- Breadcrumb --}}
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 text-xs text-slate-500 flex items-center gap-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-[#0070BA] transition flex items-center gap-1">
                <i class="fa-solid fa-house"></i> Beranda
            </a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <a href="{{ route('berita.index') }}" class="hover:text-[#0070BA] transition">Berita &amp; Informasi</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span class="text-slate-800 font-semibold truncate max-w-[200px] sm:max-w-xs">{{ \Illuminate\Support\Str::limit($article->title, 55) }}</span>
        </div>
    </div>

    <section class="py-12 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- ========== ARTIKEL ========== --}}
                <article class="lg:col-span-2">

                    {{-- Header --}}
                    <div class="mb-6">
                        <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wide mb-3 flex-wrap">
                            <span class="inline-block px-2.5 py-0.5 rounded text-[11px] font-bold bg-blue-100 text-blue-800">
                                {{ $article->category ?? 'Berita' }}
                            </span>
                            <span class="text-slate-400">&bull;</span>
                            <span class="text-slate-500">
                                {{ $article->published_at ? $article->published_at->translatedFormat('d F Y') : '' }}
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 font-heading leading-tight">
                            {{ $article->title }}
                        </h1>
                        <p class="text-sm text-slate-500 mt-3">
                            Ditulis oleh <strong class="text-slate-700">Humas Program Studi Teknik Sipil UNSIL</strong>
                        </p>
                    </div>

                    {{-- Cover image --}}
                    @if($article->thumbnail)
                    @php
                        $thumb = str_starts_with($article->thumbnail, 'images/')
                            ? asset($article->thumbnail)
                            : asset('storage/' . $article->thumbnail);
                    @endphp
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                        <img src="{{ $thumb }}" alt="{{ $article->title }}" class="w-full object-cover">
                        @if($article->excerpt)
                        <figcaption class="bg-slate-100 text-slate-600 text-xs px-4 py-2.5 leading-relaxed">
                            {{ $article->excerpt }}
                        </figcaption>
                        @endif
                    </figure>
                    @endif

                    {{-- Konten --}}
                    <div class="prose prose-sm max-w-none text-slate-700 leading-relaxed space-y-5">
                        {!! $article->content !!}
                    </div>

                    {{-- Nav --}}
                    <div class="mt-8 pt-6 border-t border-slate-200 flex flex-wrap items-center gap-3">
                        <a href="{{ route('berita.index') }}"
                           class="inline-flex items-center gap-2 text-[#0070BA] hover:text-[#005a96] text-xs font-semibold transition">
                            <i class="fa-solid fa-newspaper"></i> Kembali ke Berita
                        </a>
                        <span class="text-slate-300">&bull;</span>
                        <a href="{{ route('home') }}"
                           class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs font-semibold transition">
                            <i class="fa-solid fa-house"></i> Beranda
                        </a>
                    </div>
                </article>

                {{-- ========== SIDEBAR ========== --}}
                <aside class="space-y-6">

                    {{-- Informasi Artikel --}}
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-700"></i> Informasi Artikel
                        </h3>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-calendar-day text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>
                                    <strong class="text-slate-800">
                                        {{ $article->published_at ? $article->published_at->translatedFormat('l, d F Y') : '-' }}
                                    </strong>
                                </span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-tag text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>{{ $article->category ?? 'Berita' }}</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-building-columns text-blue-700 mt-0.5 w-4 flex-shrink-0"></i>
                                <span>Program Studi S-1 Teknik Sipil FT UNSIL</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Berita Lainnya --}}
                    @php
                        $relatedArticles = \App\Models\Article::where('is_published', true)
                            ->where('id', '!=', $article->id)
                            ->orderByDesc('published_at')
                            ->take(3)
                            ->get();
                    @endphp
                    @if($relatedArticles->count())
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4">
                            Berita Lainnya
                        </h3>
                        <div class="space-y-3">
                            @foreach($relatedArticles as $rel)
                            @php
                                $relUrl = Route::has('berita.' . $rel->slug)
                                    ? route('berita.' . $rel->slug)
                                    : route('berita.show', $rel->slug);
                                $relThumb = $rel->thumbnail
                                    ? (str_starts_with($rel->thumbnail, 'images/')
                                        ? asset($rel->thumbnail)
                                        : asset('storage/' . $rel->thumbnail))
                                    : null;
                            @endphp
                            <a href="{{ $relUrl }}" class="flex items-start gap-3 group">
                                <div class="w-14 h-12 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                                    @if($relThumb)
                                        <img src="{{ $relThumb }}" alt="{{ $rel->title }}"
                                             class="w-full h-full object-cover group-hover:scale-105 transition">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-[#0B2A4A] to-[#0070BA] flex items-center justify-center">
                                            <i class="fa-solid fa-newspaper text-white/30 text-sm"></i>
                                        </div>
                                    @endif
                                </div>
                                <p class="text-xs font-semibold text-slate-700 group-hover:text-blue-700 leading-snug transition line-clamp-3">
                                    {{ $rel->title }}
                                </p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Instagram CTA --}}
                    <div class="bg-[#0B2A4A] rounded-2xl p-5 text-white">
                        <h3 class="text-xs font-black uppercase tracking-wider text-amber-400 mb-3">
                            Info Lebih Lanjut
                        </h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-3">
                            Ikuti akun Instagram resmi untuk update kegiatan akademik dan kemahasiswaan terbaru Program Studi Teknik Sipil UNSIL.
                        </p>
                        <a href="https://instagram.com/sipilunsil" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 text-slate-300 hover:text-white text-xs font-semibold transition w-full justify-center">
                            <i class="fa-brands fa-instagram"></i> @sipilunsil
                        </a>
                    </div>

                </aside>

            </div>
        </div>
    </section>

@endsection
