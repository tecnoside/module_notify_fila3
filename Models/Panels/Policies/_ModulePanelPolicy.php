<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;

class _ModulePanelPolicy extends XotBasePanelPolicy
{
    /**
     * ---.
     */
    public function testSms(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

<<<<<<< HEAD
    public function trySms(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

=======
>>>>>>> b3b016d (up)
    public function trySms(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
    public function testMail(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

<<<<<<< HEAD
    public function tryMail(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

=======
>>>>>>> b3b016d (up)
    public function tryMail(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * --.
     */
<<<<<<< HEAD
    public function trySendMail(UserContract $user, PanelContract $panel): bool {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d27db1b (.)
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
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)
=======
    public function trySendMail(UserContract $user, PanelContract $panel): bool
    {
>>>>>>> aedf4cb (up)
        return true;
    }

    /**
     * --.
     */
    public function TryAlert(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    /**
     * --.
     */
    public function trySendNotification(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    /**
     * --.
     */
    public function tryThemeNotification(UserContract $user, PanelContract $panel): bool
    {
=======
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
        return true;
    }

    /**
     * --.
     */
    public function TryAlert(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
