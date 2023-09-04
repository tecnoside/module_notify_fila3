<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
<<<<<<< HEAD

// use Modules\Notify\Datas\BeautyEmailViewData;
=======
//use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> ace9eb3 (up)

class BeautyEmailData extends Data
{
    public array $view;
<<<<<<< HEAD
    // css must not be accessed before its inizialization.
    // sulla config beautymail di localhost manca, quindi va gestito se è vuoto
=======
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> ace9eb3 (up)
    public ?array $css = [];
    public array $colors;
}
