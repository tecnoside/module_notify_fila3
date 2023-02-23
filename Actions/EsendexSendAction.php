<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
use Exception;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use function Safe\curl_exec;
use function Safe\curl_getinfo;
use function Safe\curl_init;
use function Safe\curl_setopt;
use function Safe\json_decode;
use function Safe\json_encode;

/**
 * @property string $base_endpoint
 */
class EsendexSendAction
{
    use QueueableAction;

    public string $base_endpoint;

    public function __construct()
    {
        $this->base_endpoint = 'https://app.messaggissima.it/API/v1.0/REST/';
    }

    /**
     * Sends an SMS message.
     */
    public function execute(SmsData $sms): array
    {
        $auth = $this->login();

        if (! is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
        }

        $data = [
            'message' => $sms->body,
            'message_type' => 'N',
            'returnCredits' => false,
            'recipient' => [$sms->to],
            'sender' => config('esendex.sender'),
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        Assert::isArray($info);
        if (201 !== $info['http_code']) {
            return [];
        }

        $res = json_decode(strval($response), true);

        dddx($res);
        if (! is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
        }

        return $res;
    }

    /**
     * Authenticates the user given it's username and password.
     * Returns the pair user_key, Session_key.
     */
    public function login(): ?array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $login_string = $this->base_endpoint . 'login?username=' . config('esendex.username') . '&password=' . config('esendex.password');

        curl_setopt($ch, CURLOPT_URL, $login_string);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        // dddx(['login_string' => $login_string, 'response' => $response]);

        $info = curl_getinfo($ch);

        curl_close($ch);
        Assert::isArray($info);
        if (200 !== $info['http_code']) {
            return null;
        }

        return explode(';', strval($response));
=======
use Modules\Notify\Data\SmsData;
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> ace9eb3 (up)
use Spatie\QueueableAction\QueueableAction;
=======
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> fe06862 (.)

use function Safe\curl_init;
use function Safe\curl_setopt;
=======
>>>>>>> 78ec921 (up)
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 42f9249 (.)
=======
>>>>>>> b735fbf (.)
use function Safe\curl_exec;
use function Safe\curl_getinfo;
use function Safe\curl_init;
use function Safe\curl_setopt;
use function Safe\json_decode;
use function Safe\json_encode;

/**
 * @property string $base_endpoint
 */
class EsendexSendAction
{
    use QueueableAction;

    public string $base_endpoint;

    public function __construct()
    {
        $this->base_endpoint = 'https://app.messaggissima.it/API/v1.0/REST/';
    }

    /**
     * Sends an SMS message.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(SmsData $sms): array {
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
>>>>>>> 01786c0 (up)
=======
=======
        
>>>>>>> aa57784 (up)
=======
    public function execute(SmsData $sms): array
    {
>>>>>>> e73574f (up)
=======
    public function execute(SmsData $sms): array
    {
>>>>>>> fe06862 (.)
        $auth = $this->login();

        if (! is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
        }

        $data = [
            'message' => $sms->body,
            'message_type' => 'N',
            'returnCredits' => false,
            'recipient' => [$sms->to],
            'sender' => config('esendex.sender'),
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        Assert::isArray($info);
        if (201 !== $info['http_code']) {
            return [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return json_decode($response, true);
>>>>>>> 7f83000 (up)
=======
        $res = json_decode($response, true);
=======
        $res = json_decode(strval($response), true);
<<<<<<< HEAD
>>>>>>> 4a1a664 (up)
=======
        $res = json_decode(strval($response), true);
>>>>>>> fe06862 (.)
=======

        dddx($res);
>>>>>>> 9de64a2 (up)
        if (! is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
        }

        return $res;
<<<<<<< HEAD
>>>>>>> e73574f (up)
=======
>>>>>>> fe06862 (.)
    }

    /**
     * Authenticates the user given it's username and password.
     * Returns the pair user_key, Session_key.
     */
    public function login(): ?array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $login_string = $this->base_endpoint . 'login?username=' . config('esendex.username') . '&password=' . config('esendex.password');

        curl_setopt($ch, CURLOPT_URL, $login_string);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        // dddx(['login_string' => $login_string, 'response' => $response]);

        $info = curl_getinfo($ch);

        curl_close($ch);
        Assert::isArray($info);
        if (200 !== $info['http_code']) {
            return null;
        }

        return explode(';', strval($response));
=======
use Modules\Notify\Data\SmsData;
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
<<<<<<< HEAD
        return [];
>>>>>>> 657fe4e (up)
=======
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
>>>>>>> c43e2d9 (up)
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
