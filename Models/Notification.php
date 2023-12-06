<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Support\Carbon;

<<<<<<< HEAD
=======
/**
 * Modules\Notify\Models\Notification.
 *
 * @property string          $id
 * @property string          $type
 * @property string          $notifiable_type
 * @property int             $notifiable_id
 * @property array           $data
 * @property Carbon|null     $read_at
 * @property Carbon|null     $created_at
 * @property string|null     $created_by
 * @property Carbon|null     $updated_at
 * @property string|null     $updated_by
 * @property Model|\Eloquent $notifiable
 *
 * @method static DatabaseNotificationCollection<int, static>        all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static>        get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static Builder|DatabaseNotification                       read()
 * @method static Builder|DatabaseNotification                       unread()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedBy($value)
 * @method static DatabaseNotificationCollection<int, static>        all($columns = ['*'])
 * @method static DatabaseNotificationCollection<int, static>        get($columns = ['*'])
 *
 * @mixin Eloquent
 */
>>>>>>> 399a8fc (Update notification and notify theme models and composer dependenciesThis commit updates the Notification and NotifyTheme models with new methods for retrieving all notifications and themes. It also updates the composer.json file to use the correct larastan package. The phpstan.neon.dist file is also updated to reflect this change)
class Notification extends DatabaseNotification
{
    protected $connection = 'notify';
}
