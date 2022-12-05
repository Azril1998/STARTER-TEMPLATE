<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
<<<<<<< HEAD
     * This is used by Laravel authentication to redirect users after login.
=======
     * Typically, users are redirected here after authentication.
>>>>>>> origin/modul6
     *
     * @var string
     */
    public const HOME = '/home';

    /**
<<<<<<< HEAD
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
=======
     * Define your route model bindings, pattern filters, and other route configuration.
>>>>>>> origin/modul6
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
<<<<<<< HEAD
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
=======
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
>>>>>>> origin/modul6
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
<<<<<<< HEAD
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
=======
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
>>>>>>> origin/modul6
        });
    }
}
