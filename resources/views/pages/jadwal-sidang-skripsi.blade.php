@extends('layouts.app')

@section('title', 'Jadwal Sidang Skripsi | Program Studi S-1 Teknik Sipil FT UNSIL')
@section('meta_description', 'Jadwal pelaksanaan Sidang Skripsi Program Studi S-1 Teknik Sipil Fakultas Teknik Universitas Siliwangi.')

@section('content')
    @php
        $calendarEvents = $schedules->filter(fn ($s) => $s->date_time !== null)->map(function ($s) {
            return [
                'id' => $s->id,
                'student_name' => $s->student_name,
                'student_id' => $s->student_id,
                'type' => $s->type,
                'title' => $s->title,
                'supervisor_1' => $s->supervisor_1,
                'supervisor_2' => $s->supervisor_2,
                'examiners' => collect([$s->examiner_1, $s->examiner_2])->filter()->implode(', '),
                'date' => $s->date_time->format('Y-m-d'),
                'time' => $s->date_time->format('H:i'),
                'date_label' => $s->date_time->translatedFormat('l, d F Y'),
                'room' => $s->room,
                'status' => $s->status,
                'status_badge_class' => $s->status_badge_class,
            ];
        })->values();

        $initialDate = $schedules->first(fn ($s) => $s->date_time && $s->date_time->isFuture())?->date_time
            ?? $schedules->first(fn ($s) => $s->date_time !== null)?->date_time
            ?? now();
        $initialYear = (int) $initialDate->format('Y');
        $initialMonth = (int) $initialDate->format('n') - 1;
    @endphp

    <section class="bg-[#0B2A4A] text-white py-12 md:py-16 border-b border-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-amber-400 mb-3 font-medium">
                <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1.5 text-slate-300 hover:text-amber-400 transition"><i class="fa-solid fa-house text-[10px]"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <a href="{{ route('mahasiswa-alumni') }}" class="hover:underline text-slate-300 hover:text-amber-400 transition">Mahasiswa &amp; Alumni</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
                <span class="text-slate-200">Jadwal Sidang Skripsi</span>
            </nav>
            <p class="text-[#0070BA] font-medium text-xs">
                Informasi Sidang
            </p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight text-white mt-1">
                Jadwal Sidang Skripsi &amp; Seminar
            </h1>
        </div>
    </section>

    <section class="py-10 lg:py-14 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            {{-- Kalender Event Card --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                {{-- Header & Controls --}}
                <div class="p-5 sm:p-6 border-b border-slate-200 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div>
                        <div class="flex flex-wrap items-center gap-2.5">
                            <h2 class="text-xl font-bold text-slate-900">Kalender Event Sidang &amp; Seminar</h2>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Update Real-time dari Prodi
                            </span>
                        </div>
                        <p class="text-xs text-slate-500 mt-1">Klik agenda pada tanggal untuk melihat rincian mahasiswa, pembimbing, penguji, dan ruangan.</p>
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        {{-- View Switcher --}}
                        <div class="inline-flex rounded-lg border border-slate-200 bg-slate-100 p-0.5" role="tablist" aria-label="Mode tampilan jadwal">
                            <button type="button" id="btn-view-calendar" class="px-3 py-1.5 rounded-md text-xs font-semibold bg-white text-[#0B2A4A] shadow-sm transition flex items-center gap-1.5">
                                <i class="fa-regular fa-calendar"></i> Kalender
                            </button>
                            <button type="button" id="btn-view-list" class="px-3 py-1.5 rounded-md text-xs font-semibold text-slate-600 hover:text-slate-900 transition flex items-center gap-1.5">
                                <i class="fa-solid fa-list-ul"></i> Daftar
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Filter Tahapan (Legend) & Navigasi Bulan --}}
                <div id="calendar-toolbar" class="px-5 sm:px-6 py-4 bg-slate-50/70 border-b border-slate-200 flex flex-col md:flex-row md:items-center justify-between gap-3">
                    <div class="flex flex-wrap items-center gap-2" id="calendar-type-filters">
                        <button type="button" data-filter="all" class="filter-pill active px-3 py-1.5 rounded-full text-xs font-semibold bg-[#0B2A4A] text-white transition">
                            Semua ({{ $schedules->count() }})
                        </button>
                        <button type="button" data-filter="Seminar Proposal" class="filter-pill px-3 py-1.5 rounded-full text-xs font-semibold bg-purple-50 text-purple-800 border border-purple-200 hover:bg-purple-100 transition inline-flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-purple-600"></span>
                            Seminar Proposal ({{ $schedules->where('type', 'Seminar Proposal')->count() }})
                        </button>
                        <button type="button" data-filter="Seminar Hasil" class="filter-pill px-3 py-1.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-800 border border-amber-200 hover:bg-amber-100 transition inline-flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                            Seminar Hasil ({{ $schedules->where('type', 'Seminar Hasil')->count() }})
                        </button>
                        <button type="button" data-filter="Sidang Akhir Skripsi" class="filter-pill px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-800 border border-blue-200 hover:bg-blue-100 transition inline-flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            Sidang Akhir Skripsi ({{ $schedules->where('type', 'Sidang Akhir Skripsi')->count() }})
                        </button>
                    </div>

                    <div class="flex items-center gap-2 self-start md:self-auto">
                        <button type="button" id="cal-prev" class="w-8 h-8 rounded-lg border border-slate-200 bg-white text-slate-700 hover:bg-slate-100 flex items-center justify-center transition" aria-label="Bulan sebelumnya">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>
                        <div id="cal-month-label" class="min-w-[145px] text-center text-sm font-bold text-[#0B2A4A]"></div>
                        <button type="button" id="cal-next" class="w-8 h-8 rounded-lg border border-slate-200 bg-white text-slate-700 hover:bg-slate-100 flex items-center justify-center transition" aria-label="Bulan berikutnya">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                        <button type="button" id="cal-today" class="ml-1 px-3 h-8 rounded-lg border border-slate-200 bg-white text-xs font-semibold text-slate-700 hover:bg-slate-100 transition">
                            Hari Ini
                        </button>
                    </div>
                </div>

                {{-- Calendar Grid View --}}
                <div id="calendar-view-panel" class="p-4 sm:p-6">
                    <div class="overflow-x-auto">
                        <div class="min-w-[720px] border border-slate-200 rounded-xl overflow-hidden">
                            {{-- Day Headers --}}
                            <div class="grid grid-cols-7 bg-[#0B2A4A] text-white text-[11px] font-bold uppercase tracking-wider text-center">
                                <div class="py-2.5 border-r border-blue-900/60">Minggu</div>
                                <div class="py-2.5 border-r border-blue-900/60">Senin</div>
                                <div class="py-2.5 border-r border-blue-900/60">Selasa</div>
                                <div class="py-2.5 border-r border-blue-900/60">Rabu</div>
                                <div class="py-2.5 border-r border-blue-900/60">Kamis</div>
                                <div class="py-2.5 border-r border-blue-900/60">Jumat</div>
                                <div class="py-2.5">Sabtu</div>
                            </div>
                            {{-- Days Grid --}}
                            <div id="cal-grid" class="grid grid-cols-7 bg-slate-200 gap-px"></div>
                        </div>
                    </div>

                    {{-- Agenda Bulan Ini (Ringkasan Interaktif di bawah kalender) --}}
                    <div class="mt-6">
                        <h3 class="text-sm font-bold text-slate-800 mb-3 flex items-center gap-2">
                            <i class="fa-regular fa-calendar-check text-[#0070BA]"></i>
                            <span>Agenda pada <span id="cal-agenda-month-name">bulan ini</span></span>
                        </h3>
                        <div id="cal-month-agenda" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3"></div>
                    </div>
                </div>

                {{-- List / Table View (also keeps full SSR rows in DOM) --}}
                <div id="list-view-panel" class="hidden">
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
                                <tr class="hover:bg-slate-50/80 transition schedule-row" data-type="{{ $s->type }}">
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
                                        @if($s->examiner_1 || $s->examiner_2)
                                        <div class="text-[11px] text-slate-500 mt-1">Penguji: {{ collect([$s->examiner_1, $s->examiner_2])->filter()->implode(', ') }}</div>
                                        @endif
                                    </td>
                                    <td class="p-4 sm:px-6">
                                        <div class="font-bold text-slate-900">{{ $s->date_time ? $s->date_time->translatedFormat('d M Y, H:i') : '-' }} WIB</div>
                                        <div class="text-[11px] text-blue-700 font-medium flex items-center gap-1 mt-0.5">
                                            <i class="fa-solid fa-location-dot text-[10px]"></i> {{ $s->room }}
                                        </div>
                                    </td>
                                    <td class="p-4 sm:px-6 text-center">
                                        <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold {{ $s->status_badge_class }}">
                                            {{ $s->status }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="p-8 text-center text-slate-500">
                                        Belum ada jadwal sidang yang dijadwalkan saat ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Detail Event --}}
    <div id="event-detail-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/60 backdrop-blur-xs p-4" role="dialog" aria-modal="true" aria-labelledby="modal-event-title">
        <div class="bg-white rounded-2xl max-w-lg w-full shadow-2xl border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 bg-[#0B2A4A] text-white flex items-center justify-between">
                <div>
                    <span id="modal-event-type" class="inline-block px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-white/15 text-amber-300"></span>
                    <h3 id="modal-event-title" class="text-lg font-bold mt-1">Detail Jadwal Sidang</h3>
                </div>
                <button type="button" id="modal-event-close" class="w-8 h-8 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 flex items-center justify-center transition" aria-label="Tutup modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-6 space-y-4 text-sm">
                <div>
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Mahasiswa</div>
                    <div id="modal-student-name" class="font-bold text-slate-900 text-base"></div>
                    <div id="modal-student-id" class="text-xs text-slate-500"></div>
                </div>
                <div>
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Judul Skripsi / Topik</div>
                    <p id="modal-thesis-title" class="text-slate-800 font-medium leading-relaxed mt-0.5"></p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 border-t border-slate-100">
                    <div>
                        <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Waktu</div>
                        <div id="modal-datetime" class="font-semibold text-slate-800 mt-0.5"></div>
                    </div>
                    <div>
                        <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Ruangan &amp; Status</div>
                        <div id="modal-room" class="font-semibold text-[#0070BA] mt-0.5"></div>
                        <span id="modal-status" class="inline-block mt-1 px-2 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200"></span>
                    </div>
                </div>
                <div class="pt-2 border-t border-slate-100">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Pembimbing &amp; Penguji</div>
                    <div id="modal-supervisors" class="text-xs text-slate-700 mt-1 space-y-0.5"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const events = @json($calendarEvents);
            const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            let currentYear = {{ $initialYear }};
            let currentMonth = {{ $initialMonth }};
            let activeFilter = 'all';

            const gridEl = document.getElementById('cal-grid');
            const monthLabelEl = document.getElementById('cal-month-label');
            const agendaMonthEl = document.getElementById('cal-agenda-month-name');
            const agendaListEl = document.getElementById('cal-month-agenda');
            const calendarPanel = document.getElementById('calendar-view-panel');
            const listPanel = document.getElementById('list-view-panel');
            const btnCalendar = document.getElementById('btn-view-calendar');
            const btnList = document.getElementById('btn-view-list');

            const modal = document.getElementById('event-detail-modal');
            const typeStyle = (type) => {
                if (type === 'Sidang Akhir Skripsi') {
                    return {
                        pill: 'bg-blue-600 text-white hover:bg-blue-700',
                        badge: 'bg-blue-100 text-blue-800',
                        border: 'border-l-blue-600',
                    };
                }
                if (type === 'Seminar Hasil') {
                    return {
                        pill: 'bg-amber-500 text-white hover:bg-amber-600',
                        badge: 'bg-amber-100 text-amber-800',
                        border: 'border-l-amber-500',
                    };
                }
                return {
                    pill: 'bg-purple-600 text-white hover:bg-purple-700',
                    badge: 'bg-purple-100 text-purple-800',
                    border: 'border-l-purple-600',
                };
            };

            const openModal = (ev) => {
                document.getElementById('modal-event-type').textContent = ev.type;
                document.getElementById('modal-student-name').textContent = ev.student_name;
                document.getElementById('modal-student-id').textContent = 'NIM: ' + ev.student_id;
                document.getElementById('modal-thesis-title').textContent = ev.title;
                document.getElementById('modal-datetime').textContent = `${ev.date_label} • ${ev.time} WIB`;

                const roomEl = document.getElementById('modal-room');
                roomEl.replaceChildren();
                const roomIcon = document.createElement('i');
                roomIcon.className = 'fa-solid fa-location-dot text-[10px] mr-1';
                roomEl.appendChild(roomIcon);
                roomEl.appendChild(document.createTextNode(ev.room || ''));

                const statusEl = document.getElementById('modal-status');
                statusEl.className = `inline-block mt-1 px-2 py-0.5 rounded-full text-[11px] font-bold ${ev.status_badge_class || 'bg-slate-100 text-slate-600'}`;
                statusEl.textContent = ev.status;

                const supContainer = document.getElementById('modal-supervisors');
                supContainer.replaceChildren();
                const appendRole = (label, value) => {
                    const row = document.createElement('div');
                    const strong = document.createElement('strong');
                    strong.textContent = label + ' ';
                    row.appendChild(strong);
                    row.appendChild(document.createTextNode(value));
                    supContainer.appendChild(row);
                };
                appendRole('Pembimbing 1:', ev.supervisor_1 || '-');
                if (ev.supervisor_2) appendRole('Pembimbing 2:', ev.supervisor_2);
                if (ev.examiners) appendRole('Penguji:', ev.examiners);

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            };

            const closeModal = () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            };

            document.getElementById('modal-event-close').addEventListener('click', closeModal);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });

            const renderCalendar = () => {
                const label = `${monthNames[currentMonth]} ${currentYear}`;
                monthLabelEl.textContent = label;
                agendaMonthEl.textContent = label;

                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
                const totalCells = Math.ceil((firstDay + daysInMonth) / 7) * 7;

                const today = new Date();
                const todayKey = `${today.getFullYear()}-${String(today.getMonth() + 1).padStart(2, '0')}-${String(today.getDate()).padStart(2, '0')}`;
                const monthPrefix = `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}`;

                const filteredEvents = events.filter((ev) => activeFilter === 'all' || ev.type === activeFilter);
                const eventsByDate = {};
                filteredEvents.forEach((ev) => {
                    if (!eventsByDate[ev.date]) eventsByDate[ev.date] = [];
                    eventsByDate[ev.date].push(ev);
                });

                gridEl.innerHTML = '';

                for (let i = 0; i < totalCells; i++) {
                    const dayNum = i - firstDay + 1;
                    const cell = document.createElement('div');

                    if (dayNum < 1 || dayNum > daysInMonth) {
                        cell.className = 'min-h-[108px] bg-slate-50/80 p-2';
                        gridEl.appendChild(cell);
                        continue;
                    }

                    const dateKey = `${monthPrefix}-${String(dayNum).padStart(2, '0')}`;
                    const isToday = dateKey === todayKey;
                    const dayEvents = eventsByDate[dateKey] || [];

                    cell.className = `min-h-[108px] p-2 flex flex-col gap-1 transition ${isToday ? 'bg-blue-50/70 ring-1 ring-inset ring-[#0070BA]' : 'bg-white hover:bg-slate-50/60'}`;

                    const header = document.createElement('div');
                    header.className = 'flex items-center justify-between';
                    header.innerHTML = `<span class="text-xs font-bold ${isToday ? 'w-6 h-6 rounded-full bg-[#0070BA] text-white inline-flex items-center justify-center' : 'text-slate-700'}">${dayNum}</span>` +
                        (dayEvents.length > 0 ? `<span class="text-[10px] font-semibold text-slate-400">${dayEvents.length} agenda</span>` : '');
                    cell.appendChild(header);

                    dayEvents.forEach((ev) => {
                        const style = typeStyle(ev.type);
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = `w-full text-left px-2 py-1 rounded-md text-[11px] font-semibold leading-tight shadow-xs transition cursor-pointer ${style.pill}`;
                        btn.innerHTML = `<div class="truncate">${ev.time} • ${ev.student_name}</div><div class="text-[10px] opacity-90 truncate">${ev.type}</div>`;
                        btn.addEventListener('click', () => openModal(ev));
                        cell.appendChild(btn);
                    });

                    gridEl.appendChild(cell);
                }

                // Render agenda bulan ini
                const monthEvents = filteredEvents.filter((ev) => ev.date.startsWith(monthPrefix));
                agendaListEl.innerHTML = '';

                if (monthEvents.length === 0) {
                    agendaListEl.innerHTML = `<div class="col-span-full rounded-xl border border-dashed border-slate-200 bg-slate-50 p-6 text-center text-xs text-slate-500">Tidak ada jadwal sidang atau seminar pada bulan ${label}.</div>`;
                    return;
                }

                monthEvents.forEach((ev) => {
                    const style = typeStyle(ev.type);
                    const card = document.createElement('button');
                    card.type = 'button';
                    card.className = `text-left rounded-xl border border-slate-200 border-l-4 ${style.border} bg-white p-4 hover:shadow-sm transition flex flex-col gap-1.5 cursor-pointer`;
                    card.innerHTML = `
                        <div class="flex items-center justify-between gap-2">
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold ${style.badge}">${ev.type}</span>
                            <span class="text-[11px] font-bold text-slate-700">${ev.date.slice(8, 10)} ${monthNames[currentMonth].slice(0, 3)} • ${ev.time} WIB</span>
                        </div>
                        <div class="font-bold text-sm text-slate-900">${ev.student_name} <span class="text-xs font-normal text-slate-500">(${ev.student_id})</span></div>
                        <div class="text-xs text-slate-600 line-clamp-2">${ev.title}</div>
                        <div class="text-[11px] text-[#0070BA] font-medium mt-auto pt-1"><i class="fa-solid fa-location-dot text-[10px] mr-1"></i>${ev.room}</div>
                    `;
                    card.addEventListener('click', () => openModal(ev));
                    agendaListEl.appendChild(card);
                });
            };

            document.getElementById('cal-prev').addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar();
            });

            document.getElementById('cal-next').addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar();
            });

            document.getElementById('cal-today').addEventListener('click', () => {
                const now = new Date();
                currentYear = now.getFullYear();
                currentMonth = now.getMonth();
                renderCalendar();
            });

            document.querySelectorAll('#calendar-type-filters .filter-pill').forEach((btn) => {
                btn.addEventListener('click', () => {
                    activeFilter = btn.dataset.filter;
                    document.querySelectorAll('#calendar-type-filters .filter-pill').forEach((b) => {
                        b.classList.remove('bg-[#0B2A4A]', 'text-white', 'ring-2', 'ring-[#0B2A4A]');
                    });
                    if (activeFilter === 'all') {
                        btn.classList.add('bg-[#0B2A4A]', 'text-white');
                    } else {
                        btn.classList.add('ring-2', 'ring-[#0B2A4A]');
                    }

                    document.querySelectorAll('.schedule-row').forEach((row) => {
                        row.classList.toggle('hidden', activeFilter !== 'all' && row.dataset.type !== activeFilter);
                    });

                    renderCalendar();
                });
            });

            btnCalendar.addEventListener('click', () => {
                calendarPanel.classList.remove('hidden');
                listPanel.classList.add('hidden');
                btnCalendar.classList.add('bg-white', 'text-[#0B2A4A]', 'shadow-sm');
                btnCalendar.classList.remove('text-slate-600');
                btnList.classList.remove('bg-white', 'text-[#0B2A4A]', 'shadow-sm');
                btnList.classList.add('text-slate-600');
            });

            btnList.addEventListener('click', () => {
                calendarPanel.classList.add('hidden');
                listPanel.classList.remove('hidden');
                btnList.classList.add('bg-white', 'text-[#0B2A4A]', 'shadow-sm');
                btnList.classList.remove('text-slate-600');
                btnCalendar.classList.remove('bg-white', 'text-[#0B2A4A]', 'shadow-sm');
                btnCalendar.classList.add('text-slate-600');
            });

            renderCalendar();
        })();
    </script>
@endsection
