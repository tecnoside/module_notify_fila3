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

use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Services\SmsService;
use Modules\UI\Services\ThemeService;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Notification;

use  Modules\Notify\Notifications\ThemeNotification;
use  Modules\Notify\Notifications\SampleNotification;
use Modules\Notify\Datas\NotificationData;;

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
            'netfun'=>'netfun',
            'essendex'=>'essendex',
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        
        //$hows=NotificationData::collection([$data]);
=======
>>>>>>> ace9eb3 (up)
        $hows=NotificationData::from($data);
        Notification::send([$hows], new SampleNotification($data));
<<<<<<< HEAD
        //Call to a member function routeNotificationFor() on string
        dddx('fine');
>>>>>>> 0cbdb01 (up)
=======
        echo '<h3>+Done</h3>';
>>>>>>> ace9eb3 (up)
    }
}
