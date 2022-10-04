<?php
/**
 * @see https://github.com/Snowfire/Beautymail/blob/master/src/Snowfire/Beautymail/Beautymail.php
 */

namespace Modules\Notify\Emails;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\PendingMail;

class BeautyEmail implements Mailer {
    /**
     * Contains settings for emails processed by Beautymail.
     *
     * @var
     */
    private $settings;

    /**
     * The mailer contract depended upon.
     *
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    private $mailer;

    /**
     * Initialise the settings and mailer.
     *
     * @param $settings
     */
    public function __construct(?array $settings=null) {
        if($settings==null){
            $settings=array_merge(
                        config('beautymail.view'),
                        [
                            'css' => !is_null(config('beautymail.css')) && count(config('beautymail.css')) > 0 ? implode(' ', config('beautymail.css')) : '',
                        ]
                        );
        }
        $this->settings = $settings;
        $this->mailer = app()->make('Illuminate\Contracts\Mail\Mailer');
        $this->setLogoPath();
    }

    public function getSettings(){
        return $this->settings;
    }

    public function to($users)
    {
        return (new PendingMail($this))->to($users);
    }

    public function bcc($users)
    {
        return (new PendingMail($this))->bcc($users);
    }
    
    public function cc($users)
    {
        return (new PendingMail($this))->cc($users);
    }

    /**
     * Retrieve the settings.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->settings;
    }
    
    /**
     * @return \Illuminate\Contracts\Mail\Mailer
     */
    public function getMailer()
    {
        return $this->mailer;
    }

    /**
     * Send a new message using a view.
     *
     * @param string|array    $view
     * @param array           $data
     * @param \Closure|string $callback
     *
     * @return void
     */
    public function send($view, array $data = [], $callback = null)
    {
        $data = array_merge($this->settings, $data);

        $this->mailer->send($view, $data, $callback);
    }

    /**
     * Send a new message using the a view via queue.
     *
     * @param string|array    $view
     * @param array           $data
     * @param \Closure|string $callback
     *
     * @return void
     */
    public function queue($view, array $data, $callback)
    {
        $data = array_merge($this->settings, $data);

        $this->mailer->queue($view, $data, $callback);
    }

    /**
     * @param $view
     * @param array $data
     *
     * @return \Illuminate\View\View
     */
    public function view($view, array $data = [])
    {
        $data = array_merge($this->settings, $data);

        return view($view, $data);
    }

    /**
     * Send a new message when only a raw text part.
     *
     * @param string $text
     * @param mixed  $callback
     *
     * @return void
     */
    public function raw($text, $callback)
    {
        return $this->mailer->send(['raw' => $text], [], $callback);
    }

    /**
     * Get the array of failed recipients.
     *
     * @return array
     */
    public function failures()
    {
        return $this->mailer->failures();
    }

    /**
     * @return mixed
     */
    private function setLogoPath()
    {
        $this->settings['logo']['path'] = str_replace(
            '%PUBLIC%',
            \Request::getSchemeAndHttpHost(),
            $this->settings['logo']['path']
        );
    }
}
