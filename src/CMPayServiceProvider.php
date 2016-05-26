<?php

namespace KingsDevelopment;

use Illuminate\Support\ServiceProvider;

class CMPayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/cmpay.php' => config_path('cmpay.php'),
        ], 'config');

        CMPay::init();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
