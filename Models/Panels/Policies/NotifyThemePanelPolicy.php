<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\Notify\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Notify\Models\Panels\Policies\NotifyThemePanelPolicy as Panel;

>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 6de787a (up)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> fe06862 (.)

class NotifyThemePanelPolicy extends XotBasePanelPolicy {
}
