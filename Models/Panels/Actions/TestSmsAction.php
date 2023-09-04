<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

<<<<<<< HEAD
//-------- services --------
=======
// -------- services --------
>>>>>>> 0d776db (up)

use Modules\Notify\Services\SmsService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

<<<<<<< HEAD
//-------- bases -----------
=======
// -------- bases -----------
>>>>>>> 0d776db (up)

/**
 * Class TestAction.
 */
<<<<<<< HEAD
class TestSmsAction extends XotBasePanelAction
{
=======
class TestSmsAction extends XotBasePanelAction {
>>>>>>> 0d776db (up)
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>SMS';

    /**
     * @return mixed
     */
<<<<<<< HEAD
    public function handle()
    {
=======
    public function handle() {
>>>>>>> 0d776db (up)
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

    public function postHandle(){
       $data=request()->all();
       $vars=collect($data)->only(['driver','from','to','body'])->all();
       SmsService::make()->setLocalVars($vars)->send();
=======
        return view()->make($view, $view_params);
    }

    public function postHandle() {
        $data = request()->all();
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
>>>>>>> 0d776db (up)
    }
}
