<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

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

class NotificationData extends Data
{
>>>>>>> fe06862 (.)
    // public string $mobile_phone;
    // public string $token;
    // public int $q;
    public string $from;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
    public ?string $from_email = null;
    public string $to;
    public ?string $subject = null;
    public ?string $body_html = null;
    public string $body;
    public array $channels = [];

<<<<<<< HEAD
    /**
     * @var DataCollection<AttachmentData>
     */
    public ?DataCollection $attachments = null;
    // public ?array $attachment_paths = [];

    /** Get the notification routing information for the given driver.
     *
     * @param  string  $driver
     * @return string|\Modules\Notify\Models\Notification
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
    /** Get the notification routing information for the given driver.
     *
     * @param string $driver
     *
     * @return mixed
     */
    public function routeNotificationFor($driver, Notification $notification)
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ('database' == $driver) {
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
