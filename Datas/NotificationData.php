<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NotificationData extends Data {
    // public string $mobile_phone;
    // public string $token;
    // public int $q;
    public string $from;
    public ?string $from_email=null;
    public string $to;
    public ?string $subject=null;
    public ?string $body_html=null;
    public string $body;




     /** Get the notification routing information for the given driver.
     *
     * @param string $driver
     *
     * @return mixed
     */
    public function routeNotificationFor($driver) {
        dddx($driver);
        //return $this->routes[$driver] ?? null;
    }
    
}
