<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
abstract class BasePivot extends Pivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /**
     * @var bool
     */
    public $incrementing = true;

    protected $perPage = 30;

    // use Searchable;
    /**
     * @var string
     */
    protected $connection = 'notify';

    // this will use the specified database connection
    /**
     * @var array
     */
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * @var array<string, string>
     */
    protected $casts = [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'id' => 'string', // must be string else primary key of related model will be typed as int
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
=======
=======
>>>>>>> 25230a8 (first)
        'id'=>'string', //must be string else primary key of related model will be typed as int
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
<<<<<<< HEAD
>>>>>>> a7e2096 (first)
=======
=======
>>>>>>> 05adcda (up)
        'id' => 'string', // must be string else primary key of related model will be typed as int
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
<<<<<<< HEAD
>>>>>>> 3ae9a71 (Dusting)
=======
>>>>>>> 05adcda (up)
=======
>>>>>>> 25230a8 (first)
    ];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
