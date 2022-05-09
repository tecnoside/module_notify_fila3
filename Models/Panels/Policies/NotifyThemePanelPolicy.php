<?php
namespace Modules\Notify\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Notify\Models\Panels\Policies\NotifyThemePanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class NotifyThemePanelPolicy extends XotBasePanelPolicy {
}
