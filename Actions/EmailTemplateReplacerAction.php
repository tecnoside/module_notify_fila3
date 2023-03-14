<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\QueueableAction\QueueableAction;

class EmailTemplateReplacerAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(Model $notify_theme, Model $model, string $keyword): string
    {

        $text = $notify_theme->body_html;

        $model_to_array = $model->toArray();

        foreach ($model_to_array as $key => $value) {
            if (is_string($value) || null == $value) {
                if ($model == 'profile') {
                    $val = $model->getProfileExtraFieldValueAttribute('name', $key);
                } else {
                    $val = $model->{$key};
                }
                $text = str_replace('[' . $keyword . '.' . $key . ']', (string) $val ?? '', $text);
            }
        }

        $text = str_replace('[now]', now()->format('d/m/Y'), $text);

        return $text;
    }
}
