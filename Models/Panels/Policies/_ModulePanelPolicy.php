<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy {
    /**
     * ---.
     */
    public function testSms(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
    public function testMail(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
    public function trySendMail(UserContract $user, PanelContract $panel): bool {
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
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        return true;
    }
}
