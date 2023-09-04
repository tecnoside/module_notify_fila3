<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NamirialData extends Data
{
    public string $endpoint;
    public string $api_key;
    public string $api_secret;

    public static function make(): self
    {
        return self::from(config('namiral'));
    }
}
