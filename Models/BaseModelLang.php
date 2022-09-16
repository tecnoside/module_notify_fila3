<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
// //use Laravel\Scout\Searchable;
=======
////use Laravel\Scout\Searchable;
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModelLang.
<<<<<<< HEAD
 *
 * @property string|null $post_type
 */
abstract class BaseModelLang extends Model {
    use Updater;

    // use Searchable;
    use LinkedTrait;
    use HasFactory;
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
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
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
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
=======
     * @var array
     */
    protected $hidden = [
        //'password'
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

<<<<<<< HEAD
    // -----------
=======
    //-----------
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
