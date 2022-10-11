<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

use Modules\Notify\Models\NotifyTheme;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

class ManageTemplateAction extends XotBasePanelAction {
    public bool $onContainer = true;
    public string $icon = '<i class="fas fa-palette"></i><i class="far fa-envelope"></i>';

    public function handle() {
        $post_type = $this->panel->postType();
        $rows = NotifyTheme::where('post_type', $post_type);
        $view = 'notify::admin.index.acts.manage_template';
        $view_params = [
            'view' => $view,
            'rows' => $rows,
        ];

        return view($view, $view_params);
    }
}
