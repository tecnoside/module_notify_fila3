<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * @property string $token
 * @property string $model_type
 * @property int    $model_id
 */
class Contact extends BaseModel {
    protected $fillable = [
        'model_id', 'model_type', 'contact_type', 'value',
        'verified_at', 'updated_at', 'created_at',
        'updated_by', 'created_by', 'user_id', 'token',
    ];
}
