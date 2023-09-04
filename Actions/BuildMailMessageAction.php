<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction
{
    use QueueableAction;

<<<<<<< HEAD
    /**
     * @param  DataCollection<AttachmentData>  $attachments
     */
    public function execute(
        string $name,
        Model $model,
        array $view_params = [],
        DataCollection $attachments = null
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(\Modules\Notify\Actions\NotifyTheme\Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
        $email = (new MailMessage)
            ->from($theme->view_params['from_email'], $theme->view_params['from'])
            ->subject($view_params['subject'] ?? $theme->subject)
            ->view($view_html, $theme->view_params);

        if (! empty($attachments)) {
            foreach ($attachments as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
=======
=======
>>>>>>> fe06862 (.)
use Illuminate\Support\Str;
use Modules\Notify\Models\NotifyTheme;
=======
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
>>>>>>> dfee631 (up)
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction
{
    use QueueableAction;

    // --- modificare con Modules\Notify\Actions\NotifyTheme\Get
=======
>>>>>>> 5cbe3de (up)
    /**
     * @param  DataCollection<AttachmentData>  $attachments
     */
    public function execute(
        string $name,
        Model $model,
        array $view_params = [],
        DataCollection $attachments = null
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(\Modules\Notify\Actions\NotifyTheme\Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
        $email = (new MailMessage)
            ->from($theme->view_params['from_email'], $theme->view_params['from'])
            ->subject($view_params['subject'] ?? $theme->subject)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->view($view_html, $view_params);
<<<<<<< HEAD
>>>>>>> 5da1f59 (up)
=======
>>>>>>> fe06862 (.)
=======
            ->view($view_html, $view_params)
            // TO-DO: va messo qua il ciclo degli attachments?
        ;
>>>>>>> aedf4cb (up)
=======
            ->view($view_html, $view_params);
=======
            ->view($view_html, $theme->view_params);
>>>>>>> 6eafc0a (up)

        if (! empty($attachments)) {
            foreach ($attachments as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
>>>>>>> b068ab9 (up)
=======
use Illuminate\Support\Str;
use Modules\Notify\Models\NotifyTheme;
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction {
    use QueueableAction;

    public function execute(string $name, Model $model, array $view_params): MailMessage {
        $view_params = array_merge($view_params, $model->toArray());
        $type='email';
        $theme = NotifyTheme::firstOrCreate([
            'lang' => $view_params['lang'] ?? app()->getLocale(),
            'type' => $type, // email,sms,whatsapp,piccione
            'post_type' => $name,
            'post_id' => $view_params['post_id'] ?? 0,
        ]);

        


        if (null == $theme->subject) {
            $subject = trans('lu::auth.'.$name.'.subject');
            $theme->update(['subject' => $subject]);
        }
        if (null == $theme->theme) {
            $theme->update(['theme' => 'ark']);
        }
        if (null == $theme->body_html) {
            $html = trans('lu::auth.'.$name.'.body_html');

            if ('verify-email' == $name && 3 == $view_params['post_id']) {
                $html .= '<br/>When you\'ll re-login this will be your password: ##password##';
            }

            $theme->update(['body_html' => $html]);
        }
        $view_params = array_merge($view_params, $theme->toArray());
        // $this->view_params['url'] = (string)$url;

        $body_html = $theme->body_html;
        foreach ($view_params as $k => $v) {
            if (is_string($v)) {
                $body_html = Str::replace('##'.$k.'##', $v, $body_html);
            }
        }

        $view_params['body_html'] = $body_html;

        $view_html = 'lu::auth.emails.html';

        // $out = view($view_html, $this->view_params);
        // dddx($this->view_params);
        // die($out->render());

        return (new MailMessage())
            // ->from('barrett@example.com', 'Barrett Blair')
            ->subject($theme->subject)
            ->view($view_html, $view_params);
>>>>>>> 681ec81 (up)
    }
}
