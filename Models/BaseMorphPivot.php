<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
<<<<<<< HEAD
abstract class BaseMorphPivot extends MorphPivot {
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

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var bool
     */
    public $timestamps = true;

    protected $perPage = 30;
=======
/**
 * Indicates whether attributes are snake cased on arrays.
 *
 * @see  https://laravel-news.com/6-eloquent-secrets
* 
 * @var bool
 */
// public static $snakeAttributes = true;

protected $perPage = 30;

>>>>>>> 9a6fed4 (up)
=======
    // public static $snakeAttributes = true;

    protected $perPage = 30;
>>>>>>> 5f3f456 (up)

    protected $connection = 'notify';

    /**
     * @var array
     */
    protected $appends = [];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    // protected $attributes = ['related_type' => 'cuisine_cat'];
    /**
<<<<<<< HEAD
     * @var array<string>
=======
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var bool
     */
    public $timestamps = true;
    // protected $attributes = ['related_type' => 'cuisine_cat'];
    /**
     * @var string[]
>>>>>>> 5f3f456 (up)
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        // 'published_at',
    ];

    /**
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];
}
=======
=======
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 47d9a86 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
=======
>>>>>>> b1dceab (up)
abstract class BaseMorphPivot extends MorphPivot {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> b1dceab (up)

    protected $connection = 'notify';

    /**
     * @var array
     */
    protected $appends = [];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var bool
     */
    public $timestamps = true;
    // protected $attributes = ['related_type' => 'cuisine_cat'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1dceab (up)
    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        // 'published_at',
    ];
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];
<<<<<<< HEAD
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> d27db1b (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;
<<<<<<< HEAD
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

    /**
     * @var bool
     */
    public $timestamps = true;

    protected $perPage = 30;
=======
>>>>>>> d27db1b (.)

    protected $connection = 'notify';

    /**
     * @var array
     */
    protected $appends = [];
<<<<<<< HEAD

=======
>>>>>>> d27db1b (.)
    /**
     * @var string
     */
    protected $primaryKey = 'id';
<<<<<<< HEAD

    // protected $attributes = ['related_type' => 'cuisine_cat'];
<<<<<<< HEAD
=======
    //protected $attributes = ['related_type' => 'cuisine_cat'];
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> fe06862 (.)
    /**
     * @var array<string>
=======
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var bool
     */
    public $timestamps = true;
    //protected $attributes = ['related_type' => 'cuisine_cat'];
    /**
     * @var string[]
>>>>>>> d27db1b (.)
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        // 'published_at',
    ];
<<<<<<< HEAD

    /**
     * @var array<string>
=======
    /**
     * @var string[]
>>>>>>> d27db1b (.)
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
>>>>>>> 9349baf (.)
=======
}
>>>>>>> 47d9a86 (.)
=======
>>>>>>> 780e17a (up)
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> d27db1b (.)
