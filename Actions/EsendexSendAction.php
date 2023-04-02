<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

/**
 * @property string $base_endpoint
 */
class EsendexSendAction {
    use QueueableAction;

    public function __construct() {
        $this->base_endpoint = 'https://app.esendex.it/API/v1.0/REST/';
    }

    /**
     * Sends an SMS message.
     */
    public function execute(SmsData $sms): array {
        
        $auth = $this->login();

        $data = [
            'message' => $sms->body,
            'message_type' => 'N',
            'returnCredits' => false,
            'recipient' => [$sms->to],
            'sender' => config('esendex.sender'),
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: '.$auth[0],
            'Session_key: '.$auth[1],
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        if (201 != $info['http_code']) {
            return [];
        }

        return json_decode($response, true);
    }

    /**
     * Authenticates the user given it's username and password.
     * Returns the pair user_key, Session_key.
     */
    public function login() {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'login?username='.config('esendex.username').'&password='.config('esendex.password'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);

        curl_close($ch);

        if (200 != $info['http_code']) {
            return null;
        }

        return explode(';', $response);
    }
}
