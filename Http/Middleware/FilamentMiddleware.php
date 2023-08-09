<?php

namespace Modules\Notify\Http\Middleware;

use Modules\Xot\Http\Middleware\XotBaseFilamentMiddleware;

class FilamentMiddleware extends XotBaseFilamentMiddleware
{
    public static string $module = 'Notify';
    public static string $context = 'filament';
}
