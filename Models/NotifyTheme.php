<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Eloquent;
>>>>>>> f4cdea5 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * Modules\Notify\Models\NotifyTheme.
 *
<<<<<<< HEAD
 * @property int                                               $id
 * @property string|null                                       $lang
 * @property string|null                                       $type
 * @property string|null                                       $subject
 * @property string|null                                       $body
 * @property string|null                                       $from
 * @property Carbon|null                                       $created_at
 * @property string|null                                       $created_by
 * @property Carbon|null                                       $updated_at
 * @property string|null                                       $updated_by
 * @property string|null                                       $post_type
 * @property int|null                                          $post_id
 * @property string|null                                       $body_html
 * @property string|null                                       $theme
 * @property string|null                                       $from_email
 * @property string|null                                       $logo_src
 * @property int|null                                          $logo_width
 * @property int|null                                          $logo_height
 * @property array                                             $view_params
 * @property array                                             $logo
 * @property Model|\Eloquent                                   $linkable
 * @property MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                          $media_count
 *
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static Builder|NotifyTheme                                   newModelQuery()
 * @method static Builder|NotifyTheme                                   newQuery()
 * @method static Builder|NotifyTheme                                   query()
 * @method static Builder|NotifyTheme                                   whereBody($value)
 * @method static Builder|NotifyTheme                                   whereBodyHtml($value)
 * @method static Builder|NotifyTheme                                   whereCreatedAt($value)
 * @method static Builder|NotifyTheme                                   whereCreatedBy($value)
 * @method static Builder|NotifyTheme                                   whereFrom($value)
 * @method static Builder|NotifyTheme                                   whereFromEmail($value)
 * @method static Builder|NotifyTheme                                   whereId($value)
 * @method static Builder|NotifyTheme                                   whereLang($value)
 * @method static Builder|NotifyTheme                                   whereLogoHeight($value)
 * @method static Builder|NotifyTheme                                   whereLogoSrc($value)
 * @method static Builder|NotifyTheme                                   whereLogoWidth($value)
 * @method static Builder|NotifyTheme                                   wherePostId($value)
 * @method static Builder|NotifyTheme                                   wherePostType($value)
 * @method static Builder|NotifyTheme                                   whereSubject($value)
 * @method static Builder|NotifyTheme                                   whereTheme($value)
 * @method static Builder|NotifyTheme                                   whereType($value)
 * @method static Builder|NotifyTheme                                   whereUpdatedAt($value)
 * @method static Builder|NotifyTheme                                   whereUpdatedBy($value)
 * @method static Builder|NotifyTheme                                   whereViewParams($value)
 *
=======
 * @property int $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $body_html
 * @property string|null $theme
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property array $view_params
 * @property-read array $logo
 * @property-read Model|\Eloquent $linkable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static NotifyThemeFactory factory($count = null, $state = [])
 * @method static Builder|NotifyTheme newModelQuery()
 * @method static Builder|NotifyTheme newQuery()
 * @method static Builder|NotifyTheme query()
 * @method static Builder|NotifyTheme whereBody($value)
 * @method static Builder|NotifyTheme whereBodyHtml($value)
 * @method static Builder|NotifyTheme whereCreatedAt($value)
 * @method static Builder|NotifyTheme whereCreatedBy($value)
 * @method static Builder|NotifyTheme whereFrom($value)
 * @method static Builder|NotifyTheme whereFromEmail($value)
 * @method static Builder|NotifyTheme whereId($value)
 * @method static Builder|NotifyTheme whereLang($value)
 * @method static Builder|NotifyTheme whereLogoHeight($value)
 * @method static Builder|NotifyTheme whereLogoSrc($value)
 * @method static Builder|NotifyTheme whereLogoWidth($value)
 * @method static Builder|NotifyTheme wherePostId($value)
 * @method static Builder|NotifyTheme wherePostType($value)
 * @method static Builder|NotifyTheme whereSubject($value)
 * @method static Builder|NotifyTheme whereTheme($value)
 * @method static Builder|NotifyTheme whereType($value)
 * @method static Builder|NotifyTheme whereUpdatedAt($value)
 * @method static Builder|NotifyTheme whereUpdatedBy($value)
 * @method static Builder|NotifyTheme whereViewParams($value)
>>>>>>> 8a0784c (up)
 * @mixin Eloquent
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    /**
     * @var array<int, string>
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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
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
