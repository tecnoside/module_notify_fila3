<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
<<<<<<< HEAD
// --- Services --
=======
//--- Services --
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

use Modules\Xot\Models\Panels\XotBasePanel;

class NotifyThemePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public static string $model = 'Modules\Notify\Models\NotifyTheme';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
<<<<<<< HEAD
=======
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'String',
                'name' => 'lang',
                'comment' => null,
                'col_size' => 3,
            ],

            (object) [
<<<<<<< HEAD
                // 'type' => 'String',
                'type' => 'Select',
                'name' => 'type',
                'comment' => null,
                'col_size' => 3,
                'options' => [
                    'mail' => 'mail',
                    'sms' => 'sms',
                ],
=======
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
                'col_size' => 3,
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
            ],
            (object) [
                'type' => 'String',
                'name' => 'from',
                'comment' => null,
                'col_size' => 3,
            ],

            (object) [
                'type' => 'String',
                'name' => 'subject',
                'comment' => null,
                'col_size' => 12,
            ],

            (object) [
                'type' => 'Textarea',
                'name' => 'body',
                'comment' => null,
                'except' => ['index'],
            ],

            (object) [
                'type' => 'WysiwygSceditor',
                'name' => 'body_html',
                'comment' => null,
                'except' => ['index'],
                'col_size' => 12,
            ],
        ];
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public function tabs(): array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    public function actions(): array {
        return [];
    }
}
