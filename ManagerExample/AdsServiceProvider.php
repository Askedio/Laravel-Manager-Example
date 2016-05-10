<?php

namespace App\Ads;

use Illuminate\Support\ServiceProvider;

class AdsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Ads\Contracts\Factory::class, function ($app) {
            return new AdsManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [\App\Ads\Contracts\Factory::class];
    }
}
