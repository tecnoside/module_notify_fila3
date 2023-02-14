<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

class Contact extends BaseModel {
    protected $fillable = ['model_id', 'model_type', 'contact_type', 'value', 'verified_at', 'updated_at', 'created_at', 'updated_by', 'created_by', 'user_id', 'token'];
}
