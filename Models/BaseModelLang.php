<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
<<<<<<< HEAD
=======
////use Laravel\Scout\Searchable;
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)

use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModelLang.
 *
 * @property string|null $post_type
 */
abstract class BaseModelLang extends Model {
    use HasFactory;

    // use Searchable;
    use LinkedTrait;
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

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
<<<<<<< HEAD
=======
 */
abstract class BaseModelLang extends Model
{
    use Updater;
    //use Searchable;
    use LinkedTrait;
    use HasFactory;

    protected $connection = 'notify';


    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
<<<<<<< HEAD
=======
     * @var array
     */
    protected $hidden = [
        //'password'
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

    // -----------
<<<<<<< HEAD
=======
    //-----------
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
