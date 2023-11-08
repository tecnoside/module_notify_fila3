<?php

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
     *
     * @return mixed
     */
    public function getKey();
}
