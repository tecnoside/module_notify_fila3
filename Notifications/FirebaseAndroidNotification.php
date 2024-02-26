<?php

declare(strict_types=1);
/**
 * @see https://iftikhar-ahmed.medium.com/send-push-notifications-in-laravel-using-firebase-on-your-android-device-f585621db900
 */

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;

class FirebaseAndroidNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable the entity to be notified
     *
     * @throws \InvalidArgumentException if no delivery channels are available for the notifiable entity
     */
    public function via($notifiable): array
    {
        $channels = ['firebase'];

        // if (empty($channels)) {
        //    throw new \InvalidArgumentException('No delivery channels are available for the notifiable entity.');
        // }

        return $channels;
    }

    /*
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable the entity to be notified

    public function toMail($notifiable): MailMessage
    {
        try {
            $url = 'https://laravel.com';
            $mailMessage = (new MailMessage())
                ->line('The introduction to the notification.')
                ->action('Notification Action', $url)
                ->line('Thank you for using our application!');

            return $mailMessage;
        } catch (\Exception $exception) {
            // Log the exception and optionally alert the developers
            Log::error("Failed to generate mail message: {$exception->getMessage()}", [
                'notifiable_id' => method_exists($notifiable, 'getKey') ? $notifiable->getKey() : 'N/A',
                'notifiable_type' => method_exists($notifiable, 'getMorphClass') ? $notifiable->getMorphClass() : 'N/A',
            ]);

            // Return a generic error mail message
            return (new MailMessage())
                ->error()
                ->subject('Notification Error')
                ->line('An error occurred while trying to send the notification.')
                ->line('Our team has been notified and will look into this issue.');
        }
    }
    */

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable the entity to be notified
     */
    public function toArray($notifiable): array
    {
        return [];
    }

    /**
     * A description of the entire PHP function.
     *
     * @param mixed $notifiable the entity to be notified
     *
     * @return CloudMessage
     */
    public function toFirebase($notifiable)
    {
        return CloudMessage::new()
            ->withNotification(FirebaseNotification::create('Title', 'Body'))
            ->withAndroidConfig(AndroidConfig::fromArray([
                'ttl' => '3600s',
                'priority' => 'high',
                'notification' => [
                    'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                ],
            ]));
    }
}
