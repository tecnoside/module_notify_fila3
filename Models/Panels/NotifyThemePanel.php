<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
<<<<<<< HEAD
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
=======
>>>>>>> fe06862 (.)

use Modules\Cms\Models\Panels\XotBasePanel;

class NotifyThemePanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)
     */
    public static string $model = 'Modules\Notify\Models\NotifyTheme';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)
     */
    public static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_size' => 3,
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
                    'en' => 'en',
                    'de' => 'de',
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
                    'email' => 'email',
                    'sms' => 'sms',
                ],
            ],
            (object) [
                'type' => 'String',
                'name' => 'from',
                // 'rules' => 'required|max:11', // max:11 solo se è sms
                'rules' => 'required',
                'comment' => null,
                'col_size' => 3,
            ],
            (object) [
                'type' => 'String',
                'name' => 'from_email',
                // 'rules' => 'required|max:11', // max:11 solo se è sms
                // 'rules' => 'required',
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

            (object) [
                'type' => 'String',
                'name' => 'post_type',
                'col_size' => 3,
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_id',
                'col_size' => 3,
                'comment' => null,
            ],
            (object) [
                'type' => 'Cell',
                'name' => 'theme/logo',
                'col_size' => 3,
                'fields' => $this->logoFields(),
                'comment' => null,
            ],
        ];
    }

    public function logoFields(): array
    {
        return [
            (object) [
                'type' => 'Select',
                'name' => 'theme',
                'comment' => null,
                'col_size' => 3,
                'options' => [
                    'empty' => 'empty',
                    'ark' => 'ark',
                    'minty' => 'minty',
                    'sunny' => 'sunny',
                    'widgets' => 'widgets',
                ],
            ],

            (object) [
                'type' => 'UploadImage',
                'name' => 'logo_src',
                'col_size' => 3,
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'logo_width',
                'col_size' => 3,
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'logo_height',
                'col_size' => 3,
                'comment' => null,
            ],
        ];
<<<<<<< HEAD
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
=======
>>>>>>> fe06862 (.)
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function tabs(): array
    {
>>>>>>> b62f52c (up)
=======
    public function tabs(): array {
>>>>>>> 9c75c21 (up)
=======
    public function tabs(): array
    {
>>>>>>> c7c0159 (up)
=======
     */
    public function tabs(): array
    {
>>>>>>> fe06862 (.)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function cards(Request $request): array
    {
>>>>>>> b62f52c (up)
=======
    public function cards(Request $request): array {
>>>>>>> 9c75c21 (up)
=======
    public function cards(Request $request): array
    {
>>>>>>> c7c0159 (up)
=======
     */
    public function cards(Request $request): array
    {
>>>>>>> fe06862 (.)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function filters(Request $request = null): array
    {
>>>>>>> b62f52c (up)
=======
    public function filters(Request $request = null): array {
>>>>>>> 9c75c21 (up)
=======
    public function filters(Request $request = null): array
    {
>>>>>>> c7c0159 (up)
=======
     */
    public function filters(Request $request = null): array
    {
>>>>>>> fe06862 (.)
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function lenses(Request $request): array
    {
>>>>>>> b62f52c (up)
=======
    public function lenses(Request $request): array {
>>>>>>> 9c75c21 (up)
=======
    public function lenses(Request $request): array
    {
>>>>>>> c7c0159 (up)
=======
     */
    public function lenses(Request $request): array
    {
>>>>>>> fe06862 (.)
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function actions(): array
    {
>>>>>>> b62f52c (up)
=======
    public function actions(): array {
>>>>>>> 9c75c21 (up)
=======
    public function actions(): array
    {
>>>>>>> c7c0159 (up)
=======
     */
    public function actions(): array
    {
>>>>>>> fe06862 (.)
        return [];
    }
}
