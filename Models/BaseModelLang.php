<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
////use Laravel\Scout\Searchable;
=======
// //use Laravel\Scout\Searchable;
>>>>>>> b1dceab (up)
=======
// //use Laravel\Scout\Searchable;
>>>>>>> a758bd5 (.)

use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModelLang.
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> a758bd5 (.)
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
>>>>>>> b1dceab (up)
=======
>>>>>>> a758bd5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array
     */
    protected $hidden = [
        //'password'
=======
=======
>>>>>>> a758bd5 (.)
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
<<<<<<< HEAD
>>>>>>> b1dceab (up)
=======
>>>>>>> a758bd5 (.)
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

<<<<<<< HEAD
<<<<<<< HEAD
    //-----------
=======
    // -----------
>>>>>>> b1dceab (up)
=======
    // -----------
>>>>>>> a758bd5 (.)
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
