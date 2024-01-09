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
<<<<<<< HEAD
     * //non si puo usare mixed che cs lo cancella.
=======
>>>>>>> dev
     *
     * @return string|int|null
     */
    public function getKey();
}
