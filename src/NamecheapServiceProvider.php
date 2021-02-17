<?php


namespace GotCreations\Namecheap;


use Illuminate\Support\ServiceProvider;

class NamecheapServiceProvider extends ServiceProvider
{

    public function register() {
        $this->app->bind('namecheap', function ($app) {

            return new Namecheap(config('namecheap'));
        });

        $this->mergeConfigFrom(__DIR__.'/../../../config/namecheap.php', 'namecheappackage');
    }

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../../config/namecheap.php' => config_path('namecheap.php'),
            ], 'config');
        }


    }
}