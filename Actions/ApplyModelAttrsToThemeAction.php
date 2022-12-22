<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Models\NotifyTheme;
use Spatie\QueueableAction\QueueableAction;

class ApplyModelAttrsToThemeAction {
    use QueueableAction;

    public function __construct() {
    }

    /**
     * Execute the action.
     */
    public function execute(Model $model, string $name, array $extra = []): NotifyTheme {
      
        $theme = NotifyTheme::firstOrCreate(
            [
                'lang' => app()->getLocale(),
                'post_type' => $name,
            ],
            [
                'subject' => '---',
            ]
        );

        if ('' === $theme->body_html) {
            $theme->body_html = '<div class="row">
                <div class="col">##title##</div>
                <div class="col">##url##</div>
            </div>';
            $theme->save();
        }

        $data = $model->toArray();

        $data = array_merge($data, $extra);
        $html = $theme->body_html;
        foreach ($data as $k => $v) {
            if (\is_string($v)) {
                $html = str_replace('##'.$k.'##', $v, $html);
            }
        }

        $html = preg_replace('/##\w+##/', 'N.D.', $html);
        
        $theme->mail_body = $html;

        // dddx($theme->mail_body);

        return $theme;
    }
}