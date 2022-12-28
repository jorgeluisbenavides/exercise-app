<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use CloudCreativity\LaravelJsonApi\LaravelJsonApi;
use \Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LaravelJsonApi::defaultApi('free');
        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
