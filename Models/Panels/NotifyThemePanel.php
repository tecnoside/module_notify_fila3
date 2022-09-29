<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
<<<<<<< HEAD
=======
=======
declare(strict_types=1);

>>>>>>> 6d24e5b (.)
namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

use Modules\Xot\Models\Panels\XotBasePanel;

class NotifyThemePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
     */
    public static string $model = 'Modules\Notify\Models\NotifyTheme';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9f492fe (up)
     */
    public static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
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
                // 'type' => 'String',
                'type' => 'Select',
                'name' => 'lang',
                'comment' => null,
                'col_size' => 3,
                'options' => [
                    'it' => 'it',
                    'fr' => 'fr',
                ],
            ],

            (object) [
                // 'type' => 'String',
                'type' => 'Select',
                'name' => 'type',
                'comment' => null,
                'col_size' => 3,
                'options' => [
                    'mail' => 'mail',
                    'sms' => 'sms',
                ],
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
=======
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
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

<<<<<<< HEAD
<<<<<<< HEAD
  (object) array(
     'type' => 'WysiwygSceditor',
     'name' => 'body_html',
     'comment' => NULL,
     'except'=>['index'],
=======
=======
     'col_size' =>12
>>>>>>> 8b046e1 (.)
  ),
  
=======
>>>>>>> 468f0a0 (.)
  (object) array(
     'type' => 'WysiwygSceditor',
     'name' => 'body_html',
     'comment' => NULL,
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
     'except'=>['index'],
>>>>>>> 468f0a0 (.)
  ),
);
>>>>>>> 42aa20e (.)
=======
            (object) [
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
                'col_size' => 3,
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
>>>>>>> 6d24e5b (.)
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function tabs(): array {
=======
     *
     * @return array
=======
>>>>>>> 9f492fe (up)
     */
<<<<<<< HEAD
    public function tabs():array {
>>>>>>> 42aa20e (.)
=======
    public function tabs(): array {
>>>>>>> 6d24e5b (.)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function cards(Request $request): array {
=======
     *
     * @return array
=======
>>>>>>> 9f492fe (up)
     */
<<<<<<< HEAD
    public function cards(Request $request):array {
>>>>>>> 42aa20e (.)
=======
    public function cards(Request $request): array {
>>>>>>> 6d24e5b (.)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function filters(Request $request = null): array {
=======
     *
     * @return array
=======
>>>>>>> 9f492fe (up)
     */
<<<<<<< HEAD
    public function filters(Request $request = null):array {
>>>>>>> 42aa20e (.)
=======
    public function filters(Request $request = null): array {
>>>>>>> 6d24e5b (.)
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function lenses(Request $request): array {
=======
     *
     * @return array
=======
>>>>>>> 9f492fe (up)
     */
<<<<<<< HEAD
    public function lenses(Request $request):array {
>>>>>>> 42aa20e (.)
=======
    public function lenses(Request $request): array {
>>>>>>> 6d24e5b (.)
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function actions(): array {
=======
     *
     * @return array
=======
>>>>>>> 9f492fe (up)
     */
<<<<<<< HEAD
    public function actions():array {
>>>>>>> 42aa20e (.)
=======
    public function actions(): array {
>>>>>>> 6d24e5b (.)
        return [];
    }
}
