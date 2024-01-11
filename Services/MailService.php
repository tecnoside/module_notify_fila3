<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------

/**
 * Class SmsService.
 */
class MailService
{
    private static ?self $instance = null;

    public ?string $from = null;

    public string $to;

    public string $driver = 'duocircle';

    public ?string $body = null;

    public array $vars = [];

    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance instanceof MailService) {
=======
        if (! self::$instance instanceof \Modules\Notify\Services\MailService) {
>>>>>>> 25230a84 (first)
=======
        if (! self::$instance instanceof \Modules\Notify\Services\MailService) {
>>>>>>> a7e20963 (first)
=======
        if (! self::$instance instanceof \Modules\Notify\Services\MailService) {
>>>>>>> dev
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

    /**
     * ---.
     */
    public function send(): self
    {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();

        return $this;
    }

    /**
     * ---.
     */
    public function try(): self
    {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->try();

        return $this;
    }
}
