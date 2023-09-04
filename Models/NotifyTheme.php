<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d27db1b (.)
=======
>>>>>>> a758bd5 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Eloquent;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

=======
>>>>>>> b1dceab (up)
=======
>>>>>>> a758bd5 (.)
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;

>>>>>>> bc733de (up)
/**
 * Modules\Notify\Models\NotifyTheme.
 *
 * @property int                             $id
 * @property string|null                     $lang
 * @property string|null                     $type
 * @property string|null                     $subject
 * @property string|null                     $body
 * @property string|null                     $from
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $updated_at
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string|null                     $updated_by
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string                          $body_html
 * @property string|null                     $theme
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property string|null                     $updated_by
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $body_html
 * @property string|null                     $theme
>>>>>>> 52b4ada (up)
 * @property string|null                     $from_email
 * @property string|null                     $logo_src
 * @property int|null                        $logo_width
 * @property int|null                        $logo_height
 * @property array                           $logo
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10ed461 (up)
 *
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
=======
=======
 *
>>>>>>> da86307 (up)
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory(...$parameters)
>>>>>>> 3d1ec9b (up)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @mixin IdeHelperNotifyTheme
 *
 * @property \Illuminate\Database\Eloquent\Model|Eloquent $linkable
 *
=======
=======
 *
>>>>>>> da86307 (up)
=======
=======
>>>>>>> a758bd5 (.)
 * @property string|null $updated_by
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $body_html
 * @property string|null $theme
<<<<<<< HEAD
>>>>>>> 27d29a3 (up)
=======
>>>>>>> a758bd5 (.)
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property-read array $logo
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereTheme($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3d1ec9b (up)
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
class NotifyTheme extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

=======
class NotifyTheme extends BaseModel
{
>>>>>>> 2e16e99 (up)
=======
class NotifyTheme extends BaseModel {
>>>>>>> abf6fd4 (up)
=======
 *
=======
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedBy($value)
>>>>>>> 27d29a3 (up)
=======
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedBy($value)
>>>>>>> a758bd5 (.)
=======
 *
=======
>>>>>>> ae9bb4f (up)
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedBy($value)
<<<<<<< HEAD
 *
>>>>>>> 52b4ada (up)
=======
>>>>>>> ae9bb4f (up)
 * @mixin \Eloquent
 * @mixin IdeHelperNotifyTheme
 */
class NotifyTheme extends BaseModel
{
<<<<<<< HEAD
>>>>>>> da86307 (up)
=======
>>>>>>> a758bd5 (.)
    /**
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'lang',
        'type',
        'subject',
        'body',
        'body_html',
        'from',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be7b8e (.)
=======
>>>>>>> a758bd5 (.)
        'from_email',
        'post_type',
        'post_id',
        'theme',
        'logo_src',
        'logo_width',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'logo_height',
        'view_params',
<<<<<<< HEAD
    ];

    protected $appends = [
        'logo',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
        'view_params' => 'array',
    ];

    public function getLogoAttribute(?array $value): array
    {
        return [
            // 'path' => asset(strval($this->logo_src)),
            'path' => url($this->getFirstMediaUrl()),
            'width' => $this->logo_width ?? 50,
            'height' => $this->logo_height ?? 50,
        ];
    }

    /**
     * Get the parent linkable model (user or post).
     */
    public function linkable(): MorphTo
    {
        return $this->morphTo('post');
    }
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> fe06862 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3a62aee (up)
 * Modules\Notify\Models\NotifyTheme.
=======
 * Modules\Notify\Models\NotifyTheme
>>>>>>> b5251e5 (up)
=======
 * Modules\Notify\Models\NotifyTheme
>>>>>>> fe06862 (.)
=======
 * Modules\Notify\Models\NotifyTheme.
>>>>>>> 1c1596b (up)
 *
 * @property int                             $id
 * @property string|null                     $lang
 * @property string|null                     $type
 * @property string|null                     $subject
 * @property string|null                     $body
 * @property string|null                     $from
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $body_html
 * @property string|null                     $theme
 * @property string|null                     $from_email
 * @property string|null                     $logo_src
 * @property int|null                        $logo_width
 * @property int|null                        $logo_height
 * @property array                           $logo
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedBy($value)
 * @mixin IdeHelperNotifyTheme
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $linkable
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    /**
     * @var array<string>
     */
    protected $fillable = [
<<<<<<< HEAD
=======
 * --
=======
 * --.
>>>>>>> 6d24e5b (.)
 */
class NotifyTheme extends BaseModel {
    /**
     * @var array<string>
     */
<<<<<<< HEAD
    protected $fillable=[
>>>>>>> 42aa20e (.)
=======
/**
 * --.
 */
class NotifyTheme extends BaseModel {
    /**
     * @var array<string>
     */
<<<<<<< HEAD
    protected $fillable=[
>>>>>>> d27db1b (.)
        'id',
        'lang',
        'type',
        'subject',
        'body',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'body_html',
=======
>>>>>>> 8b046e1 (.)
=======
        'body_html',
>>>>>>> 468f0a0 (.)
=======
>>>>>>> c9f3a57 (.)
=======
        'body_html',
>>>>>>> 001896b (.)
        'from',
=======
        'post_type',
        'post_id',
        'theme',
>>>>>>> 002b93b (up)
=======
        'logo_height'
>>>>>>> 2e16e99 (up)
=======
        'logo_height',
>>>>>>> abf6fd4 (up)
=======
        'logo_height',
>>>>>>> a758bd5 (.)
=======
>>>>>>> 52b4ada (up)
    ];

    protected $appends = [
        'logo',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
        'view_params' => 'array',
    ];

    public function getLogoAttribute(?array $value): array
    {
        return [
            'path' => asset(strval($this->logo_src)),
            'width' => $this->logo_width ?? 50,
            'height' => $this->logo_height ?? 50,
        ];
    }

    /**
     * Get the parent linkable model (user or post).
     */
    public function linkable(): MorphTo
    {
        return $this->morphTo('post');
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * --.
 */
class NotifyTheme extends BaseModel {
    /**
     * @var array<string>
     */
=======
>>>>>>> 6d24e5b (.)
    protected $fillable = [
=======
>>>>>>> fe06862 (.)
=======
    protected $fillable = [
>>>>>>> a7caca4 (.)
        'id',
        'lang',
        'type',
        'subject',
        'body',
        'body_html',
        'from',
<<<<<<< HEAD
<<<<<<< HEAD
        'from_email',
        'post_type',
        'post_id',
        'theme',
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
=======
=======
>>>>>>> 42aa20e (.)
<<<<<<< HEAD
>>>>>>> d073338 (.)
=======
=======
        'from',
>>>>>>> 8b046e1 (.)
>>>>>>> 79bdce6 (.)
    ];

    protected $appends = [
        'logo',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
        'view_params' => 'array',
    ];

    public function getLogoAttribute(?array $value): array
    {
        return [
            // 'path' => asset(strval($this->logo_src)),
            'path' => url($this->getFirstMediaUrl()),
            'width' => $this->logo_width ?? 50,
            'height' => $this->logo_height ?? 50,
        ];
    }

    /**
     * Get the parent linkable model (user or post).
     */
    public function linkable(): MorphTo
    {
        return $this->morphTo('post');
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
    ];
}
>>>>>>> 42aa20e (.)
=======
>>>>>>> 6d24e5b (.)
=======
>>>>>>> fe06862 (.)
=======
    ];
}
>>>>>>> d27db1b (.)
=======
    ];
}
>>>>>>> a7caca4 (.)
=======
>>>>>>> a758bd5 (.)
