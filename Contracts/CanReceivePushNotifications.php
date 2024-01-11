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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0d61e3f (rebase 1/1)
=======
>>>>>>> 05adcda (up)
=======
>>>>>>> 25230a8 (first)
=======
>>>>>>> 6e9bc65 (.)
=======
>>>>>>> 6cd4232 (rebase 1/1)
=======
>>>>>>> a7e2096 (first)
=======
>>>>>>> 23d769a (.)
=======
>>>>>>> 0d61e3f (rebase 1/1)
=======
>>>>>>> 05adcda (up)
     * //non si puo usare mixed che cs lo cancella.
     *
     * @return string|int|null
     */
    public function getKey();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7e2096 (first)
=======
>>>>>>> 05adcda (up)
=======
>>>>>>> 25230a8 (first)
=======
>>>>>>> a7e2096 (first)
=======
>>>>>>> 05adcda (up)
}
