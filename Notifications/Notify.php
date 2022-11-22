<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Notifications\Notification;

class Notify {
    /**
     * All of the notification routing information.
     *
     * @var array
     */
    public $routes = [];

    public function __construct($channel, $route) {
        $this->routes[$channel] = $route;
    }

    /** Get the notification routing information for the given driver.
     *
     * @param string $driver
     *
     * @return mixed
     */
    public function routeNotificationFor($driver) {
        return $this->routes[$driver] ?? null;
    }
}
