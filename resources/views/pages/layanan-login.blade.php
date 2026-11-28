<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Layanan Terpadu | Teknik Sipil UNSIL</title>
    <link rel="icon" href="{{ asset('images/logo-unsil.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            blue: '#0070BA',
                            sky: '#38BDF8',
                            dark: '#0B2A4A',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
        }
        .filament-input {
            background-color: #EEF4FE;
            border-color: #CBD5E1;
            transition: all 0.2s ease;
        }
        .filament-input:focus {
            background-color: #FFFFFF;
            border-color: #38BDF8;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
            outline: none;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-center items-center p-4 sm:p-6 text-slate-800 antialiased selection:bg-sky-200">

    <!-- Main Card (Filament-Style Login) -->
    <div class="w-full max-w-[28.5rem] bg-white rounded-2xl shadow-[0_4px_24px_-4px_rgba(0,0,0,0.06),0_2px_8px_-2px_rgba(0,0,0,0.04)] border border-slate-200/80 p-8 sm:p-10 transition-all">
        
        <!-- Brand Logo Header -->
        <div class="flex items-center justify-center gap-2.5 mb-6">
            <img src="{{ asset('images/logo-unsil.png') }}"
                 alt="Logo Universitas Siliwangi"
                 class="h-9 w-9 object-contain shrink-0">
            <div class="leading-tight text-left">
                <div class="text-[0.95rem] font-bold text-slate-800 tracking-tight">
                    Layanan Terpadu Teknik Sipil
                </div>
                <div class="text-[0.75rem] font-medium text-slate-500">
                    Universitas Siliwangi
                </div>
            </div>
        </div>

        @auth
            <!-- STATE: SUDAH LOGIN -->
            <div class="text-center">
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight mb-2">
                    Akses Terverifikasi
                </h1>
                <p class="text-xs text-slate-500 mb-6">
                    Anda saat ini telah masuk menggunakan akun resmi sivitas akademika.
                </p>

                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 mb-6 text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-sm shrink-0">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-sm font-bold text-slate-800 truncate">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="text-xs text-slate-500 flex items-center gap-1.5 flex-wrap">
                                <span class="font-semibold text-slate-700">{{ Auth::user()->role_label }}</span>
                                @if (Auth::user()->npm)
                                    <span>&bull;</span>
                                    <span class="font-mono text-slate-600">NPM: {{ Auth::user()->npm }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <a href="https://s.id/Tugas-akhir-TSipil" target="_blank" rel="noopener noreferrer"
                       class="w-full py-2.5 px-4 bg-[#38BDF8] hover:bg-[#0284C7] text-white font-semibold text-sm rounded-lg shadow-sm hover:shadow transition flex items-center justify-center gap-2">
                        <span>Lanjut ke Portal Tugas Akhir (s.id)</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>

                    <form action="{{ route('layanan.logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="w-full py-2 px-4 bg-white hover:bg-slate-50 text-slate-600 hover:text-rose-600 text-xs font-medium rounded-lg border border-slate-200 transition">
                            Keluar / Ganti Akun Lain
                        </button>
                    </form>
                </div>
            </div>
        @else
            <!-- STATE: FORM LOGIN (PERSIS GAMBAR LOGIN ADMIN) -->
            <h1 class="text-2xl font-bold text-slate-900 text-center tracking-tight mb-7">
                Masuk ke akun Anda
            </h1>

            @if (session('login_error'))
                <div class="mb-5 p-3 rounded-lg bg-rose-50 border border-rose-200 text-rose-700 text-xs font-semibold flex items-start gap-2">
                    <svg class="w-4 h-4 text-rose-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <span>{{ session('login_error') }}</span>
                </div>
            @endif

            <form action="{{ route('layanan.login') }}" method="POST" class="space-y-4">
                @csrf
                
                <!-- Email / NPM Input -->
                <div>
                    <label for="login" class="block text-xs font-semibold text-slate-700 mb-1.5">
                        Alamat email atau NPM<span class="text-rose-500 font-bold">*</span>
                    </label>
                    <input type="text"
                           name="login"
                           id="login"
                           value="{{ old('login') }}"
                           required
                           autofocus
                           autocomplete="username"
                           class="filament-input w-full px-3.5 py-2.5 text-sm rounded-lg border text-slate-900"
                           placeholder="nama@unsil.ac.id atau NPM">
                </div>

                <!-- Password Input with Toggle Eye -->
                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-700 mb-1.5">
                        Kata sandi<span class="text-rose-500 font-bold">*</span>
                    </label>
                    <div class="relative">
                        <input type="password"
                               name="password"
                               id="password"
                               required
                               autocomplete="current-password"
                               class="filament-input w-full pl-3.5 pr-10 py-2.5 text-sm rounded-lg border text-slate-900">
                        <button type="button"
                                onclick="togglePasswordVisibility()"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                                title="Lihat/Sembunyikan sandi">
                            <!-- Eye Open -->
                            <svg id="eye-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <!-- Eye Closed -->
                            <svg id="eye-off-icon" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center pt-0.5">
                    <input type="checkbox"
                           name="remember"
                           id="remember"
                           value="1"
                           class="w-4 h-4 rounded border-slate-300 text-sky-500 focus:ring-sky-400 cursor-pointer">
                    <label for="remember" class="ml-2 text-xs font-medium text-slate-700 cursor-pointer select-none">
                        Ingat saya
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                            class="w-full py-2.5 px-4 bg-[#38BDF8] hover:bg-[#0ea5e9] text-white font-semibold text-sm rounded-lg shadow-sm hover:shadow transition flex items-center justify-center">
                        Masuk
                    </button>
                </div>
            </form>
        @endauth
    </div>

    <!-- Bottom Back Link -->
    <div class="mt-6 text-center">
        <a href="{{ route('home') }}"
           class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-500 hover:text-slate-800 transition">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Kembali ke Website Utama</span>
        </a>
    </div>

    <!-- Password Toggle Script -->
    <script>
        function togglePasswordVisibility() {
            const pwd = document.getElementById('password');
            const eye = document.getElementById('eye-icon');
            const eyeOff = document.getElementById('eye-off-icon');
            if (pwd.type === 'password') {
                pwd.type = 'text';
                eye.classList.add('hidden');
                eyeOff.classList.remove('hidden');
            } else {
                pwd.type = 'password';
                eye.classList.remove('hidden');
                eyeOff.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
