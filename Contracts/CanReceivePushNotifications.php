<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Illuminate\Support\Collection;

interface CanReceivePushNotifications
{
    /**
     * @return Collection<string>
     */
    public function getMobileDeviceTokens(): Collection;

    /**
     * Get the value of the model's primary key.
     */
    public function getKey(): string|int;
<<<<<<< HEAD

=======
>>>>>>> e8d7643 (phpstan)
}
