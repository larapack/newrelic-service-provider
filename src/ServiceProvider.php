<?php

namespace Larapack\NewRelicServiceProvider;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Request;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (extension_loaded('newrelic')) {
			      newrelic_set_appname(Request::getHost());
		    }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
