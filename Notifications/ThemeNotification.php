<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\BuildMailMessageAction;
use Modules\Notify\Contracts\CanThemeNotificationContract;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public array $view_params;
    public string $name;
    public array $attachments;
=======
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Notifications\Channels\EsendexChannel;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public array $data;
<<<<<<< HEAD
    
>>>>>>> 0cbdb01 (up)
=======
>>>>>>> e73574f (up)

    /**
     * Create a new notification instance.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $name, array $view_params)
    {
        $this->name = $name;
        $this->view_params = $view_params;
    }

    /**
     * Get the notification's delivery channels.
     *
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
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        // $via=[$this->data['driver']];
        // return $via;
        // return EsendexChannel::class;
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
    public function toMail($notifiable)
    {
        dddx('oo');

        return (new MailMessage())
            ->from($this->from)
            ->subject($this->subject)
            ->line('---')
            ->view('notify::notifications.html', ['html' => $this->html]);
    }

    public function toEssendex($notifiable)
    {
        dddx($notifiable);
    }
>>>>>>> 0cbdb01 (up)

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
     * @param  CanThemeNotificationContract  $notifiable
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->getSmsData();
        /*
=======
     * @param mixed $notifiable
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        dddx('a');
<<<<<<< HEAD
>>>>>>> 0cbdb01 (up)
=======

>>>>>>> e73574f (up)
        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
<<<<<<< HEAD
        */

        // $notifiable->sendSmsCallback()
=======
>>>>>>> 0cbdb01 (up)
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
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
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        dddx($notifiable);

        return [
        ];
>>>>>>> 0cbdb01 (up)
    }
}
