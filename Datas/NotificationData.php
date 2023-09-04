<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class NotificationData extends Data
{
=======
=======
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
>>>>>>> ace9eb3 (up)
use Spatie\LaravelData\Data;

<<<<<<< HEAD
class NotificationData extends Data {
>>>>>>> 0cbdb01 (up)
=======
class NotificationData extends Data
{
>>>>>>> 4a1a664 (up)
=======
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class NotificationData extends Data
{
>>>>>>> fe06862 (.)
=======
=======
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
>>>>>>> 8229f91 (up)
use Spatie\LaravelData\Data;

<<<<<<< HEAD
class NotificationData extends Data {
>>>>>>> 745fe6e (up)
=======
class NotificationData extends Data
{
>>>>>>> 6eab953 (up)
=======
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class NotificationData extends Data
{
>>>>>>> a758bd5 (.)
    // public string $mobile_phone;
    // public string $token;
    // public int $q;
    public string $from;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> a758bd5 (.)
    public ?string $from_email = null;
    public string $to;
    public ?string $subject = null;
    public ?string $body_html = null;
    public string $body;
    public array $channels = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> aedf4cb (up)
=======
>>>>>>> 0cb23b3 (up)
    /**
     * @var DataCollection<AttachmentData>
     */
    public ?DataCollection $attachments = null;
    // public ?array $attachment_paths = [];

<<<<<<< HEAD
<<<<<<< HEAD
    /** Get the notification routing information for the given driver.
     *
     * @param  string  $driver
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return string|\Modules\Notify\Models\Notification
=======
     * @return mixed
>>>>>>> 5df40a5 (up)
=======
>>>>>>> 6df2b8a (Dusting)
=======
     * @return string|\Modules\Notify\Models\Notification
>>>>>>> d7dda89 (up)
     */
    public function routeNotificationFor($driver, Notification $notification)
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ('database' === $driver) {
            return app(NotificationModel::class);
        }

        return $this->to;
    }

    public function getSmsData(): SmsData
    {
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public ?string $from_email=null;
=======
    public ?string $from_email = null;
>>>>>>> 4a1a664 (up)
    public string $to;
    public ?string $subject = null;
    public ?string $body_html = null;
    public string $body;
    public array $channels = [];

=======
>>>>>>> fe06862 (.)
=======
>>>>>>> aedf4cb (up)
    /** Get the notification routing information for the given driver.
     *
     * @param  string  $driver
     */
    public function routeNotificationFor($driver, Notification $notification)
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ('database' === $driver) {
            return app(NotificationModel::class);
        }

        return $this->to;
    }
<<<<<<< HEAD
<<<<<<< HEAD
    
>>>>>>> 0cbdb01 (up)
=======
=======
>>>>>>> fe06862 (.)

    public function getSmsData(): SmsData
    {
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
    }
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
=======
>>>>>>> fe06862 (.)
}
=======
}
>>>>>>> 5df40a5 (up)
=======
}
>>>>>>> 6df2b8a (Dusting)
=======
    public ?string $from_email=null;
=======
    public ?string $from_email = null;
>>>>>>> 6eab953 (up)
    public string $to;
    public ?string $subject = null;
    public ?string $body_html = null;
    public string $body;
    public array $channels = [];

=======
>>>>>>> a758bd5 (.)
=======
>>>>>>> 0cb23b3 (up)
    /** Get the notification routing information for the given driver.
     *
     * @param  string  $driver
     */
    public function routeNotificationFor($driver, Notification $notification)
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ('database' === $driver) {
            return app(NotificationModel::class);
        }

        return $this->to;
    }

    public function getSmsData(): SmsData
    {
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
<<<<<<< HEAD
>>>>>>> 745fe6e (up)
=======
>>>>>>> a758bd5 (.)
=======
}
>>>>>>> f846b34 (up)
=======
}
>>>>>>> 7eece5f (Dusting)
