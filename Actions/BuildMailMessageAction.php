<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a758bd5 (.)
use Illuminate\Support\Str;
use Modules\Notify\Models\NotifyTheme;
=======
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
>>>>>>> ee2c031 (up)
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction
{
    use QueueableAction;

    // --- modificare con Modules\Notify\Actions\NotifyTheme\Get
=======
>>>>>>> 28dc197 (up)
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
>>>>>>> 681ec81 (up)
=======
>>>>>>> a758bd5 (.)
=======
            ->view($view_html, $view_params)
            // TO-DO: va messo qua il ciclo degli attachments?
        ;
>>>>>>> 0cb23b3 (up)
=======
            ->view($view_html, $view_params);
=======
            ->view($view_html, $theme->view_params);
>>>>>>> 891974c (up)

        if (! empty($attachments)) {
            foreach ($attachments as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
>>>>>>> 802179c (up)
    }
}
