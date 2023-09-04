<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

<<<<<<< HEAD
// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
=======
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
>>>>>>> 5f3f456 (up)
    /**
     * The module namespace to assume when generating URLs to actions.
     */
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Notify\Http\Controllers';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
=======
    protected $moduleNamespace = 'Modules\Notify\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot() {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
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
    protected function mapWebRoutes() {
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
    protected function mapApiRoutes() {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Notify', '/Routes/api.php'));
    }
>>>>>>> 5f3f456 (up)
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
<?php

=======
>>>>>>> 9f492fe (up)
declare(strict_types=1);

namespace Modules\Notify\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d27db1b (.)
<?php

namespace Modules\Notify\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
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
    public function boot() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function boot()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
    public function boot()
    {
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function map()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
    public function map()
    {
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
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
    protected function mapWebRoutes() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function mapWebRoutes()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
    protected function mapWebRoutes()
    {
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
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
    protected function mapApiRoutes() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function mapApiRoutes()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 9f492fe (up)
=======
    protected function mapApiRoutes()
    {
>>>>>>> d27db1b (.)
=======
>>>>>>> 0d776db (up)
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Notify', '/Routes/api.php'));
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
=======
>>>>>>> fe06862 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Notify\Http\Controllers';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
}
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> d27db1b (.)
