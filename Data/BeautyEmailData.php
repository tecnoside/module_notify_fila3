<?php

declare(strict_types=1);

namespace Modules\Notify\Data;

use Spatie\LaravelData\Data;
use Modules\Notify\Data\BeautyEmailViewData;

class BeautyEmailData extends Data {
    public BeautyEmailViewData $view;
    public array $css;
    public array $colors;
}
