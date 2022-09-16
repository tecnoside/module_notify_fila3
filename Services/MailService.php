<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

<<<<<<< HEAD
// ---------CSS------------
=======
//---------CSS------------
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

/**
 * Class SmsService.
 */
class MailService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;

    public string $driver = 'duocircle';
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

    /**
     * ---.
     */
<<<<<<< HEAD
    public function send(): self {
=======
    public function send() {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    }

    /**
     * ---.
     */
<<<<<<< HEAD
    public function try(): self {
=======
    public function try() {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->try();
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    }
}
