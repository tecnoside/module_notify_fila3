<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Modules\Notify\Database\Factories\ContactFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * Modules\Notify\Models\Contact.
 *
 * @property int $id
 * @property string $model_type
 * @property string $model_id
 * @property string|null $contact_type
 * @property string|null $value
 * @property string|null $user_id
 * @property string|null $verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
<<<<<<< HEAD
 * @property string|null $created_by
 * @property string|null $token
=======
 * @property string|null $sms_sent_at
 * @property int|null $sms_count
 * @property string|null $mail_sent_at
 * @property int|null $mail_count
 * @property string|null $survey_pdf_id
 * @property string|null $token
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $attribute_1
 * @property string|null $attribute_2
 * @property string|null $attribute_3
 * @property string|null $attribute_4
 * @property string|null $attribute_5
 * @property string|null $attribute_6
 * @property string|null $attribute_7
 * @property string|null $attribute_8
 * @property string|null $attribute_9
 * @property string|null $attribute_10
 * @property string|null $attribute_11
 * @property string|null $attribute_12
 * @property string|null $attribute_13
 * @property string|null $attribute_14
 * @property string|null $usesleft
 * @property string|null $sms_status_code
 * @property string|null $sms_status_txt
 * @property int|null $duplicate_count
 * @property int|null $order_column
>>>>>>> bea252b (Add sms_sent_at, sms_count, mail_sent_at, mail_count, token, first_name, and last_name properties to the Contact model. Remove language property from the Contact model. Remove body, body_html, theme, from_email, logo_src, logo_width, logo_height, and view_params properties from the NotifyTheme model)
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static Builder|Contact newModelQuery()
 * @method static Builder|Contact newQuery()
 * @method static Builder|Contact query()
 * @method static Builder|Contact whereContactType($value)
 * @method static Builder|Contact whereCreatedAt($value)
 * @method static Builder|Contact whereCreatedBy($value)
 * @method static Builder|Contact whereId($value)
<<<<<<< HEAD
 * @method static Builder|Contact whereModelId($value)
 * @method static Builder|Contact whereModelType($value)
=======
 * @method static Builder|Contact whereLastName($value)
 * @method static Builder|Contact whereMailCount($value)
 * @method static Builder|Contact whereMailSentAt($value)
 * @method static Builder|Contact whereMobilePhone($value)
 * @method static Builder|Contact whereOrderColumn($value)
 * @method static Builder|Contact whereSmsCount($value)
 * @method static Builder|Contact whereSmsSentAt($value)
 * @method static Builder|Contact whereSmsStatusCode($value)
 * @method static Builder|Contact whereSmsStatusTxt($value)
 * @method static Builder|Contact whereSurveyPdfId($value)
>>>>>>> bea252b (Add sms_sent_at, sms_count, mail_sent_at, mail_count, token, first_name, and last_name properties to the Contact model. Remove language property from the Contact model. Remove body, body_html, theme, from_email, logo_src, logo_width, logo_height, and view_params properties from the NotifyTheme model)
 * @method static Builder|Contact whereToken($value)
 * @method static Builder|Contact whereUpdatedAt($value)
 * @method static Builder|Contact whereUpdatedBy($value)
 * @method static Builder|Contact whereUserId($value)
 * @method static Builder|Contact whereValue($value)
 * @method static Builder|Contact whereVerifiedAt($value)
 * @mixin Eloquent
 */
class Contact extends BaseModel
{
    /**
     * Undocumented variable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'model_id', 'model_type', 'contact_type', 'value',
        'verified_at', 'updated_at', 'created_at',
        'updated_by', 'created_by', 'user_id', 'token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'model_id' => 'string',
        'user_id' => 'string',
    ];
}
