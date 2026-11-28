<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\AnalitikKontenWidget;
use App\Filament\Widgets\PanduanCepatWidget;
use App\Filament\Widgets\ProdiStatsWidget;
use App\Http\Middleware\SetAdminLocale;
use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->spa()
            ->brandName('Portal Admin Teknik Sipil UNSIL')
            ->brandLogo(fn () => view('filament.brand-logo'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('images/logo-unsil.png'))
            ->defaultThemeMode(ThemeMode::Light)
            ->renderHook('panels::head.end', fn () => '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"><link rel="stylesheet" href="' . asset('css/admin-premium.css') . '?v=' . filemtime(public_path('css/admin-premium.css')) . '">')
            ->sidebarCollapsibleOnDesktop()
            ->resourceCreatePageRedirect('index')
            ->resourceEditPageRedirect('index')
            ->colors([
                'primary' => Color::hex('#0070BA'),
                'info' => Color::Sky,
                'success' => Color::Emerald,
                'warning' => Color::Amber,
                'danger' => Color::Rose,
            ])
            ->navigationGroups([
                NavigationGroup::make('Publikasi & Informasi'),
                NavigationGroup::make('Riset & Karya Dosen'),
                NavigationGroup::make('Layanan Akademik'),
                NavigationGroup::make('Akses & Pengaturan'),
            ])
            ->navigationItems([
                NavigationItem::make('Buka Website Publik')
                    ->url('/', shouldOpenInNewTab: true)
                    ->icon(Heroicon::OutlinedGlobeAlt)
                    ->sort(99),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                PanduanCepatWidget::class,
                ProdiStatsWidget::class,
                AnalitikKontenWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetAdminLocale::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
