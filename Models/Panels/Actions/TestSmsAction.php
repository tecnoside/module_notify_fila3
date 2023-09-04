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
>>>>>>> 42aa20e (.)

use Modules\Notify\Services\SmsService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

<<<<<<< HEAD
// -------- bases -----------
=======
//-------- bases -----------
>>>>>>> 42aa20e (.)

/**
 * Class TestAction.
 */
<<<<<<< HEAD
class TestSmsAction extends XotBasePanelAction {
=======
class TestSmsAction extends XotBasePanelAction
{
>>>>>>> 42aa20e (.)
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
>>>>>>> 42aa20e (.)
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
>>>>>>> 42aa20e (.)
    }
}
