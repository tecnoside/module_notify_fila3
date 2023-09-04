<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\LU\Models\User;
use Modules\Notify\Notifications\Alert;
use Modules\Theme\Services\ThemeService;

// -------- bases -----------

/**
 * Class TestAction.
 */
class TryAlertAction extends XotBasePanelAction {
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>Try Alert';

    /**
     * @return mixed
     */
    public function handle() {
        $data = request()->all();

        if (! isset($data['user_id'])) {
            abort(403, 'Devi specificare uno user_id');
        }

        // dddx(User::find($data['user_id']));

        $user = User::find($data['user_id']);

        $user->notify(new Alert($user));

        $view = ThemeService::getView();

        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }
}
