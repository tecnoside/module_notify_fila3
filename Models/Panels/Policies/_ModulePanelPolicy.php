<?php
namespace Modules\Notify\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Notify\Models\Panels\Policies\_ModulePanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy {
    public function testSms(UserContract $user,PanelContract $panel):bool{
        return true;
    }
    public function testMail(UserContract $user,PanelContract $panel):bool{
        return true;
    }
}
