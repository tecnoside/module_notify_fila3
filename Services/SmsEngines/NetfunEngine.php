<?php

declare(strict_types=1);

namespace Modules\Notify\Services\SmsEngines;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

//---------CSS------------

/**
 * Class SmsService.
 */
class NetfunEngine {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

    public string $send_method = 'batch';

    public function __construct() {
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function send(): self {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        //dddx([ord($this->body[0]), $this->body]);

        $body = [
            'api_token' => $token,
            //"gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body,
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            'async' => true,
            'max_sms_length' => 1,
            'utf8_enabled' => false,
            'destinations' => [
                [
                    'number' => $this->to,

                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                ],
            ],
        ];

        //dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }

    public function sendNormal(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
}
