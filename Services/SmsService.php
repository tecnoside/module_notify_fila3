<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

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

/**
 * Class SmsService.
 */
class SmsService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
    public string $driver='netfun';
    public ?string $body;

    public array $vars=[];

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
        $this->vars=array_merge($this->vars,$vars);
        return $this;
    }

    public function mergeVars(array $vars):self{
        $this->vars=array_merge($this->vars,$vars);
        return $this;
    }

    public function send(){
        $class='\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
    }
}