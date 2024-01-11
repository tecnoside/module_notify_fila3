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
     * non si puo usare mixed che cs lo cancella.
=======
     * //non si puo usare mixed che cs lo cancella.
>>>>>>> 25230a84 (first)
=======
     * //non si puo usare mixed che cs lo cancella.
=======
     * non si puo usare mixed che cs lo cancella.
>>>>>>> aaabbb5 (first)
>>>>>>> 6e9bc655 (.)
=======
     * //non si puo usare mixed che cs lo cancella.
>>>>>>> 6cd4232b (rebase 1/1)
=======
     * //non si puo usare mixed che cs lo cancella.
>>>>>>> a7e20963 (first)
=======
     * //non si puo usare mixed che cs lo cancella.
=======
     * non si puo usare mixed che cs lo cancella.
>>>>>>> aaabbb5 (first)
>>>>>>> 23d769a6 (.)
     *
     * @return string|int|null
     */
    public function getKey();
}
