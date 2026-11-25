<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-900">{{ $heading ?? 'Daftar Jadwal Sidang Mendatang' }}</h2>
            <p class="text-xs text-slate-500 mt-1">{{ $subheading ?? 'Jadwal resmi seminar proposal, seminar hasil, dan sidang akhir skripsi' }}</p>
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
                    <th class="p-4 sm:px-6">Tahapan</th>
                    <th class="p-4 sm:px-6">Judul Skripsi</th>
                    <th class="p-4 sm:px-6">Dosen Pembimbing</th>
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
                    <td class="p-4 sm:px-6">
                        <span class="inline-block px-2.5 py-1 rounded-md text-[11px] font-semibold 
                            {{ $s->type == 'Sidang Akhir Skripsi' ? 'bg-blue-100 text-blue-800' : ($s->type == 'Seminar Hasil' ? 'bg-amber-100 text-amber-800' : 'bg-purple-100 text-purple-800') }}">
                            {{ $s->type }}
                        </span>
                    </td>
                    <td class="p-4 sm:px-6 max-w-xs">
                        <p class="text-slate-800 font-medium leading-relaxed">{{ $s->title }}</p>
                    </td>
                    <td class="p-4 sm:px-6 text-slate-600">
                        <div class="font-medium">1. {{ $s->supervisor_1 }}</div>
                        @if($s->supervisor_2)
                        <div class="text-[11px] text-slate-500">2. {{ $s->supervisor_2 }}</div>
                        @endif
                    </td>
                    <td class="p-4 sm:px-6">
                        <div class="font-bold text-slate-900">{{ $s->date_time ? $s->date_time->translatedFormat('d M Y, H:i') : '-' }} WIB</div>
                        <div class="text-[11px] text-blue-700 font-medium flex items-center gap-1 mt-0.5">
                            <i class="fa-solid fa-location-dot text-[10px]" aria-hidden="true"></i> {{ $s->room }}
                        </div>
                    </td>
                    <td class="p-4 sm:px-6 text-center">
                        <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold 
                            {{ $s->status == 'Terjadwal' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-slate-100 text-slate-600' }}">
                            {{ $s->status }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-8 text-center text-slate-500">
                        {{ $emptyMessage ?? 'Belum ada jadwal sidang yang dijadwalkan saat ini.' }}
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
