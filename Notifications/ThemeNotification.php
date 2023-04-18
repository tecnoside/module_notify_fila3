<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Notifications\Channels\EsendexChannel;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public array $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
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

    /**
     * Undocumented function.
     *
     * @param mixed $notifiable
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        dddx('a');

        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        dddx($notifiable);

        return [
        ];
    }
}
