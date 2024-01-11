<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Notify\Actions\NotifyTheme\Get;
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class BuildMailMessageAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param DataCollection<AttachmentData> $dataCollection
=======
     * @param  DataCollection<AttachmentData>  $dataCollection
>>>>>>> 25230a8 (first)
=======
     * @param  DataCollection<AttachmentData>  $dataCollection
>>>>>>> a7e2096 (first)
     */
    public function execute(
        string $name,
        Model $model,
        array $view_params = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?DataCollection $dataCollection = null
=======
        DataCollection $dataCollection = null
>>>>>>> a7e2096 (first)
=======
        ?DataCollection $dataCollection = null
>>>>>>> 3ae9a71 (Dusting)
=======
        DataCollection $dataCollection = null
>>>>>>> 05adcda (up)
=======
        DataCollection $dataCollection = null
>>>>>>> 25230a8 (first)
=======
        DataCollection $dataCollection = null
>>>>>>> a7e2096 (first)
=======
        ?DataCollection $dataCollection = null
>>>>>>> 3ae9a71 (Dusting)
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
        $fromAddress = $theme->view_params['from_email'] ?? $theme->from_email;
        $fromName = $theme->view_params['from'] ?? $theme->from;
        $subject = $view_params['subject'] ?? $theme->subject;
<<<<<<< HEAD
<<<<<<< HEAD
        $email = (new MailMessage())
=======
        $email = (new MailMessage)
>>>>>>> 25230a8 (first)
=======
        $email = (new MailMessage)
>>>>>>> a7e2096 (first)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);

        if ($dataCollection instanceof DataCollection) {
            foreach ($dataCollection as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
