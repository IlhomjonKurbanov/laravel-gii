<?php

namespace Huynt\Gii;

use Illuminate\Support\ServiceProvider;

class GiiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
	    $this->loadRoutesFrom(__DIR__.'/routes.php');
	    $this->loadViewsFrom(__DIR__.'/views', 'gii');


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
	    $this->app->make('Huynt\Gii\Controllers\GiiController');
    }
}
