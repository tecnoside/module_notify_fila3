<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Notification;
use Modules\Xot\Providers\XotBaseServiceProvider;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'notify';

    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

    public function bootCallback(): void
    {
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Media');
        // Notification::extend('esendex', function ($app) {
        //    return new \Modules\Notify\Notifications\Channels\EsendexChannel;
        // });
=======
use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider {
    /**
     * @var string
<<<<<<< HEAD
     */
    protected $moduleName = 'Notify';

    /**
     * @var string
     */
    protected $moduleNameLower = 'notify';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() {
=======
<?php

namespace Modules\Notify\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class NotifyServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
=======
>>>>>>> 9f492fe (up)
     */
    protected $moduleName = 'Notify';

    /**
<<<<<<< HEAD
     * @var string $moduleNameLower
=======
     * @var string
>>>>>>> 9f492fe (up)
     */
    protected $moduleNameLower = 'notify';

    /**
     * Boot the application events.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot()
    {
>>>>>>> 42aa20e (.)
=======
    public function boot() {
>>>>>>> 9f492fe (up)
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
<<<<<<< HEAD
=======
    public function register()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php'),
<<<<<<< HEAD
=======
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
>>>>>>> 42aa20e (.)
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
=======
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'),
            $this->moduleNameLower
>>>>>>> 9f492fe (up)
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);
<<<<<<< HEAD
=======
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', $this->moduleNameLower.'-module-views']);
<<<<<<< HEAD
=======
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);
<<<<<<< HEAD
=======
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

    private function getPublishableViewPaths(): array {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path.'/modules/'.$this->moduleNameLower)) {
                $paths[] = $path.'/modules/'.$this->moduleNameLower;
            }
        }

        return $paths;
>>>>>>> 5f3f456 (up)
    }
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;
use Illuminate\Support\Facades\Notification;

<<<<<<< HEAD
class NotifyServiceProvider extends ServiceProvider {
    /**
     * @var string
     */
    protected $moduleName = 'Notify';

    /**
     * @var string
     */
    protected $moduleNameLower = 'notify';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'),
            $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', $this->moduleNameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

    private function getPublishableViewPaths(): array {
        $paths = [];
        // $view_paths=\Config::get('view.paths');
        $view_paths = config('view.paths');

        if (! is_iterable($view_paths)) {
            throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
        }
        foreach ($view_paths as $path) {
            if (is_dir($path.'/modules/'.$this->moduleNameLower)) {
                $paths[] = $path.'/modules/'.$this->moduleNameLower;
            }
        }

<<<<<<< HEAD
        return $paths;
    }
=======
class NotifyServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $module_name = 'notify';
<<<<<<< HEAD
>>>>>>> 7616aad (up)
=======

    public function bootCallback(): void {
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Media');
        Notification::extend('esendex', function ($app) {
            return new \Modules\Notify\Notifications\Channels\EsendexChannel();
        });
    }
>>>>>>> ace9eb3 (up)
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider {
    /**
     * @var string
     */
    protected $moduleName = 'Notify';

    /**
     * @var string
     */
    protected $moduleNameLower = 'notify';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', $this->moduleNameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

    private function getPublishableViewPaths(): array {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path.'/modules/'.$this->moduleNameLower)) {
                $paths[] = $path.'/modules/'.$this->moduleNameLower;
            }
        }

        return $paths;
    }
}
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
=======
>>>>>>> 9f492fe (up)
        return $paths;
    }
}
>>>>>>> 42aa20e (.)
