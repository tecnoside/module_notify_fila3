<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

<<<<<<< HEAD
// -------- services --------

use Illuminate\Support\Facades\Notification;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Datas\NotificationData;
use Modules\Notify\Notifications\SampleNotification;

// -------- bases -----------
<<<<<<< HEAD
<<<<<<< HEAD
=======
//-------- services --------

<<<<<<< HEAD
=======
<<<<<<< HEAD
//-------- services --------
=======
// -------- services --------
>>>>>>> 0d776db (up)

>>>>>>> 5b257fb (up)
use Modules\Notify\Services\MailService;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

<<<<<<< HEAD
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
=======

class TryMailAction extends XotBasePanelAction {
>>>>>>> fe06862 (.)
=======
<<<<<<< HEAD
//-------- bases -----------
=======
// -------- bases -----------
>>>>>>> 0d776db (up)

class TryMailAction extends XotBasePanelAction {
>>>>>>> 5b257fb (up)
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>Mail';

    /**
     * @return mixed
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
    public function handle() {
        $drivers = [
            'duocircle',
            'mailtrap',
<<<<<<< HEAD
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
=======
>>>>>>> fe06862 (.)
=======
    public function handle() {
        $drivers = [
            'duocircle',
<<<<<<< HEAD
=======
            'mailtrap',
>>>>>>> 0d776db (up)
>>>>>>> 5b257fb (up)
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;

<<<<<<< HEAD
        $view = app(GetViewAction::class)->execute();
=======
        $view = ThemeService::getView();
>>>>>>> 5b257fb (up)

        $view_params = [
            'view' => $view,
            'drivers' => $drivers,
            'driver' => $driver,
        ];

<<<<<<< HEAD
        return view($view, $view_params);
<<<<<<< HEAD
<<<<<<< HEAD
        // }

        // return 'not exists ['.$view.']';
<<<<<<< HEAD
=======
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
>>>>>>> 5b257fb (up)
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
<<<<<<< HEAD
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
=======
>>>>>>> f0164c0 (up)
=======
>>>>>>> fe06862 (.)
    }

    /**
     * @return void
     */
    public function postHandle() {
        $data = request()->all();
        // $data['channels']=[$data['driver']];
        $data['channels'] = ['mail'];
        $hows = NotificationData::from($data);
        Notification::send([$hows], new SampleNotification($data));
        echo '<h3>+Done</h3>';
=======
>>>>>>> 5b257fb (up)
    }
}
