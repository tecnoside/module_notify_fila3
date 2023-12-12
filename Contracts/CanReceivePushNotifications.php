<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
namespace Modules\Notify\Contracts;

use Illuminate\Support\Collection;

interface CanReceivePushNotifications
{
    /**
     * @return Collection<string>
     */
    public function getMobileDeviceTokens(): Collection;
<<<<<<< HEAD

    /**
     * Get the value of the model's primary key.
     */
    public function getKey(): string|int;
=======
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
}
