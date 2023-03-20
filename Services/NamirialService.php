<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * Class NamirialService.
 */
class NamirialService
{
    private static ?self $instance = null;
    private string $base_endpoint;
    private string $endpoint_version;
    private string $full_base_endpoint;
    /**
     * @var array|mixed
     */
    private $response;
    private string $endpoint;
    private string $http_method;
    private array $params;
    private string $api_key;
    private string $api_secret;
    private array $headers;
    private string $last_file_id;
    private string $last_envelope_id;
    /**
     * @var string|null
     */
    private $last_envelope_file_id = null;

    private array $recipient_informations;

    public function __construct()
    {
        $this->base_endpoint = 'https://demo.esignanywhere.net/Api';
        $this->endpoint_version = '/v6';
        $this->full_base_endpoint = $this->base_endpoint . $this->endpoint_version;
        $this->api_key = config('namirial.api_key');
        // authorization bearer
        $this->api_secret = config('namirial.api_secret');
        $this->headers = [
            'Authorization' => 'Bearer ' . $this->api_secret,
            'Content-Type' => 'application/json',
        ];

        $this->recipient_informations['LanguageCode'] = 'IT';
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    private function uploadRequest(): self
    {
        $prepareResponse = Http::acceptJson()->withToken($this->api_secret)->attach(
            'attachment',
            $this->params['File'],
            $this->params['FileName']
        )->post($this->endpoint);

        // dd([$prepareResponse, $this]);
        if (200 != $prepareResponse->status()) {
            throw new \Exception('Invalid Request. Response for file ' . $this->params['FileName'] . ' is status ' . $prepareResponse->status() . ' [' . __LINE__ . '][' . __FILE__ . ']');
        }

        $this->response = $prepareResponse->json();

        //Debugbar::info('uploadRequest Response', $this->response['FileId']);

        return $this;
    }

    private function download(?string $filename = 'test.pdf'): self
    {
        $response = Http::withHeaders($this->headers)->{$this->http_method}($this->endpoint, $this->params);
        $contents = $response->getBody()->getContents();
        Storage::disk('local')->put($filename, $contents);

        return $this;
    }

    private function request(): self
    {
        $prepareResponse = Http::acceptJson()->withHeaders($this->headers)->{$this->http_method}($this->endpoint, $this->params);
        $this->response = $prepareResponse->json();

        /*if (200 != $prepareResponse->status()) {
            throw new \Exception('Invalid Request. Response is status '.$prepareResponse->status().' ['.__LINE__.']['.__FILE__.']');
        }*/

        return $this;
    }

    public function getEnvelopeId(): string
    {
        return $this->last_envelope_id;
    }

    public function setEnvelopeId(string $envelope_id): self
    {
        $this->last_envelope_id = $envelope_id;

        return $this;
    }

    public function setRecipientGivenName(string $name): self
    {
        $this->recipient_informations['GivenName'] = $name;

        return $this;
    }

    public function setRecipientEmail(string $email): self
    {
        $this->recipient_informations['Email'] = $email;

        return $this;
    }

    public function setRecipientPhoneNumber(string $phone_number): self
    {
        $this->recipient_informations['PhoneNumber'] = $phone_number;

        return $this;
    }

    public function setRecipientSurname(string $surname): self
    {
        $this->recipient_informations['Surname'] = $surname;

        return $this;
    }

    /**
     * @return array|mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function systemVersion(): self
    {
        $this->endpoint = $this->full_base_endpoint . '/system/version';
        $this->http_method = 'get';
        $this->params = [];
        $this->request();

        return $this;
    }

    public function fileUpload($file_path): self
    {
        // Get the contents of the file as a string
        $fileContents = Storage::disk('local')->get($file_path);

        $this->endpoint = $this->full_base_endpoint . '/file/upload';
        $this->http_method = 'post';
        $this->params = [
            'File' => $fileContents,
            'FileName' => basename($file_path),
        ];
        $this->uploadRequest();

        $this->last_file_id = $this->response['FileId'];

        return $this;
    }

    public function filePrepare(): self
    {
        $this->endpoint = $this->full_base_endpoint . '/file/prepare';
        $this->http_method = 'post';
        $this->params =
            [
                'FileIds' => [
                    $this->last_file_id,
                ],
            ];

        //Debugbar::info('filePrepare Params', $this->params);

        //Debugbar::info('filePrepare Response', $this->response);

        $this->request();

        return $this;
    }

    public function envelopeSend(): self
    {
        $this->endpoint = $this->full_base_endpoint . '/envelope/send';
        $this->http_method = 'post';

        $this->params = [
            'Documents' => [
                [
                    'FileId' => $this->last_file_id,
                    'DocumentNumber' => 1,
                ],
            ],
            'Name' => 'Delega Privacy Federation',
            'AddDocumentTimestamp' => false,
            'ShareWithTeam' => true,
            'LockFormFieldsOnFinish' => true,
            'Activities' => [
                [
                    'Action' => [
                        'Sign' => [
                            'RecipientConfiguration' => [
                                'ContactInformation' => $this->recipient_informations,
                                'AuthenticationConfiguration' => [
                                    'SmsOneTimePassword' => (object) [],
                                ],
                                'SendEmails' => true,
                                'AllowAccessAfterFinish' => false,
                                'IncludedEmailAppLinks' => [
                                    'Android' => false,
                                    'iOS' => false,
                                    'Windows' => false,
                                ],
                                'AllowDelegation' => false,
                                'RequireViewContentBeforeFormFilling' => false,
                            ],
                            'SequenceMode' => 'NoSequenceEnforced',
                            'Elements' => [
                                'Signatures' => [
                                    [
                                        'ElementId' => str()->uuid()->toString(),
                                        'Required' => true,
                                        'DocumentNumber' => 1,
                                        'UseExternalTimestampServer' => false,
                                        'AllowedSignatureTypes' => [
                                            'ClickToSign' => [
                                                'UseExternalSignatureImage' => 'Disabled',
                                                'Preferred' => false,
                                                'StampImprintConfiguration' => [
                                                    'DisplayExtraInformation' => true,
                                                    'FontName' => 'Times New Roman',
                                                    'FontSizeInPt' => 11,
                                                    'DisplayEmail' => true,
                                                    'DisplayIp' => true,
                                                    'DisplayName' => true,
                                                    'DisplaySignatureDate' => true,
                                                ],
                                            ],
                                        ],
                                        'FieldDefinition' => [
                                            'Position' => [
                                                'PageNumber' => 1,
                                                'X' => 374,
                                                'Y' => 22.8898,
                                            ],
                                            'Size' => [
                                                'Width' => 190,
                                                'Height' => 80,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SigningGroup' => '1',
                        ],
                    ],
                    'VisibilityOptions' => [
                        [
                            'DocumentNumber' => 1,
                            'IsHidden' => false,
                        ],
                    ],
                ],
                [
                    'Action' => [
                        'SendCopy' => [
                            'RecipientConfiguration' => [
                                'ContactInformation' => $this->recipient_informations,
                            ],
                            'CopyingGroup' => '2',
                        ],
                    ],
                    'VisibilityOptions' => [
                        [
                            'DocumentNumber' => 1,
                            'IsHidden' => false,
                        ],
                    ],
                ],
            ],
            'EmailConfiguration' => [
                'Subject' => '#RecipientFirstName# #RecipientLastName#, per favore firmi il documento #EnvelopeName#',
                'Message' => 'Gentile #RecipientFirstName# #RecipientLastName#
       la prego di firmare il documento #EnvelopeName# seguendo i passi proposti dalla procedura. Si tratta solo di pochi click.
       La pratica scadrà il #ExpirationDate#
       ',
                'SenderDisplayName' => 'Privacy Federation',
            ],
            'ReminderConfiguration' => [
                'Enabled' => true,
                'FirstReminderInDays' => 5,
                'ReminderResendIntervalInDays' => 3,
                'BeforeExpirationInDays' => 3,
            ],
            'ExpirationConfiguration' => [
                'ExpirationInSecondsAfterSending' => 2419200,
            ],
            /*'CallbackConfiguration' => [
                'CallbackUrl' => url('/pfed/digital_signature/callback'),
            ],*/
            /*'AgreementConfiguration' => [
                'Translations' => [
                    [
                        'LanguageCode' => 'IT',
                        'Text' => 'Informativa e Conferma Privacy Utente Finale',
                        'Header' => 'Informativa e Conferma Privacy',
                        'IsDefault' => false,
                    ],
                ],
            ],*/
        ];

        $this->request();

        //Debugbar::info('envelopeSend Params', $this->params);

        //Debugbar::info('envelopeSend Response', $this->response);

        if (empty($this->response['EnvelopeId'])) {
            // dddx([$this->params, $this->response]);
            throw new \Exception('EnvelopeId is empty. Might you need to set a valid email address. You may also have reached the limit of envelopes that can be sent');
        }

        $this->last_envelope_id = $this->response['EnvelopeId'];

        return $this;
    }

    public function envelopeFind(?array $custom_params = []): self
    {
        $this->endpoint = $this->full_base_endpoint . '/envelope/find';
        $this->http_method = 'post';

        $this->params = [
            'Status' => 'Completed',
        ];

        // if custom_params is set then use it
        if ($custom_params) {
            $this->params = $custom_params;
        }

        $this->request();

        return $this;
    }

    public function envelopeInformations(): self
    {
        $this->endpoint = $this->full_base_endpoint . '/envelope/' . $this->last_envelope_id;
        $this->http_method = 'get';
        $this->params = [];
        $this->request();

        return $this;
    }

    public function envelopeFiles(): self
    {
        $this->endpoint = $this->full_base_endpoint . '/envelope/' . $this->last_envelope_id . '/files';
        $this->http_method = 'get';
        $this->params = [];
        $this->request();
        $this->last_envelope_file_id = $this->response['Documents'][0]['FileId'] ?? null;

        // if last_envelope_file_id is null then give error
        if (null === $this->last_envelope_file_id) {
            throw new \Exception('last_envelope_file_id is null');
        }

        return $this;
    }

    public function downloadDocument(?string $filename = ''): self
    {
        if (null === $this->last_envelope_file_id) {
            throw new \Exception('last_envelope_file_id is null');
        }

        $this->endpoint = $this->full_base_endpoint . '/file/' . $this->last_envelope_file_id;
        $this->http_method = 'get';
        $this->params = [];

        $this->download($filename);

        return $this;
    }
}
