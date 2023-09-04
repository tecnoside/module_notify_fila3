<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

=======
namespace Modules\Notify\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Notify\Models\Panels\Policies\NotifyThemePanelPolicy as Panel;

>>>>>>> 42aa20e (.)
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class NotifyThemePanelPolicy extends XotBasePanelPolicy {
}
