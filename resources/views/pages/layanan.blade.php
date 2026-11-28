@extends('layouts.app')

@section('title', 'Layanan Terpadu & Portal Tugas Akhir | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Gerbang layanan terpadu dan portal tugas akhir terproteksi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    <!-- Hero Header -->
    <section class="bg-gradient-to-r from-[#0B2A4A] via-[#0e355c] to-[#133E6C] text-white py-12 md:py-16 relative overflow-hidden border-b border-blue-950">
        <div class="absolute inset-0 opacity-10 bg-repeat pointer-events-none mix-blend-screen"
             style="background-image: url('{{ asset('images/corak-busur-white.png') }}'); background-size: 200px auto;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('akademik') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Akademik</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Layanan Terpadu</span>
            </nav>
            <p class="text-amber-400 font-semibold text-xs uppercase tracking-wider flex items-center gap-2">
                <i class="fa-solid fa-shield-halved"></i> Akses Terpadu Sivitas Akademika
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading tracking-tight text-white mt-1">
                Layanan Terpadu &amp; Portal Tugas Akhir
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
                Pusat layanan administrasi akademik, pengajuan surat pengantar, bebas laboratorium, serta portal repositori tugas akhir resmi Teknik Sipil UNSIL.
            </p>
        </div>
    </section>

    <!-- Main Section -->
    <section class="py-12 md:py-16 bg-slate-100 border-t border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Protected Gateway Card: Portal Tugas Akhir (s.id/Tugas-akhir-TSipil) -->
            <div id="portal-tugas-akhir" class="mb-16 bg-white rounded-3xl border-2 border-blue-200 shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 px-6 py-4 sm:px-8 sm:py-5 flex flex-wrap items-center justify-between gap-4 border-b border-blue-950">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-400/20 text-amber-300 flex items-center justify-center text-lg">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-300 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span> Area Privat Sivitas Akademika
                            </span>
                            <h2 class="text-lg sm:text-xl font-black text-white font-heading">
                                Portal Berkas &amp; Formulir Tugas Akhir
                            </h2>
                        </div>
                    </div>
                    <div class="text-xs text-blue-200 bg-blue-950/60 px-3 py-1.5 rounded-full border border-blue-700/50">
                        <i class="fa-solid fa-link text-amber-400 mr-1"></i> Target: <span class="font-mono font-semibold text-white">s.id/Tugas-akhir-TSipil</span>
                    </div>
                </div>

                <div class="p-6 sm:p-8 md:p-10">
                    @if (session('info'))
                        <div class="mb-6 p-4 rounded-2xl bg-blue-50 border border-blue-200 text-blue-800 text-sm flex items-center gap-3">
                            <i class="fa-solid fa-circle-info text-blue-600 text-lg"></i>
                            <span>{{ session('info') }}</span>
                        </div>
                    @endif

                    @auth
                        <!-- STATE: SUDAH LOGIN (ROLE MAHASISWA / ADMIN / SUPER ADMIN) -->
                        <div class="bg-emerald-50/70 border border-emerald-200 rounded-3xl p-6 sm:p-8">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                <div class="flex items-start sm:items-center gap-4">
                                    <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-2xl shadow-md shrink-0">
                                        <i class="fa-solid fa-user-check"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-extrabold tracking-wide uppercase {{ Auth::user()->isSuperAdmin() ? 'bg-rose-100 text-rose-700' : (Auth::user()->isAdmin() ? 'bg-blue-100 text-blue-700' : 'bg-emerald-100 text-emerald-800') }}">
                                                {{ Auth::user()->role_label }}
                                            </span>
                                            <span class="inline-flex items-center gap-1 text-xs text-emerald-700 font-bold">
                                                <i class="fa-solid fa-circle-check text-emerald-600"></i> Terverifikasi Aktif
                                            </span>
                                        </div>
                                        <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">
                                            Halo, {{ Auth::user()->name }}
                                        </h3>
                                        <p class="text-xs sm:text-sm text-slate-600 mt-0.5">
                                            @if (Auth::user()->npm)
                                                <span class="font-mono font-bold text-slate-800">NPM: {{ Auth::user()->npm }}</span> &bull;
                                            @endif
                                            <span>{{ Auth::user()->email }}</span>
                                        </p>
                                    </div>
                                </div>

                                <form action="{{ route('layanan.logout') }}" method="POST" class="shrink-0">
                                    @csrf
                                    <button type="submit" class="px-4 py-2 text-xs font-bold text-rose-600 hover:text-rose-700 bg-white hover:bg-rose-50 border border-rose-200 rounded-xl transition flex items-center gap-1.5 shadow-sm">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar / Logout
                                    </button>
                                </form>
                            </div>

                            <hr class="my-6 border-emerald-200/60">

                            @if (session('login_success'))
                                <div class="mb-6 p-4 rounded-2xl bg-emerald-100/80 border border-emerald-300 text-emerald-900 text-sm font-semibold flex items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-emerald-600 text-lg"></i>
                                    <span>{{ session('login_success') }}</span>
                                </div>
                            @endif

                            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                                <div class="space-y-2 max-w-xl">
                                    <p class="text-sm text-slate-700 leading-relaxed">
                                        Autentikasi berhasil. Anda memiliki hak akses penuh untuk membuka Google Drive resmi repositori berkas Tugas Akhir, formulir pendaftaran sidang, surat bimbingan, dan pedoman penulisan.
                                    </p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500">
                                        <span class="flex items-center gap-1"><i class="fa-solid fa-shield-heart text-emerald-600"></i> Sesi Aman</span>
                                        <span class="flex items-center gap-1"><i class="fa-solid fa-clock text-blue-600"></i> Akses 24 Jam</span>
                                    </div>
                                </div>

                                <div class="shrink-0">
                                    <a href="https://s.id/Tugas-akhir-TSipil" target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center justify-center gap-3 w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 hover:from-emerald-500 hover:to-teal-500 text-white font-black rounded-2xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-0.5 text-base group">
                                        <i class="fa-solid fa-folder-open text-amber-300 text-xl group-hover:scale-110 transition"></i>
                                        <span>Buka Portal Tugas Akhir</span>
                                        <i class="fa-solid fa-arrow-up-right-from-square text-xs opacity-75 group-hover:translate-x-0.5 transition"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- STATE: BELUM LOGIN (PROTECTED LOGIN FORM) -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <div class="lg:col-span-7 space-y-4">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold">
                                    <i class="fa-solid fa-lock text-amber-600"></i> Akses Dibatasi untuk Menjaga Privasi
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading">
                                    Masuk untuk Membuka Tautan Tugas Akhir
                                </h3>
                                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                                    Untuk mencegah penyalahgunaan formulir dan melindungi privasi dokumen bimbingan tugas akhir mahasiswa Teknik Sipil UNSIL, tautan langsung ke repositori <strong class="text-slate-800">s.id/Tugas-akhir-TSipil</strong> hanya dapat diakses setelah melakukan verifikasi akun.
                                </p>
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs">
                                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-2.5">
                                        <i class="fa-solid fa-graduation-cap text-blue-600 text-base mt-0.5"></i>
                                        <div>
                                            <p class="font-bold text-slate-800">Khusus Mahasiswa</p>
                                            <p class="text-slate-500 text-[11px] mt-0.5">Gunakan NPM &amp; password akun Anda yang terdaftar.</p>
                                        </div>
                                    </div>
                                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-2.5">
                                        <i class="fa-solid fa-user-tie text-emerald-600 text-base mt-0.5"></i>
                                        <div>
                                            <p class="font-bold text-slate-800">Dosen &amp; Staf</p>
                                            <p class="text-slate-500 text-[11px] mt-0.5">Dapat login menggunakan email resmi atau akun admin.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-2xl bg-blue-50/70 border border-blue-200 text-xs text-blue-900 flex items-start gap-2.5">
                                    <i class="fa-solid fa-circle-question text-blue-600 text-base mt-0.5"></i>
                                    <div>
                                        <p class="font-bold">Belum memiliki akun atau lupa password?</p>
                                        <p class="text-blue-800 text-[11px] mt-0.5">
                                            Silakan hubungi staf Administrasi Program Studi di Gedung FT Kampus Mugarsari atau hubungi email resmi prodi di <a href="mailto:sipil@unsil.ac.id" class="underline font-bold">sipil@unsil.ac.id</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-5">
                                <div class="bg-gradient-to-b from-slate-50 to-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-md">
                                    <div class="mb-5">
                                        <h4 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                                            <i class="fa-solid fa-right-to-bracket text-blue-600"></i> Form Verifikasi Akun
                                        </h4>
                                        <p class="text-xs text-slate-500 mt-1">Masukkan identitas sivitas akademika Anda</p>
                                    </div>

                                    @if (session('login_error'))
                                        <div class="mb-4 p-3.5 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs font-semibold flex items-center gap-2">
                                            <i class="fa-solid fa-triangle-exclamation text-rose-500"></i>
                                            <span>{{ session('login_error') }}</span>
                                        </div>
                                    @endif

                                    <form action="{{ route('layanan.login') }}" method="POST" class="space-y-4">
                                        @csrf
                                        <div>
                                            <label for="login" class="block text-xs font-bold text-slate-700 mb-1">
                                                NPM atau Alamat Email <span class="text-rose-500">*</span>
                                            </label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 text-xs">
                                                    <i class="fa-solid fa-id-card"></i>
                                                </div>
                                                <input type="text" name="login" id="login" value="{{ old('login') }}" required
                                                       placeholder="Contoh: 217002001 atau nama@unsil.ac.id"
                                                       class="w-full pl-9 pr-3 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition bg-white">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="password" class="block text-xs font-bold text-slate-700 mb-1">
                                                Password Akun <span class="text-rose-500">*</span>
                                            </label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 text-xs">
                                                    <i class="fa-solid fa-key"></i>
                                                </div>
                                                <input type="password" name="password" id="password" required
                                                       placeholder="Masukkan password Anda"
                                                       class="w-full pl-9 pr-3 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition bg-white">
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-between text-xs pt-1">
                                            <label class="flex items-center gap-2 text-slate-600 cursor-pointer">
                                                <input type="checkbox" name="remember" value="1" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                                                <span>Ingat Sesi Saya</span>
                                            </label>
                                        </div>

                                        <button type="submit"
                                                class="w-full py-3 px-4 bg-blue-700 hover:bg-blue-800 text-white font-bold text-xs rounded-xl shadow-md hover:shadow-lg transition flex items-center justify-center gap-2">
                                            <i class="fa-solid fa-lock-open"></i>
                                            <span>Masuk &amp; Buka Tautan Tugas Akhir</span>
                                        </button>
                                    </form>

                                    <div class="mt-4 pt-3 border-t border-slate-100 text-center">
                                        <p class="text-[11px] text-slate-400">
                                            Akun Demo Mahasiswa: <code class="font-bold text-slate-700 bg-slate-100 px-1.5 py-0.5 rounded">217002001</code> / sandi: <code class="font-bold text-slate-700 bg-slate-100 px-1.5 py-0.5 rounded">mahasiswa123</code>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Other Academic Administration Services -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-blue-700 font-bold uppercase text-xs tracking-wider">Layanan Persuratan &amp; Administrasi</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1 font-heading">Layanan Administrasi Akademik</h2>
                <div class="w-16 h-1 bg-amber-500 mx-auto mt-3 rounded-full"></div>
                <p class="text-slate-600 mt-2 text-xs sm:text-sm leading-relaxed">
                    Alur permohonan persuratan cepat dan akurat untuk menunjang kelancaran studi mahasiswa dan alumni.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Surat Pengantar & Izin Survei -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Surat Pengantar &amp; Izin Survei</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Pengurusan surat permohonan izin pengambilan data lapangan, penelitian skripsi/tugas akhir, dan izin pelaksanaan Kerja Praktik (KP) ke instansi pemerintah atau kontraktor swasta.
                        </p>
                        <div class="mt-4 p-3 bg-blue-50/60 rounded-xl text-xs text-blue-950 font-medium">
                            <span class="font-bold">Estimasi:</span> 1-2 hari kerja setelah verifikasi berkas lengkap.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="mailto:sipil@unsil.ac.id" class="text-xs font-bold text-blue-700 hover:text-blue-900 flex items-center gap-1.5">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i> Ajukan Permohonan
                        </a>
                    </div>
                </div>

                <!-- Bebas Laboratorium -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Bebas Laboratorium</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Penerbitan surat keterangan bebas pinjam peralatan laboratorium dan ruang praktikum sebagai syarat wajib pendaftaran sidang yudisium dan kelulusan sarjana teknik.
                        </p>
                        <div class="mt-4 p-3 bg-amber-50/60 rounded-xl text-xs text-amber-950 font-medium">
                            <span class="font-bold">Persyaratan:</span> Tanda tangan verifikasi dari 6 kepala lab.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('fasilitas') }}" class="text-xs font-bold text-amber-700 hover:text-amber-900 flex items-center gap-1.5">
                            <i class="fa-solid fa-flask-vial text-[10px]"></i> Cek Kontak Laboratorium
                        </a>
                    </div>
                </div>

                <!-- Legalisir Dokumen -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-md hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Legalisir Dokumen</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Pelayanan verifikasi keabsahan dan legalisir ijazah sarjana teknik sipil, transkrip nilai akademik, serta sertifikat akreditasi program studi untuk keperluan kerja atau studi lanjut.
                        </p>
                        <div class="mt-4 p-3 bg-emerald-50/60 rounded-xl text-xs text-emerald-950 font-medium">
                            <span class="font-bold">Pelayanan:</span> Tatap muka di Loket Akademik FT UNSIL Mugarsari.
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <span class="text-xs font-bold text-emerald-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-clock text-[10px]"></i> Senin - Jumat (08.00 - 15.00 WIB)
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
