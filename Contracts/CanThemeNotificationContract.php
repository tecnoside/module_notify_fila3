<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 4a1a664 (up)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> cc211e3 (up)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> fe06862 (.)
use Modules\Notify\Datas\NotificationData;

interface CanThemeNotificationContract
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getNotificationData(string $name, array $view_params = []): NotificationData;

    public function getModel(): Model;

    /**
     * @return mixed|null
     */
    public function sendEmailCallback();
=======
    public function getNotificationData(string $name): NotificationData;
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
=======

    public function getModel(): Model;
>>>>>>> cc211e3 (up)
=======
    public function getNotificationData(string $name): NotificationData;
=======
    public function getNotificationData(string $name, array $view_params = []): NotificationData;
>>>>>>> c496ff4 (up)

    public function getModel(): Model;
>>>>>>> fe06862 (.)
}
