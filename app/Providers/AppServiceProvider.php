<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\AdminMiddleware;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Router $router): void
    {
        // Register a route middleware alias
        $router->aliasMiddleware('admin', AdminMiddleware::class);
        View::share('settings', GeneralSettings::first());
    }
}
