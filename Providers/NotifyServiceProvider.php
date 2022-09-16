<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider {
    /**
     * @var string
=======
namespace Modules\Notify\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class NotifyServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    protected $moduleName = 'Notify';

    /**
<<<<<<< HEAD
     * @var string
=======
     * @var string $moduleNameLower
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
     */
    protected $moduleNameLower = 'notify';

    /**
     * Boot the application events.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot() {
=======
    public function boot()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
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
<<<<<<< HEAD
    public function register() {
=======
    public function register()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
<<<<<<< HEAD
    protected function registerConfig() {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'),
            $this->moduleNameLower
=======
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
<<<<<<< HEAD
    public function registerViews() {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);
=======
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
<<<<<<< HEAD
            $sourcePath => $viewPath,
        ], ['views', $this->moduleNameLower.'-module-views']);
=======
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function registerTranslations() {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);
=======
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf

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
<<<<<<< HEAD
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
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        return $paths;
    }
}
