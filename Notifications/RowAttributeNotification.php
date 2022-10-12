<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Notify\Data\SmsData;

class RowAttributeNotification extends Notification {
    use Queueable;
    public Model $model;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Model $row) {
        $this->row=$row;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable) {
        /*
        dddx(['via'=>$this->row->getNotifyVia(),'notifiable'=>$notifiable,'row'=>$this->row]);
        return ['mail'];
        */
        return $this->row->getNotifyVia();
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        dddx($notifiable);
        /*
        return (new MailMessage())
            ->subject($this->subject)
            ->line('---')
            ->view('notify::notifications.html', ['html' => $this->html]);
        */
    }

    /**
     * Undocumented function
     *
     * @param mixed $notifiable
     * @return SmsData
     */
    public function toSms($notifiable) {
        return SmsData::from([
            'from' => $this->row->sms_from,
            'to'=>  $this->row->mobile_phone,
            'body'=>$this->row->sms_body,
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable) {
        dddx($notifiable);

        return [
        ];
    }
}
