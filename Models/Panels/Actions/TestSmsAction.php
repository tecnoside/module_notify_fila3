<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

<<<<<<< HEAD
// -------- services --------
=======
//-------- services --------
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

use Modules\Notify\Services\SmsService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

<<<<<<< HEAD
// -------- bases -----------
=======
//-------- bases -----------
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

/**
 * Class TestAction.
 */
<<<<<<< HEAD
class TestSmsAction extends XotBasePanelAction {
=======
class TestSmsAction extends XotBasePanelAction
{
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>SMS';

    /**
     * @return mixed
     */
<<<<<<< HEAD
    public function handle() {
=======
    public function handle()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        $drivers = [
            'netfun',
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;

        $view = ThemeService::getView();

        $view_params = [
            'view' => $view,
            'drivers' => $drivers,
            'driver' => $driver,
        ];

<<<<<<< HEAD
        return view()->make($view, $view_params);
    }

    public function postHandle() {
        $data = request()->all();
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
=======
        
        return view()->make($view, $view_params);
        
    }

    public function postHandle(){
       $data=request()->all();
       $vars=collect($data)->only(['driver','from','to','body'])->all();
       SmsService::make()->setLocalVars($vars)->send();
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    }
}
