<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
abstract class BasePivot extends Pivot {
    use Updater;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5f3f456 (up)
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
<<<<<<< HEAD
    public static $snakeAttributes = true;
=======
/**
 * Indicates whether attributes are snake cased on arrays.
 *
 * @see  https://laravel-news.com/6-eloquent-secrets
* 
 * @var bool
 */
// public static $snakeAttributes = true;
=======
    // public static $snakeAttributes = true;
>>>>>>> 5f3f456 (up)

    protected $perPage = 30;

<<<<<<< HEAD
    //use Searchable;
>>>>>>> 9a6fed4 (up)
=======
    // use Searchable;
>>>>>>> 5f3f456 (up)

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
    protected $appends = [];

    /**
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * @var array<string>
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
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

    /**
     * @var string
     */
    protected $connection = 'notify'; // this will use the specified database conneciton
    /**
     * @var array
     */
    protected $appends = [];
    /**
     * @var array
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
>>>>>>> 9349baf (.)
