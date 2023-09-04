<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------
<<<<<<< HEAD
=======
//-------- services --------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

use Modules\Notify\Services\SmsService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------
<<<<<<< HEAD
=======
//-------- bases -----------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

/**
 * Class TestAction.
 */
<<<<<<< HEAD:Models/Panels/Actions/TestSmsAction.php
class TestSmsAction extends XotBasePanelAction {
<<<<<<< HEAD
=======
class TestSmsAction extends XotBasePanelAction
{
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
class TrySmsAction extends XotBasePanelAction {
>>>>>>> 64529a0 (up):Models/Panels/Actions/TrySmsAction.php
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>SMS';

    /**
     * @return mixed
     */
    public function handle() {
<<<<<<< HEAD
=======
    public function handle()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
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

        return view()->make($view, $view_params);
    }

    public function postHandle() {
        $data = request()->all();
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
<<<<<<< HEAD
=======
        
        return view()->make($view, $view_params);
        
    }

    public function postHandle(){
       $data=request()->all();
       $vars=collect($data)->only(['driver','from','to','body'])->all();
       SmsService::make()->setLocalVars($vars)->send();
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
    }
}
