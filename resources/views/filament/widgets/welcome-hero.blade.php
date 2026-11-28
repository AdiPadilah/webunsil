@php
    use App\Models\SiteSetting;
    use Filament\Support\Icons\Heroicon;
    use Filament\View\PanelsIconAlias;

    $user = filament()->auth()->user();
    $setting = SiteSetting::current();
    $name = filament()->getUserName($user);
    $initial = mb_strtoupper(mb_substr(trim((string) $name), 0, 1)) ?: 'A';
    $roleLabel = method_exists($user, 'getRoleLabelAttribute') ? $user->role_label : 'Administrator';
@endphp

<x-filament-widgets::widget class="adm-hero-widget">
    <div class="adm-hero-card">
        <div class="adm-hero-glow" aria-hidden="true"></div>

        <div class="adm-hero-left">
            <div class="adm-hero-avatar-wrap">
                <div class="adm-hero-avatar">{{ $initial }}</div>
                <span class="adm-hero-status-dot" title="Sesi Aktif"></span>
            </div>

            <div class="adm-hero-meta">
                <div class="adm-hero-badges">
                    <span class="adm-hero-pill adm-hero-pill-primary">{{ $roleLabel }}</span>
                    <span class="adm-hero-pill">Akreditasi {{ $setting->akreditasi_peringkat }}</span>
                    <span class="adm-hero-pill">{{ now()->translatedFormat('d M Y') }}</span>
                </div>
                <h2 class="adm-hero-title">Selamat Datang, {{ $name }}</h2>
                <p class="adm-hero-sub">
                    Kendali konten Program Studi S-1 Teknik Sipil Universitas Siliwangi secara real-time.
                </p>
            </div>
        </div>

        <div class="adm-hero-actions">
            <x-filament::button
                tag="a"
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                color="gray"
                :icon="Heroicon::OutlinedGlobeAlt"
            >
                Buka Website
            </x-filament::button>

            <form action="{{ filament()->getLogoutUrl() }}" method="post">
                @csrf
                <x-filament::button
                    color="primary"
                    :icon="Heroicon::ArrowLeftEndOnRectangle"
                    :icon-alias="PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON"
                    tag="button"
                    type="submit"
                >
                    {{ __('filament-panels::widgets/account-widget.actions.logout.label') }}
                </x-filament::button>
            </form>
        </div>
    </div>
</x-filament-widgets::widget>
