<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\LU\Models\User;
use Modules\LU\Services\ProfileService;
use Modules\Mediamonitor\Models\Press;
use Modules\Xot\Services\PanelService;

class Alert extends Notification {
    use Queueable;

    private $user;
    private $userAlerts;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user) {
        $this->user = $user;
        $this->userAlerts = ProfileService::make()->alerts()->get();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        $email = (new MailMessage())
        ->from(ProfileService::make()->getUser()->email)
            ->subject("Alerts {$this->user->first_name}!")
            ->line("Buongiorno: {$this->user->first_name}")
            ->line('Questi sono i tuoi alert:');

        $model = Press::make();
        $panel = PanelService::make()->get($model);

        $presses = [];
        foreach ($this->userAlerts as $userAlert) {
            /* $panel->rowsPaginated($userAlert), */

            $presses = array_merge($presses, $panel->rowsPaginated($userAlert->toArray())->all());

            foreach ($presses as $press) {
                $email = $email->line($press->title);
            }
        }

        $email = $email->line('Grazie per aver utilizzato la nostra applicazione!');

        return $email;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable) {
        return [
        ];
    }
}
