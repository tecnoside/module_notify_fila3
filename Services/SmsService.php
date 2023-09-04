<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

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
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------
=======
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Services\ArtisanService;
use Modules\Xot\Services\FileService;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\RouteService;
use Modules\Xot\Services\StubService;
use Modules\Xot\Traits\Getter;

//---------CSS------------
>>>>>>> 42aa20e (.)

/**
 * Class SmsService.
 */
class SmsService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
<<<<<<< HEAD

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];
=======
    public string $driver;
    public ?string $body;

    public array $vars=[];
>>>>>>> 42aa20e (.)

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

/**
 * Class SmsService.
 */
class SmsService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;

    public string $driver = 'netfun';
    public ?string $body;

    public array $vars = [];

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
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function send() {
        $class = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
=======
    public function setLocalVars(array $vars):self{
        foreach($vars as $k=>$v){
            $this->{$k}=$v;
        }
        $this->vars=array_merge($this->vars,$vars);
        return $this;
    }


    public function send(){
        $class='\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> 42aa20e (.)
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
    }
<<<<<<< HEAD
}
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
}
>>>>>>> 42aa20e (.)
