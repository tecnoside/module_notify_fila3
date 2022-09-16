<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
<<<<<<< HEAD
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
=======
//---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
////use Laravel\Scout\Searchable;
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
abstract class BaseModel extends Model {
    use Updater;

    // use Searchable;
    // use Cachable;
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
abstract class BaseModel extends Model
{
    use Updater;
    //use Searchable;
    //use Cachable;
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

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
<<<<<<< HEAD
    protected static function newFactory() {
        return FactoryService::newFactory(static::class);
=======
    protected static function newFactory()
    {
        return FactoryService::newFactory(get_called_class());
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    }
}
