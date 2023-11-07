<?php

namespace Modules\Notify\Contracts;

use Kreait\Firebase\Messaging\Message;

interface MobilePushNotification
{
    /**
     * Retrieves the payload to be sent to FCM service,
     * properly encapsulated as Message instance
     *
     * @return Message
     */
    public function toCloudMessage(): Message;
}
