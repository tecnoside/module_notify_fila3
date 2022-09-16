<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
=======
namespace Modules\Notify\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Notify\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot() {
=======
    public function boot()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
<<<<<<< HEAD
    public function map() {
=======
    public function map()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
<<<<<<< HEAD
    protected function mapWebRoutes() {
=======
    protected function mapWebRoutes()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Notify', '/Routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
<<<<<<< HEAD
    protected function mapApiRoutes() {
=======
    protected function mapApiRoutes()
    {
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Notify', '/Routes/api.php'));
    }
}
