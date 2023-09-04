<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

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
use Modules\Notify\Actions\NetfunSendAction;
use Modules\Xot\Contracts\ModelContactContract;
use Modules\Notify\Notifications\RowAttributeNotification;

class NetfunChannel {
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
    }

    /**
     * Send the given notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  \Modules\Notify\Contracts\CanThemeNotificationContract  $notifiable
     * @return void
     */
    public function send($notifiable, ThemeNotification $notification)
    {
=======
     * @param mixed $notifiable
     *
     * @return void
     */
<<<<<<< HEAD
    public function send($notifiable, Notification $notification) {
<<<<<<< HEAD
>>>>>>> 602db11 (up)
=======
    public function send($notifiable, RowAttributeNotification $notification) {
>>>>>>> 39a76ff (up)
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

<<<<<<< HEAD
        if ($notifiable instanceof ModelContactContract) {
            $notifiable->increase('sms', $data);
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
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
        }
    }
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
