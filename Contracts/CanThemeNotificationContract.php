<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 4a1a664 (up)
use Modules\Notify\Datas\NotificationData;

interface CanThemeNotificationContract
{
<<<<<<< HEAD
    public function getNotificationData(string $name, array $view_params = []): NotificationData;

    public function getModel(): Model;

    /**
     * @return mixed|null
     */
    public function sendEmailCallback();
=======
    public function getNotificationData(string $name): NotificationData;
>>>>>>> 4a1a664 (up)
}
