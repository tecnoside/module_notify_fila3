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
    public function execute(string $body_html, Model $model, string $keyword): string
    {

        $text = $body_html;

        $model_to_array = $model->toArray();

        foreach ($model_to_array as $key => $value) {
            if (is_string($value) || null == $value) {
                if ($keyword == 'profile') {
                    $val = $model->getProfileExtraFieldValueAttribute('name', $key);
                } else {
                    $val = $model->{$key};
                }

                if(is_null($val) || is_string($val)){
                    $text = str_replace('[' . $keyword . '.' . $key . ']', (string) $val ?? '', $text);
                }
            }
        }

        $text = str_replace('[now]', now()->format('d/m/Y'), $text);


        return $text;
    }
}
