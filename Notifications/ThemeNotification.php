<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\LU\Actions\BuildUserMailMessageAction;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public array $view_params;
    public string $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $name, array $view_params)
    {
        $this->name = $name;
        $this->view_params = $view_params;
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
        return app(BuildUserMailMessageAction::class)->execute($this->name, $this->view_params);
    }

    // public function toEssendex($notifiable)
    // {
    //    dddx($notifiable);
    // }

    /**
     * Undocumented function.
     *
     * @param CanThemeNotificationContract $notifiable
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        return $notifiable
            ->getNotificationData($this->name)
            ->getSmsData();
        /*
        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
        */
    }

    /**
     * Get the array representation of the notification.
     *
     * @param CanThemeNotificationContract $notifiable
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
