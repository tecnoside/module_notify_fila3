<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Actions\NetfunSendAction;
use Modules\Notify\Notifications\ThemeNotification;
use Modules\Xot\Contracts\ModelContactContract;

class NetfunChannel
{
    public function __construct()
    {
=======
=======
declare(strict_types=1);
>>>>>>> bc60653 (up)
=======
declare(strict_types=1);
>>>>>>> 602db11 (up)

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 78bc45c (.)
use Illuminate\Notifications\Notification;
=======

>>>>>>> 39a76ff (up)
=======
>>>>>>> 6520304 (up)
=======
>>>>>>> fe06862 (.)
use Modules\Notify\Actions\NetfunSendAction;
use Modules\Xot\Contracts\ModelContactContract;
use Modules\Notify\Notifications\ThemeNotification;
use Modules\Notify\Notifications\RowAttributeNotification;

<<<<<<< HEAD
class NetfunChannel {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public function __construct(){
       
>>>>>>> 48d3f55 (up)
=======
    public function __construct() {
>>>>>>> bc60653 (up)
=======
    public function __construct() {
>>>>>>> 602db11 (up)
=======
    public function __construct() {
>>>>>>> fe06862 (.)
=======
class NetfunChannel
{
    public function __construct()
    {
>>>>>>> 3f0bbc4 (.)
    }

    /**
     * Send the given notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  \Modules\Notify\Contracts\CanThemeNotificationContract  $notifiable
=======
     * @param \Modules\Notify\Contracts\CanThemeNotificationContract $notifiable
     *
>>>>>>> c156f22 (.)
     * @return void
     */
    public function send($notifiable, ThemeNotification $notification)
    {
<<<<<<< HEAD
=======
=======
>>>>>>> fe06862 (.)
     * @param mixed $notifiable
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function send($notifiable, Notification $notification) {
<<<<<<< HEAD
>>>>>>> 602db11 (up)
=======
    public function send($notifiable, RowAttributeNotification $notification) {
>>>>>>> 39a76ff (up)
=======
    public function send($notifiable, RowAttributeNotification $notification) {
>>>>>>> fe06862 (.)
=======
    public function send($notifiable, ThemeNotification $notification)
    {
>>>>>>> 3f0bbc4 (.)
=======


>>>>>>> c156f22 (.)
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

<<<<<<< HEAD
<<<<<<< HEAD
        if ($notifiable instanceof ModelContactContract) {
<<<<<<< HEAD
<<<<<<< HEAD
            $notifiable->increase('sms', $data);
=======
            $notifiable->increase('sms',$data);
>>>>>>> 3d98802 (up)
            /*
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
            */
        }
    }
}
=======
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
=======
     * @param mixed $notifiable
     *
>>>>>>> bc60653 (up)
     * @return void
     */
    public function send($notifiable, Notification $notification) {
=======
        // Call to an undefined method Illuminate\Notifications\Notification::toSms().
>>>>>>> 1ebfe39 (up)
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

<<<<<<< HEAD
=======
>>>>>>> 602db11 (up)
        if ($notifiable instanceof Model) {
=======
        if ($notifiable instanceof ModelContactContract) {
>>>>>>> 78bc45c (.)
=======
        if ($notifiable instanceof ModelContactContract) {
>>>>>>> fe06862 (.)
=======
            $notifiable->increment('sms',$data);
            /*
>>>>>>> 48bd8b6 (up)
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
            */
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48d3f55 (up)
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
=======
}
>>>>>>> 78bc45c (.)
=======
}
>>>>>>> df8079b (up)
=======
}
>>>>>>> fe06862 (.)
