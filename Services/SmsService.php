<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> d27db1b (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;

// ---------CSS------------

/**
 * Class SmsService.
 */
class SmsService
{
    private static ?self $instance = null;

    public ?string $from;
    public string $to;

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self
    {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function send(): self
    {
        $class = '\Modules\Notify\Services\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
        $instance = $class::make()
            ->setLocalVars($this->vars)
            ->send();

        $this->mergeVars($instance->getVars());

        return $this;
    }

    public function getVars(): array
    {
        return $this->vars;
    }
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
=======
>>>>>>> fe06862 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d27db1b (.)
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
<<<<<<< HEAD
=======
>>>>>>> 6d24e5b (.)
use Illuminate\Support\Str;

//---------CSS------------
>>>>>>> 42aa20e (.)
=======
=======
>>>>>>> a7caca4 (.)
use Illuminate\Support\Str;

//---------CSS------------
>>>>>>> d27db1b (.)

/**
 * Class SmsService.
 */
class SmsService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];
=======
    public string $driver;
=======
    public string $driver='netfun';
>>>>>>> 8b046e1 (.)
=======
=======
>>>>>>> 8b12d20 (.)
=======
>>>>>>> 79bdce6 (.)
    public string $driver='netfun';
=======
    public string $driver;
>>>>>>> 42aa20e (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5ae214b (.)
=======
=======
    public string $driver='netfun';
>>>>>>> 8b046e1 (.)
>>>>>>> 8b12d20 (.)
=======
    public string $driver='netfun';
=======
    public string $driver;
>>>>>>> 42aa20e (.)
>>>>>>> d073338 (.)
=======
=======
    public string $driver='netfun';
>>>>>>> 8b046e1 (.)
>>>>>>> 79bdce6 (.)
    public ?string $body;

    public array $vars=[];
>>>>>>> 42aa20e (.)
=======

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];
>>>>>>> 6d24e5b (.)
=======
    public string $driver;
=======
    public string $driver='netfun';
>>>>>>> c9f3a57 (.)
    public ?string $body;

    public array $vars=[];
>>>>>>> d27db1b (.)
=======

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];
>>>>>>> a7caca4 (.)

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function send(): self {
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
        $instance = $class::make()
            ->setLocalVars($this->vars)
            ->send();

        $this->mergeVars($instance->getVars());

        return $this;
    }

    public function getVars() {
        return $this->vars;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> fe06862 (.)

/**
 * Class SmsService.
 */
class SmsService
{
    private static ?self $instance = null;

    public ?string $from;
    public string $to;

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self
    {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function send() {
=======
    public function send(): self {
>>>>>>> 9f492fe (up)
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
=======
    public function setLocalVars(array $vars):self{
        foreach($vars as $k=>$v){
            $this->{$k}=$v;
=======
    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
>>>>>>> 6d24e5b (.)
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

<<<<<<< HEAD
    public function send(){
        $class='\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> 42aa20e (.)
=======
    public function send() {
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> 6d24e5b (.)
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
=======
    public function getVars() {
=======
    public function getVars(): array {
>>>>>>> 1ebfe39 (up)
        return $this->vars;
>>>>>>> 9f492fe (up)
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
}
>>>>>>> 42aa20e (.)
=======
}
>>>>>>> 6d24e5b (.)
=======
    public function send(): self {
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
=======
    public function send(): self
    {
        $class = '\Modules\Notify\Services\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
>>>>>>> b735fbf (.)
        $instance = $class::make()
            ->setLocalVars($this->vars)
            ->send();

        $this->mergeVars($instance->getVars());

        return $this;
    }

    public function getVars(): array
    {
        return $this->vars;
    }
}
>>>>>>> fe06862 (.)
=======
    public function setLocalVars(array $vars):self{
        foreach($vars as $k=>$v){
            $this->{$k}=$v;
=======
    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
>>>>>>> a7caca4 (.)
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function send() {
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
    }
}
<<<<<<< HEAD
>>>>>>> d27db1b (.)
=======
>>>>>>> a7caca4 (.)
