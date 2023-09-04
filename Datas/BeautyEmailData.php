<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

// use Modules\Notify\Datas\BeautyEmailViewData;
=======
//use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> ace9eb3 (up)
=======
//use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> fe06862 (.)
=======

// use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> b735fbf (.)
=======
//use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> 8229f91 (up)
=======
//use Modules\Notify\Datas\BeautyEmailViewData;
>>>>>>> a758bd5 (.)

class BeautyEmailData extends Data
{
    public array $view;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // css must not be accessed before its inizialization.
    // sulla config beautymail di localhost manca, quindi va gestito se è vuoto
=======
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> ace9eb3 (up)
=======
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> fe06862 (.)
=======
    // css must not be accessed before its inizialization.
    // sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> b735fbf (.)
=======
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> 8229f91 (up)
=======
    //css must not be accessed before its inizialization.
    //sulla config beautymail di localhost manca, quindi va gestito se è vuoto
>>>>>>> a758bd5 (.)
    public ?array $css = [];
    public array $colors;
}
