<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 48d3f55 (up)
=======
declare(strict_types=1);

>>>>>>> bc60653 (up)
=======
declare(strict_types=1);

>>>>>>> 602db11 (up)
namespace Modules\Notify\Actions;

use Exception;
use GuzzleHttp\Client;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

class NetfunSendAction
{
=======
=======
use GuzzleHttp\Exception\ClientException;
>>>>>>> bc60653 (up)
=======
use GuzzleHttp\Exception\ClientException;
>>>>>>> 602db11 (up)
use Illuminate\Support\Str;
use Modules\Notify\Data\SmsData;
=======
>>>>>>> ace9eb3 (up)
use Spatie\QueueableAction\QueueableAction;

class NetfunSendAction {
>>>>>>> 48d3f55 (up)
    use QueueableAction;

    public string $token;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $vars = [];

=======
    public array $vars=[];
>>>>>>> 48d3f55 (up)
=======
    public array $vars = [];

>>>>>>> bc60653 (up)
=======
    public array $vars = [];

>>>>>>> 602db11 (up)
    /**
     * Create a new action instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
        $token = config('services.netfun.token');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (null === $token) {
>>>>>>> 602db11 (up)
=======
        if (null == $token) {
>>>>>>> 915cbe1 (.)
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [services.netfun.token] ');
        }
        $this->token = $token;
    }

    /**
<<<<<<< HEAD
     * Execute the action.
     */
    public function execute(SmsData $sms): array
    {
=======
    public function __construct() {
        // Prepare the action for execution, leveraging constructor injection.
        $token = config('services.netfun.token');
        if (! is_string($token)) {
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [services.netfun.token] ');
        }
        $this->token = $token;
    }

    /**
=======
>>>>>>> 602db11 (up)
     * Execute the action.
     */
    public function execute(SmsData $sms): array {
>>>>>>> 48d3f55 (up)
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // dddx([ord($this->body[0]), $this->body]);

        $sms->to .= '';
        if (Str::startsWith($sms->to, '00')) {
            $sms->to = '+39' . substr($sms->to, 2);
        }

        if (! Str::startsWith($sms->to, '+')) {
            $sms->to = '+39' . $sms->to;
=======
        
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)

        // dddx([ord($this->body[0]), $this->body]);

        $sms->to = $sms->to.'';
        if (Str::startsWith($sms->to, '00')) {
            $sms->to = '+39'.substr($sms->to, 2);
        }

        if (! Str::startsWith($sms->to, '+')) {
            $sms->to = '+39'.$sms->to;
>>>>>>> 48d3f55 (up)
        }

        $body = [
            'api_token' => $this->token,
            // "gateway"=> 99,
            'sender' => $sms->from,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'text_template' => $sms->body, // .'  '.rand(1, 100),
=======
            'text_template' => $sms->body,//.'  '.rand(1, 100),
>>>>>>> 48d3f55 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> bc60653 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> 602db11 (up)
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            // 'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $sms->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        // dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
<<<<<<< HEAD
            throw new Exception($e->getMessage() . '[' . __LINE__ . '][' . __FILE__ . ']');
=======
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
>>>>>>> 48d3f55 (up)
        }
        /*
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
        */

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)

        return $this->vars;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->vars;
    }
}
>>>>>>> 48d3f55 (up)
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
