<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
=======
namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
use Modules\Xot\Contracts\RowsContract;
//--- Services --
>>>>>>> 42aa20e (.)

use Modules\Xot\Models\Panels\XotBasePanel;

class NotifyThemePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 42aa20e (.)
     */
    public static string $model = 'Modules\Notify\Models\NotifyTheme';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
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
                'type' => 'String',
                'name' => 'lang',
                'comment' => null,
                'col_size' => 3,
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
        return array (
  
  (object) array(
     'type' => 'Id',
     'name' => 'id',
     'comment' => NULL,
  ),
  
  (object) array(
     'type' => 'String',
     'name' => 'lang',
     'comment' => NULL,
  ),
  
  (object) array(
     'type' => 'String',
     'name' => 'type',
     'comment' => NULL,
  ),
  
  (object) array(
     'type' => 'String',
     'name' => 'subject',
     'comment' => NULL,
  ),
  
  (object) array(
     'type' => 'Wysiwyg',
     'name' => 'body',
     'comment' => NULL,
  ),
);
>>>>>>> 42aa20e (.)
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
     */
    public function tabs(): array {
=======
     *
     * @return array
     */
    public function tabs():array {
>>>>>>> 42aa20e (.)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
     */
    public function cards(Request $request): array {
=======
     *
     * @return array
     */
    public function cards(Request $request):array {
>>>>>>> 42aa20e (.)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
     */
    public function filters(Request $request = null): array {
=======
     *
     * @return array
     */
    public function filters(Request $request = null):array {
>>>>>>> 42aa20e (.)
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
     */
    public function lenses(Request $request): array {
=======
     *
     * @return array
     */
    public function lenses(Request $request):array {
>>>>>>> 42aa20e (.)
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
     */
    public function actions(): array {
=======
     *
     * @return array
     */
    public function actions():array {
>>>>>>> 42aa20e (.)
        return [];
    }
}
