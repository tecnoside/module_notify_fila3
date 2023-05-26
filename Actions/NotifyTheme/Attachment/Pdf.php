<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\NotifyTheme\Attachment;

use Modules\Notify\Models\NotifyTheme;
use Spatie\QueueableAction\QueueableAction;

/**
 * -- buildmailmessage ha troppi pezzi simili ..
 */
class Pdf
{
    use QueueableAction;

    public function execute(string $post_type, array $view_params)
    {
        $lang = app()->getLocale();
        $notify_theme = NotifyTheme::firstOrCreate([
            'lang' => $lang,
            'type' => 'pdf',
            'post_type' => $post_type,
            'post_id' => 0,
        ]);
    }
}
