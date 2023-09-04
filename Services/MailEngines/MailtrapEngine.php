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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class MailtrapEngine
{
    private static ?self $instance = null;

=======
class MailtrapEngine {
    private static ?self $instance = null;
>>>>>>> e8014ec (.)
=======
class MailtrapEngine {
    private static ?self $instance = null;
>>>>>>> fe06862 (.)
=======
class MailtrapEngine
{
    private static ?self $instance = null;

>>>>>>> b735fbf (.)
=======
class MailtrapEngine {
    private static ?self $instance = null;
>>>>>>> a758bd5 (.)
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
=======
=======
>>>>>>> fe06862 (.)
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> b735fbf (.)
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
<<<<<<< HEAD
            self::$instance = new self();
<<<<<<< HEAD
>>>>>>> e8014ec (.)
=======
>>>>>>> fe06862 (.)
=======
            self::$instance = new self;
>>>>>>> b735fbf (.)
=======
    public function __construct() {
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
>>>>>>> a758bd5 (.)
        }

        return self::$instance;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
=======
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> a758bd5 (.)
    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e8014ec (.)
=======
>>>>>>> fe06862 (.)
=======
    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
>>>>>>> b735fbf (.)
=======
>>>>>>> a758bd5 (.)
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function send(): self
    {
=======
    public function send(): self {
>>>>>>> e8014ec (.)
=======
    public function send(): self {
>>>>>>> fe06862 (.)
=======
    public function send(): self
    {
>>>>>>> b735fbf (.)
=======
    public function send(): self {
>>>>>>> a758bd5 (.)
        dddx('WIP');

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function try(): void
    {
=======
    public function try(): void {
>>>>>>> e8014ec (.)
=======
    public function try(): void {
>>>>>>> fe06862 (.)
=======
    public function try(): void
    {
>>>>>>> b735fbf (.)
=======
    public function try(): void {
>>>>>>> a758bd5 (.)
        // dddx($this);

        // Mail::raw('Hello World!', function($msg) {$msg->to('vair81@gmail.com')->subject('Test Email'); });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> df8079b (up)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> 06bf12b (up)
=======
>>>>>>> a758bd5 (.)
        // try {
        Mail::raw((string) $this->body, function ($msg) {
            $msg->to($this->to)->subject('Test Email');
        });
        // Dead catch - ErrorException is never thrown in the try block.
        // } catch (ErrorException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        //try {
            Mail::raw((string)$this->body, function ($msg) {
                $msg->to($this->to)->subject('Test Email');
            });
>>>>>>> d8faaba (up)
        //Dead catch - ErrorException is never thrown in the try block. 
        //} catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        //}
<<<<<<< HEAD
>>>>>>> 1ebfe39 (up)
=======
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }
>>>>>>> df8079b (up)
=======
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }
>>>>>>> fe06862 (.)
=======
>>>>>>> d8faaba (up)
=======
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }
>>>>>>> 06bf12b (up)
=======
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }
>>>>>>> a758bd5 (.)
    }
}
