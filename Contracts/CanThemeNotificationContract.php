<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Modules\Notify\Datas\NotificationData;

interface CanThemeNotificationContract
{
    public function getNotificationData(string $name): NotificationData;
}
