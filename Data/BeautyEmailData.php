<?php

declare(strict_types=1);

namespace Modules\Notify\Data;

use Spatie\LaravelData\Data;

class BeautyEmailData extends Data {
    public array $view;
    public array $css;
    public array $colors;
}
