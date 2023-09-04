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

use Modules\Notify\Services\MailService;
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
class TestMailAction extends XotBasePanelAction {
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>Mail';

    /**
     * @return mixed
     */
    public function handle() {
        $drivers = [
            'duocircle',
<<<<<<< HEAD
=======
            'mailtrap',
>>>>>>> 0d776db (up)
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
        //return view()->make($view, $view_params);
        //Parameter #1 $view of function view expects view-string|null, mixed given.
        //The custom 'view-string' type class. It's a subset of the string type. Every string that passes the
        //view()->exists($string) test is a valid view-string type.

        //if (view()->exists($view)) {
        return view()->make($view, $view_params);
        //}

        //return 'not exists ['.$view.']';
=======
        // return view()->make($view, $view_params);
        // Parameter #1 $view of function view expects view-string|null, mixed given.
        // The custom 'view-string' type class. It's a subset of the string type. Every string that passes the
        // view()->exists($string) test is a valid view-string type.

        // if (view()->exists($view)) {
        return view()->make($view, $view_params);
        // }

        // return 'not exists ['.$view.']';
>>>>>>> 0d776db (up)
    }

    /**
     * ---.
     */
    public function postHandle() {
        $data = request()->all();
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        MailService::make()
            ->setLocalVars($vars)
            ->try();
    }
}
