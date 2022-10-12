<?php
/**
 * --.
 */
declare(strict_types=1);

namespace Modules\Notify\Models\Panels\Actions;

// -------- services --------

use Illuminate\Support\Facades\Mail;
use Modules\Notify\Emails\BeautyEmail;
use Modules\Notify\Notifications\Notify;
use Modules\Theme\Services\ThemeService;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\TestNotification;
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

        $template_options = [
            'ark' => 'ark',
            'minty' => 'minty',
            'sunny' => 'sunny',
        ];

        $view = ThemeService::getView();

        $view_params = [
            'view' => $view,
            'options' => $options,
            'template_options'=>$template_options,
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
        /*
        try {
            Mail::raw($data['body'], function ($msg) use ($data) {
                $msg->to($data['to'])->subject($data['subject']);
            });
        } catch (ErrorException $e) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        */
        //$view='notify::emails.welcome';
        $view='notify::emails.samples.ark';
        $test=(object)['a'=>'b'];
        $users=[
            new Notify('mail','marco.sottana@gmail.com'),
        ];

        Notification::send($users, new TestNotification($test));
        /*
        $beautymail = app()->make(BeautyEmail::class);
        $view_params=$beautymail->getSettings();

        return view($view,$view_params);

        $beautymail->send($view, [], 
            function(\Illuminate\Mail\Message $message) use($data){
		        $res=$message
			        //->from($data['from'])
			        ->to($data['to'])
			        ->subject($data['subject']);
	        }
        );
        */
        //*/




        echo '<h3>Done</h3>';
    }
}

