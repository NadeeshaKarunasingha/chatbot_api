<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        Carbon::setLocale(config('app.locale'));
        date_default_timezone_set('Asia/Colombo'); // Set timezone globally

          // Force HTTPS in production
    if ($this->app->environment('production')) {
        \URL::forceScheme('https');
    }
    }
}
