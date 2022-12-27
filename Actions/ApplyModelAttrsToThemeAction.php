<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\Notify\Models\NotifyTheme;
use Spatie\QueueableAction\QueueableAction;

class ApplyModelAttrsToThemeAction
{
    use QueueableAction;

    public function __construct()
    {
    }

    /**
     * Execute the action.
     */
    public function execute(Model $model, string $name, array $extra, ?Collection $options): NotifyTheme
    {
        if(empty($extra)){
            $extra=[];
        }

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

        if (!empty($options)) {
            $string_to_replace = \Str::between($theme->body_html, '##foreach##', '##endforeach##');
            $items='';
            foreach ($options as $option) {
                $extra = [
                    'highlights' => collect($option->highlights)->pluck('txt')->implode('<hr/>'),
                ];

                $item = $this->replacer($option, $extra, $string_to_replace);
                $items.= $item;
            }

            $theme->body_html = \str_replace($string_to_replace, $items, $theme->body_html);
        }

        $data = $model->toArray();

        $data = array_merge($data, $extra);

        $html = $theme->body_html;
        $html = $this->replacer($model, $extra, $html);

        $theme->body_html = $html;

        return $theme;
    }

    public function replacer($model, $extra, $html)
    {
        $data = $model->toArray();
        $data = array_merge($data, $extra);

        foreach ($data as $k => $v) {
            if (\is_string($v)) {

                $html = str_replace('##' . $k . '##', $v, $html);
            }
        }

        $html = preg_replace('/##\w+##/', 'N.D.', $html);
        return $html;
    }
}