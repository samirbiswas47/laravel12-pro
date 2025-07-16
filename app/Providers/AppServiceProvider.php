<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

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
    public function boot(): void
    {
        //To limit the rate of acces
        RateLimiter::for('ratelimit', function (Request $request) {
            return Limit::perMinute(20)->by($request->ip());
        });
        
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(20)->by( 
                optional($request->user())->id ?: $request->ip()
            );
        });
    }
}
