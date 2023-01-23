<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

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
 * @property string                          $body_html
 * @property string|null                     $theme
 *
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
 *
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel {
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
    ];
}
