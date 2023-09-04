<?php
/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\MailEngines;

use ErrorException;
use Exception;
use Illuminate\Support\Facades\Mail;

// ---------CSS------------

/**
 * Class SmsService.
 */
<<<<<<< HEAD
class MailtrapEngine
{
    private static ?self $instance = null;

=======
class MailtrapEngine {
    private static ?self $instance = null;
>>>>>>> e8014ec (.)
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

<<<<<<< HEAD
    public function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
=======
    public function __construct() {
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
>>>>>>> e8014ec (.)
        }

        return self::$instance;
    }

<<<<<<< HEAD
    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
=======
    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
>>>>>>> e8014ec (.)
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

<<<<<<< HEAD
    public function send(): self
    {
=======
    public function send(): self {
>>>>>>> e8014ec (.)
        dddx('WIP');

        return $this;
    }

<<<<<<< HEAD
    public function try(): void
    {
=======
    public function try(): void {
>>>>>>> e8014ec (.)
        // dddx($this);

        // Mail::raw('Hello World!', function($msg) {$msg->to('vair81@gmail.com')->subject('Test Email'); });

<<<<<<< HEAD
<<<<<<< HEAD
        // try {
        Mail::raw((string) $this->body, function ($msg) {
            $msg->to($this->to)->subject('Test Email');
        });
        // Dead catch - ErrorException is never thrown in the try block.
        // } catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }
=======
        try {
            Mail::raw($this->body, function ($msg) {
                $msg->to($this->to)->subject('Test Email');
            });
        } catch (ErrorException $e) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
>>>>>>> e8014ec (.)
=======
        //try {
            Mail::raw((string)$this->body, function ($msg) {
                $msg->to($this->to)->subject('Test Email');
            });
        //Dead catch - ErrorException is never thrown in the try block. 
        //} catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        //}
>>>>>>> 1ebfe39 (up)
    }
}
