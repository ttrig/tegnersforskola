<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('web')->group(base_path('routes/web.php'));
        });
    }

    protected function configureRateLimiting()
    {
        // RateLimiter::for('form', fn (Request $request) => Limit::perDay(5)->by($request->ip()));
    }
}
