<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Modules\Notify\Actions\NetfunSendAction;
use Modules\Xot\Contracts\ModelContactContract;
use Modules\Notify\Notifications\ThemeNotification;
use Modules\Notify\Notifications\RowAttributeNotification;

class NetfunChannel
{
    public function __construct()
    {
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     *
     * @return void
     */
    public function send($notifiable, ThemeNotification $notification)
    {
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

        if ($notifiable instanceof ModelContactContract) {
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
        }
    }
}
