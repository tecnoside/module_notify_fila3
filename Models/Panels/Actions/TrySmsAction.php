<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------

use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Services\SmsService;
use Modules\UI\Services\ThemeService;

// -------- bases -----------

/**
 * Class TestAction.
 */
class TrySmsAction extends XotBasePanelAction {
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>SMS';

    /**
     * @return mixed
     */
    public function handle() {
        $drivers = [
            'netfun'=>'netfun',
            'essendex'=>'essendex',
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;

        // $view = ThemeService::getView();
        // $view = $this->panel->getView();
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
            'drivers' => $drivers,
            'driver' => $driver,
        ];

        return view($view, $view_params);
    }

    public function postHandle() {
        $data = request()->all();
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
    }
}
