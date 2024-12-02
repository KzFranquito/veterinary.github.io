<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TwitterService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    $this->app->singleton(TwitterService::class, function ($app) {
        return new TwitterService();
    });
    }


    public function boot()
    {
        //
    }
}
