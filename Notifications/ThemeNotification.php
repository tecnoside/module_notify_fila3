<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
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
use Illuminate\Notifications\Notification;
use Modules\Notify\Data\SmsData;
use Modules\Notify\Notifications\Channels\EsendexChannel;



class ThemeNotification extends Notification implements ShouldQueue {
    use Queueable;
    public array $data;
    
>>>>>>> 745fe6e (up)

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
    public function __construct(string $name, array $view_params)
    {
        $this->name = $name;
        $this->view_params = $view_params;
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
    }

    /*
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable) {
        //$via=[$this->data['driver']];
        //return $via;
        //return EsendexChannel::class;
        $channels = [];
        $channels[] = 'essendex';
        return $channels;
    }
        
    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        dddx('oo');
        return (new MailMessage())
            ->from($this->from)
            ->subject($this->subject)
            ->line('---')
            ->view('notify::notifications.html', ['html' => $this->html]);
    }

    public function toEssendex($notifiable) {
        dddx($notifiable);
    }
>>>>>>> 745fe6e (up)

    /**
     * Undocumented function.
     *
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
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
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
     *
     * @return SmsData
     */
    public function toSms($notifiable) {
        dddx('a');
>>>>>>> 745fe6e (up)
        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
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
    }

    /**
     * Get the array representation of the notification.
     *
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
     *
     * @return array
     */
    public function toArray($notifiable) {
        dddx($notifiable);

        return [
        ];
>>>>>>> 745fe6e (up)
    }
}
