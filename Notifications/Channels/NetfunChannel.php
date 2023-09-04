<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> a758bd5 (.)
declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
declare(strict_types=1);
>>>>>>> c3e3fc0 (up)
=======
declare(strict_types=1);
>>>>>>> b3b016d (up)

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> e7bd73e (.)
use Illuminate\Notifications\Notification;
=======

>>>>>>> 7645b1d (up)
=======
>>>>>>> 8d9a96b (up)
=======
>>>>>>> a758bd5 (.)
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
       
>>>>>>> 01282f2 (up)
=======
    public function __construct() {
>>>>>>> c3e3fc0 (up)
=======
    public function __construct() {
>>>>>>> b3b016d (up)
=======
    public function __construct() {
>>>>>>> a758bd5 (.)
=======
class NetfunChannel
{
    public function __construct()
    {
>>>>>>> e0dc242 (.)
    }

    /**
     * Send the given notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  \Modules\Notify\Contracts\CanThemeNotificationContract  $notifiable
=======
=======
>>>>>>> 6018711 (.)
     * @param \Modules\Notify\Contracts\CanThemeNotificationContract $notifiable
     *
>>>>>>> c156f22 (.)
=======
     * @param  \Modules\Notify\Contracts\CanThemeNotificationContract  $notifiable
>>>>>>> b735fbf (.)
     * @return void
     */
    public function send($notifiable, ThemeNotification $notification)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> a758bd5 (.)
     * @param mixed $notifiable
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b735fbf (.)
=======
     * @param mixed $notifiable
     *
     * @return void
     */
    public function send($notifiable, Notification $notification) {
>>>>>>> b3b016d (up)
=======
    public function send($notifiable, RowAttributeNotification $notification) {
>>>>>>> a758bd5 (.)
=======
    public function send($notifiable, ThemeNotification $notification)
    {
>>>>>>> e0dc242 (.)
=======


>>>>>>> 6018711 (.)
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($notifiable instanceof ModelContactContract) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $notifiable->increase('sms', $data);
=======
            $notifiable->increase('sms',$data);
>>>>>>> 3d98802 (up)
=======
            $notifiable->increase('sms', $data);
>>>>>>> b735fbf (.)
=======
            $notifiable->increase('sms',$data);
>>>>>>> d17f486 (up)
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
=======
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
=======
     * @param mixed $notifiable
     *
>>>>>>> c3e3fc0 (up)
     * @return void
     */
    public function send($notifiable, Notification $notification) {
        // Call to an undefined method Illuminate\Notifications\Notification::toSms().
=======
    public function send($notifiable, RowAttributeNotification $notification) {
>>>>>>> 7645b1d (up)
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

<<<<<<< HEAD
=======
>>>>>>> b3b016d (up)
        if ($notifiable instanceof Model) {
=======
        if ($notifiable instanceof ModelContactContract) {
>>>>>>> e7bd73e (.)
=======
        if ($notifiable instanceof ModelContactContract) {
>>>>>>> a758bd5 (.)
=======
            $notifiable->increment('sms',$data);
            /*
>>>>>>> e7cc3fb (up)
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
>>>>>>> 01282f2 (up)
=======
>>>>>>> c3e3fc0 (up)
=======
>>>>>>> b3b016d (up)
=======
}
>>>>>>> e7bd73e (.)
=======
}
>>>>>>> 06bf12b (up)
=======
}
>>>>>>> a758bd5 (.)
