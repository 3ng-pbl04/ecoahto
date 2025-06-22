<?php

namespace App\Providers\Filament;

use App\Filament\Admin\Widgets\Produkinfo;
use App\Filament\Admin\Widgets\StatsOverview;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Pages\Dashboard;
use App\Filament\Admin\Widgets\ProdukOverview;
use App\Filament\Admin\Widgets\PengaduanTerbaru;
use App\Filament\Admin\Widgets\PengaduanChart;
use App\Filament\Admin\Widgets\QuickActions;
use App\Models\Pengaduan;
use App\Models\Produk;
// use Filament\Widgets\WidgetGroup; // Removed because WidgetGroup does not exist in Filament


class Trash2MoveAdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('trash2move')
            ->path('admin-trash')
            ->brandName('Trash2Move')
            ->login()
            ->authGuard('trash')
            ->discoverResources(app_path('Filament/Resources/Trash2Move'), 'App\\Filament\\Resources\\Trash2Move')
            ->discoverPages(app_path('Filament/Pages/Trash2Move'), 'App\\Filament\\Pages\\Trash2Move')
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\\Filament\\Admin\\Widgets')
->widgets([
    StatsOverview::class,      // Atas, lebar penuh
    ProdukOverview::class,     // Tengah, tiga sejajar
    ProdukInfo::class,
    PengaduanTerbaru::class,
    PengaduanChart::class,     // Bawah, grafik lebar penuh
    QuickActions::class, // Uncomment if you have a QuickActions widget
])

            ->pages([
                Dashboard::class,
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
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
