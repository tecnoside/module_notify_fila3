<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;

class _ModulePanelPolicy extends XotBasePanelPolicy {
    /**
     * ---.
     */
    public function testSms(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function trySms(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
    public function testMail(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function tryMail(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
    public function trySendMail(UserContract $user, PanelContract $panel): bool {
<<<<<<< HEAD
=======
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
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
        return true;
    }

    /**
     * --.
     */
    public function TryAlert(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
