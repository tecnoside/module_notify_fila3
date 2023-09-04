<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

<<<<<<< HEAD
// -------- services --------
<<<<<<< HEAD
<<<<<<< HEAD
=======
//-------- services --------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)

use Illuminate\Support\Facades\Notification;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Datas\NotificationData;
use Modules\Notify\Notifications\SampleNotification;

// -------- bases -----------
<<<<<<< HEAD
<<<<<<< HEAD
=======
//-------- bases -----------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)
=======
<<<<<<< HEAD
//-------- services --------
=======
// -------- services --------
>>>>>>> 0d776db (up)

use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Notify\Services\SmsService;
use Modules\UI\Services\ThemeService;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Notification;

use  Modules\Notify\Notifications\ThemeNotification;
use  Modules\Notify\Notifications\SampleNotification;
use Modules\Notify\Datas\NotificationData;;

<<<<<<< HEAD
//-------- bases -----------
=======
// -------- bases -----------
>>>>>>> 0d776db (up)
>>>>>>> 5b257fb (up)

/**
 * Class TestAction.
 */
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
class TrySmsAction extends XotBasePanelAction {
>>>>>>> fe06862 (.)
=======
<<<<<<<< HEAD:Models/Panels/Actions/TestSmsAction.php
<<<<<<< HEAD
class TestSmsAction extends XotBasePanelAction
{
=======
class TestSmsAction extends XotBasePanelAction {
>>>>>>> 0d776db (up)
========
class TrySmsAction extends XotBasePanelAction {
>>>>>>>> 5b257fb (up):Models/Panels/Actions/TrySmsAction.php
>>>>>>> 5b257fb (up)
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>SMS';

    /**
     * @return mixed
     */
<<<<<<< HEAD
    public function handle() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)
        $drivers = [
            'netfun' => 'netfun',
            'esendex' => 'esendex',
=======
<<<<<<< HEAD
    public function handle()
    {
=======
    public function handle() {
>>>>>>> 0d776db (up)
        $drivers = [
<<<<<<< HEAD
            'netfun',
>>>>>>> 5b257fb (up)
=======
            'netfun'=>'netfun',
<<<<<<< HEAD
            'essendex'=>'essendex',
>>>>>>> ce6a32e (up)
=======
            'esendex'=>'esendex',
>>>>>>> 7f1bbca (up)
        ];
        $i = request('i');

        $driver = isset($drivers[$i]) ? $drivers[$i] : null;
<<<<<<< HEAD
<<<<<<< HEAD
        $view = app(GetViewAction::class)->execute();
=======

<<<<<<< HEAD
<<<<<<< HEAD
        $view = ThemeService::getView();
>>>>>>> 5b257fb (up)
=======
        //$view = ThemeService::getView();
$view = $this->panel->getView();
>>>>>>> 7455be1 (up)
=======
        // $view = ThemeService::getView();
<<<<<<< HEAD
        $view = $this->panel->getView();
        // $view = app(GetViewAction::class)->execute();
>>>>>>> 31eec80 (up)
=======
        // $view = $this->panel->getView();
=======
>>>>>>> 8229f91 (up)
        $view = app(GetViewAction::class)->execute();
>>>>>>> ce6a32e (up)

        $view_params = [
            'view' => $view,
            'drivers' => $drivers,
            'driver' => $driver,
        ];

<<<<<<< HEAD
<<<<<<< HEAD
        return view($view, $view_params);
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        $data = request()->all();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 5b257fb (up)
        
        return view()->make($view, $view_params);
        
    }

    public function postHandle(){
       $data=request()->all();
       $vars=collect($data)->only(['driver','from','to','body'])->all();
       SmsService::make()->setLocalVars($vars)->send();
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
        
        //$hows=NotificationData::collection([$data]);
=======
>>>>>>> ace9eb3 (up)
=======
        $data['channels']=[$data['driver']];
>>>>>>> f0164c0 (up)
        $hows=NotificationData::from($data);
        Notification::send([$hows], new SampleNotification($data));
<<<<<<< HEAD
        //Call to a member function routeNotificationFor() on string
        dddx('fine');
>>>>>>> 0cbdb01 (up)
=======
        echo '<h3>+Done</h3>';
>>>>>>> ace9eb3 (up)
=======
        $data['channels']=[$data['driver']];
        $hows=NotificationData::from($data);
=======
        $data['channels'] = [$data['driver']];
        $hows = NotificationData::from($data);
>>>>>>> 5cbe3de (up)
        Notification::send([$hows], new SampleNotification($data));
        echo '<h3>+Done</h3>';
>>>>>>> fe06862 (.)
=======
=======
        return view()->make($view, $view_params);
=======
        return view($view, $view_params);
>>>>>>> 04cb283 (up)
    }

    public function postHandle() {
        $data = request()->all();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $vars = collect($data)->only(['driver', 'from', 'to', 'body'])->all();
        SmsService::make()->setLocalVars($vars)->send();
>>>>>>> 0d776db (up)
>>>>>>> 5b257fb (up)
=======
        
        //$hows=NotificationData::collection([$data]);
=======
>>>>>>> 8229f91 (up)
=======
        $data['channels']=[$data['driver']];
>>>>>>> 7f1bbca (up)
        $hows=NotificationData::from($data);
        Notification::send([$hows], new SampleNotification($data));
<<<<<<< HEAD
        //Call to a member function routeNotificationFor() on string
        dddx('fine');
>>>>>>> 745fe6e (up)
=======
        echo '<h3>+Done</h3>';
>>>>>>> 8229f91 (up)
    }
}
