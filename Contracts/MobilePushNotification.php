<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
namespace Modules\Notify\Contracts;

use Kreait\Firebase\Messaging\Message;

interface MobilePushNotification
{
    /**
     * Retrieves the payload to be sent to FCM service,
<<<<<<< HEAD
     * properly encapsulated as Message instance.
     */
    public function toCloudMessage(): Message;

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(?object $notifiable): array;
=======
     * properly encapsulated as Message instance
     *
     * @return Message
     */
    public function toCloudMessage(): Message;
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
}
