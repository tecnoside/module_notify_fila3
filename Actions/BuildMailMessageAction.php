<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction
{
    use QueueableAction;

    // --- modificare con Modules\Notify\Actions\NotifyTheme\Get
    /**
     * @param DataCollection<AttachmentData>
     */
    public function execute(string $name, Model $model, array $view_params = [], ?DataCollection $attachments = null): MailMessage
    {
        $view_params = array_merge($view_params, $model->toArray());
        $type = 'email';

        $theme = app(\Modules\Notify\Actions\NotifyTheme\Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';

        $email = (new MailMessage())
            ->subject($view_params['subject'] ?? $theme->subject)
            ->view($view_html, $theme->view_params);

        // TO-DO: va messo qua il ciclo degli attachments?
        if (! empty($attachments)) {
            foreach ($attachments as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
