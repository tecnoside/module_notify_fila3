<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
<<<<<<< HEAD
// //use Laravel\Scout\Searchable;
=======
////use Laravel\Scout\Searchable;
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
<<<<<<< HEAD
abstract class BasePivot extends Pivot {
    use Updater;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    protected $perPage = 30;

    // use Searchable;
=======
abstract class BasePivot extends Pivot
{
    use Updater;
    //use Searchable;
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

    /**
     * @var string
     */
    protected $connection = 'notify'; // this will use the specified database conneciton
    /**
     * @var array
     */
    protected $appends = [];
    /**
<<<<<<< HEAD
     * @var array<string, string>
=======
     * @var array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    protected $casts = [];
    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at'];
    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
}
