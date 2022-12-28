<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Services\MailService;
use Modules\UI\Services\ThemeService;

// -------- bases -----------
<<<<<<< HEAD
=======
//-------- services --------

<<<<<<< HEAD
use Modules\Notify\Services\MailService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

<<<<<<< HEAD
/**
 
 */
<<<<<<< HEAD:Models/Panels/Actions/TestMailAction.php
<<<<<<< HEAD
<<<<<<< HEAD
class TestMailAction extends XotBasePanelAction {
=======
class TestMailAction extends XotBasePanelAction
{
>>>>>>> 42aa20e (.)
=======
class TestMailAction extends XotBasePanelAction {
>>>>>>> 6d517f2 (.)
=======
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
class TryMailAction extends XotBasePanelAction {
>>>>>>> 64529a0 (up):Models/Panels/Actions/TryMailAction.php
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>Mail';

    /**
     * @return mixed
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle() {
        $drivers = [
            'duocircle',
            'mailtrap',
<<<<<<< HEAD
=======
    public function handle()
    {
        $drivers = [
            'netfun',
>>>>>>> 42aa20e (.)
=======
    public function handle() {
        $drivers = [
            'duocircle',
>>>>>>> 6d517f2 (.)
=======
>>>>>>> 9f492fe (up)
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;

        $view = ThemeService::getView();

        $view_params = [
            'view' => $view,
            'drivers' => $drivers,
            'driver' => $driver,
        ];

        // return view()->make($view, $view_params);
        // Parameter #1 $view of function view expects view-string|null, mixed given.
        // The custom 'view-string' type class. It's a subset of the string type. Every string that passes the
        // view()->exists($string) test is a valid view-string type.

        // if (view()->exists($view)) {
        return view()->make($view, $view_params);
        // }

        // return 'not exists ['.$view.']';
<<<<<<< HEAD
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
=======
        //return view()->make($view, $view_params);
        //Parameter #1 $view of function view expects view-string|null, mixed given.
        //The custom 'view-string' type class. It's a subset of the string type. Every string that passes the
        //view()->exists($string) test is a valid view-string type.

        //if (view()->exists($view)) {
        return view()->make($view, $view_params);
        //}

        //return 'not exists ['.$view.']';
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
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
