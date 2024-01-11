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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 6cd4232 (rebase 1/1)
     * //non si puo usare mixed che cs lo cancella.
     *
     * @return string|int|null
>>>>>>> 6e9bc65 (.)
     */
    public function getKey(): string|int;
=======
=======
>>>>>>> 23d769a (.)
     * //non si puo usare mixed che cs lo cancella.
=======
     * non si puo usare mixed che cs lo cancella.
>>>>>>> aaabbb5 (first)
     *
     * @return string|int|null
     */
    public function getKey();
>>>>>>> a7e2096 (first)
}
