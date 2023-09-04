<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy {
    public function testSms(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function testMail(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
