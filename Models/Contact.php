<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * Modules\Notify\Models\Contact.
 *
 * @property int                             $id
 * @property string                          $model_type
 * @property string                          $model_id
 * @property string|null                     $contact_type
 * @property string|null                     $value
 * @property string|null                     $user_id
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $token
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereVerifiedAt($value)
 * @mixin \Eloquent
 * @mixin IdeHelperContact
 */
class Contact extends BaseModel
{
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'model_id', 'model_type', 'contact_type', 'value',
        'verified_at', 'updated_at', 'created_at',
        'updated_by', 'created_by', 'user_id', 'token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'model_id' => 'string',
        'user_id' => 'string',
    ];
}
