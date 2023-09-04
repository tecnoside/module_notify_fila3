<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
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
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\BuildMailMessageAction;
use Modules\Notify\Contracts\CanThemeNotificationContract;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public array $view_params;
    public string $name;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $attachments;
=======
use Illuminate\Notifications\Messages\MailMessage;
=======
>>>>>>> 4a1a664 (up)
use Illuminate\Notifications\Notification;
use Modules\LU\Actions\BuildUserMailMessageAction;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
<<<<<<< HEAD
    public array $data;
<<<<<<< HEAD
    
>>>>>>> 0cbdb01 (up)
=======
>>>>>>> e73574f (up)
=======
    public array $view_params;
    public string $name;
>>>>>>> 4a1a664 (up)
=======
>>>>>>> fe06862 (.)
=======
    public array $attachments;
>>>>>>> b068ab9 (up)
=======
use Illuminate\Notifications\Messages\MailMessage;
=======
>>>>>>> 6eab953 (up)
use Illuminate\Notifications\Notification;
use Modules\LU\Actions\BuildUserMailMessageAction;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
<<<<<<< HEAD
    public array $data;
<<<<<<< HEAD
    
>>>>>>> 745fe6e (up)
=======
>>>>>>> 3d1ec9b (up)
=======
    public array $view_params;
    public string $name;
>>>>>>> 6eab953 (up)
=======
>>>>>>> a758bd5 (.)

    /**
     * Create a new notification instance.
     *
     * @return void
     */
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
=======
>>>>>>> fe06862 (.)
    public function __construct(string $name, array $view_params)
=======
    public function __construct(string $name, array $view_params, ?array $attachments = [])
>>>>>>> b068ab9 (up)
=======
    public function __construct(string $name, array $view_params)
>>>>>>> dfee631 (up)
    {
        $this->name = $name;
        $this->view_params = $view_params;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  CanThemeNotificationContract  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $channels = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->channels;

        return $channels;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  CanThemeNotificationContract  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $attachments = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->attachments;

        $mail_message = app(BuildMailMessageAction::class)
            ->execute($this->name, $notifiable->getModel(), $this->view_params, $attachments);

        $notifiable->sendEmailCallback();

        return $mail_message;
    }

    // public function toEssendex($notifiable)
    // {
    //    dddx($notifiable);
    // }
=======
    public function __construct(array $data) {
        $this->data=$data;
=======
    public function __construct(array $data)
    {
        $this->data = $data;
>>>>>>> e73574f (up)
=======
=======
>>>>>>> a758bd5 (.)
    public function __construct(string $name, array $view_params)
    {
        $this->name = $name;
        $this->view_params = $view_params;
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
    }

    /**
     * Get the notification's delivery channels.
     *
=======
>>>>>>> fe06862 (.)
     * @param CanThemeNotificationContract $notifiable
     *
=======
     * @param  CanThemeNotificationContract  $notifiable
>>>>>>> b735fbf (.)
     * @return array
     */
    public function via($notifiable)
    {
        $channels = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->channels;

        return $channels;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  CanThemeNotificationContract  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $attachments = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->attachments;

        $mail_message = app(BuildMailMessageAction::class)
            ->execute($this->name, $notifiable->getModel(), $this->view_params, $attachments);

        $notifiable->sendEmailCallback();

        return $mail_message;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function toEssendex($notifiable)
    {
        dddx($notifiable);
    }
>>>>>>> 0cbdb01 (up)
=======
=======
>>>>>>> fe06862 (.)
    // public function toEssendex($notifiable)
    // {
    //    dddx($notifiable);
    // }
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
=======
>>>>>>> fe06862 (.)
=======
    public function __construct(array $data) {
        $this->data=$data;
=======
    public function __construct(array $data)
    {
        $this->data = $data;
>>>>>>> 3d1ec9b (up)
=======
    public function __construct(string $name, array $view_params)
    {
        $this->name = $name;
        $this->view_params = $view_params;
>>>>>>> 6eab953 (up)
=======
>>>>>>> a758bd5 (.)
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param CanThemeNotificationContract $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return $notifiable
            ->getNotificationData($this->name)
            ->channels;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param CanThemeNotificationContract $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return app(BuildMailMessageAction::class)
            ->execute($this->name, $notifiable->getModel(), $this->view_params);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function toEssendex($notifiable)
    {
        dddx($notifiable);
    }
>>>>>>> 745fe6e (up)
=======
=======
>>>>>>> a758bd5 (.)
    // public function toEssendex($notifiable)
    // {
    //    dddx($notifiable);
    // }
<<<<<<< HEAD
>>>>>>> 6eab953 (up)
=======
>>>>>>> a758bd5 (.)

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
     * @param  CanThemeNotificationContract  $notifiable
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
<<<<<<< HEAD
            ->getSmsData();
        /*
=======
     * @param mixed $notifiable
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> 4a1a664 (up)
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> fe06862 (.)
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> a758bd5 (.)
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        dddx('a');
<<<<<<< HEAD
>>>>>>> 0cbdb01 (up)
=======

>>>>>>> e73574f (up)
=======
=======
>>>>>>> fe06862 (.)
        return $notifiable
            ->getNotificationData($this->name)
=======
>>>>>>> c496ff4 (up)
            ->getSmsData();
        /*
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
=======
>>>>>>> fe06862 (.)
=======
     * @param mixed $notifiable
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> 6eab953 (up)
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
<<<<<<< HEAD
        dddx('a');
<<<<<<< HEAD
>>>>>>> 745fe6e (up)
=======

>>>>>>> 3d1ec9b (up)
=======
=======
>>>>>>> a758bd5 (.)
        return $notifiable
            ->getNotificationData($this->name)
            ->getSmsData();
        /*
<<<<<<< HEAD
>>>>>>> 6eab953 (up)
=======
>>>>>>> a758bd5 (.)
        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        */

        // $notifiable->sendSmsCallback()
<<<<<<< HEAD
=======
>>>>>>> 0cbdb01 (up)
=======
        */
>>>>>>> 4a1a664 (up)
=======
        */
>>>>>>> fe06862 (.)
=======
>>>>>>> e4aae54 (.)
=======
>>>>>>> 745fe6e (up)
=======
        */
>>>>>>> 6eab953 (up)
=======
        */
>>>>>>> a758bd5 (.)
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
     * @param  CanThemeNotificationContract  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $res = $this->view_params;
        $res['_name'] = $this->name;

        return $res;
=======
     * @param mixed $notifiable
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> 4a1a664 (up)
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> fe06862 (.)
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        $res = $this->view_params;
        $res['_name'] = $this->name;

<<<<<<< HEAD
        return [
        ];
<<<<<<< HEAD
>>>>>>> 0cbdb01 (up)
=======
>>>>>>> fe06862 (.)
=======
        return $res;
>>>>>>> aedf4cb (up)
=======
     * @param mixed $notifiable
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> 6eab953 (up)
=======
     * @param CanThemeNotificationContract $notifiable
>>>>>>> a758bd5 (.)
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        dddx($notifiable);

        return [
        ];
<<<<<<< HEAD
>>>>>>> 745fe6e (up)
=======
>>>>>>> a758bd5 (.)
    }
}
