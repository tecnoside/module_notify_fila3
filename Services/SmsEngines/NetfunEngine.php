<?php

declare(strict_types=1);

namespace Modules\Notify\Services\SmsEngines;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Traits\Getter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Modules\Xot\Services\FileService;
use Modules\Xot\Services\StubService;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\RouteService;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Services\ArtisanService;
use GuzzleHttp\Exception\ClientException;
use Modules\Tenant\Services\TenantService;
use Illuminate\Contracts\Support\Renderable;

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

    public string $send_method='batch';

    public function __construct(){
        
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

    public function setLocalVars(array $vars):self{
        foreach($vars as $k=>$v){
            $this->{$k}=$v;
        }
        return $this;
    }

    public function send():self{
        switch($this->send_method){
            case 'batch': return $this->sendBatch();
        }
        
        return $this->sendNormal();
    }

    public function sendBatch():self{
        $endpoint='https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers=[
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json'
        ];
        $token=env('NETFUN_TOKEN');
        $body=[
            'api_token'=> $token,
            //"gateway"=> 99,
            "sender"=> "PamAnderson",
            'text_template'=> "Prova",
            'delivery_callback'=> "https://www.google.com?code={{code}}",
            "default_placeholders"=> [
                "code"=> "0000"
            ],
            "async"=> true, 
            "max_sms_length"=> 1,
            "utf8_enabled"=> false,
            "destinations"=> [
                [
                  "number"=> "+393475896127",
                  //"number"=> "+393283597515",
                  "placeholders"=> [
                    "fullName"=> "Santi",
                    "body"=> "Ciao, hai vinto il premio",
                    "code"=> "1234"
                  ],
                ],
            ],
               
        ];

       

        $client = new Client($headers);
        try{
        $response = $client->post($endpoint,['json' => $body]);
        }catch(ClientException $e){
            dddx($e);
        }
        echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
        echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';

        return $this;
    }


    public function sendNormal():self{
        $endpoint='https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers=[
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json'
        ];
        $token=env('NETFUN_TOKEN');
        
        $body=[
            'api_token'=> $token,
            "text"=>'ciao da pam',
            "numbers"=>'+393475896127',
        ];

       

        $client = new Client($headers);
        try{
            $response = $client->post($endpoint,['json' => $body]);
        }catch(ClientException $e){
            dddx($e);
        }
        echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
        echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';
        return $this;
    }
}