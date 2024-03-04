<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class FirebaseNotificationData extends Data
{
    public string $type; // ' => $data['type'],

    public string $title; // ' => $data['title'],

    public string $body; // ' => $data['body'],

    public array $data; // ' => json_encode($data['data']),

    public static function fromType(string $type): self
    {
        $data = [
            'type' => $type,
            'title' => trans('camping::notifications.'.strtoupper($type).'.title'),
            'body' => trans('camping::notifications.'.strtoupper($type).'.body'),
            'data' => [],
        ];

        return self::from($data);
    }
}
