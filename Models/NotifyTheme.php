<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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
 *
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
 *
 * @mixin IdeHelperNotifyTheme
 *
 * @property \Illuminate\Database\Eloquent\Model|Eloquent $linkable
 *
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

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
        'from_email',
        'post_type',
        'post_id',
        'theme',
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
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
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3a62aee (up)
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
 * @property string|null                     $updated_by
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string                          $body_html
 * @property string|null                     $theme
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme     whereUpdatedBy($value)
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property-read array $logo
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereTheme($value)
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel {
    /**
     * @var array<string>
     */
    protected $fillable = [
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
        'id',
        'lang',
        'type',
        'subject',
        'body',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'body_html',
=======
>>>>>>> 8b046e1 (.)
=======
        'body_html',
>>>>>>> 468f0a0 (.)
        'from',
    ];
}
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
        'id',
        'lang',
        'type',
        'subject',
        'body',
        'body_html',
        'from',
        'from_email',
        'post_type',
        'post_id',
        'theme',
        'logo_src',
        'logo_width',
        'logo_height',
    ];

    protected $appends = [
        'logo',
    ];

    public function getLogoAttribute(?array $value): array {
        return [
            'path' => asset($this->logo_src),
            'width' => $this->logo_width,
            'height' => $this->logo_height,
        ];
    }
}
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
