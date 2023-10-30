<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NotifyThemeData extends Data
{
    public ?string $from_email; // from address

    public ?string $from; // from name

    public string $subject;

    public string $body_html;

    public array $view_params;
}
