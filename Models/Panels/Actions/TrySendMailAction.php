<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------

use Illuminate\Support\Facades\Mail;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class TrySendMailAction.
 */
class TrySendMailAction extends XotBasePanelAction {
    public bool $onItem = true;
    public string $icon = '<i class="fas fa-vial"></i>TrySendMail';

    /**
     * @return mixed
     */
    public function handle() {
        $options = [
            'DuoCircle' => 'duocircle',
            'Mailtrap' => 'mailtrap',
        ];

        $view = ThemeService::getView();

        $view_params = [
            'view' => $view,
            'options' => $options,
        ];

        return view()->make($view, $view_params);
    }

    /**
     * ---.
     */
    public function postHandle() {
        $data = request()->all();
        //$options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);
        //dddx($data);
        try {
            Mail::raw($data['body'], function ($msg) use ($data) {
                $msg->to($data['to'])->subject($data['subject']);
            });
        } catch (ErrorException $e) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
    }
}
