<?php
/**
 * ---
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Illuminate\Support\Facades\Blade;
use Filament\Support\Facades\FilamentView;



class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

     public function panel(Panel $panel): Panel
    {
     
        
        DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'database-notifications\')'),
        );
        
        return parent::panel($panel);
    }
}
