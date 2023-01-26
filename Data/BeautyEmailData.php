<?php

declare(strict_types=1);

namespace Modules\Notify\Data;

use Spatie\LaravelData\Data;
use Modules\Notify\Data\BeautyEmailViewData;

class BeautyEmailData extends Data
{
    public array $view;
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
    public ?array $css = [];
    public array $colors;
}
