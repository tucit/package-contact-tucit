<?php

namespace Demo\Web;

use Illuminate\Support\ServiceProvider;


class WebDemoServiceProvider extends ServiceProvider
{

    public function boot()
    {
       $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
       $this->loadViewsFrom(__DIR__ . '/views','demo');
       $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }


    public function register()
    {

    }

}
