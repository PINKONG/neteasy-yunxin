<?php

namespace Pinkong\YunXin;

use Illuminate\Support\ServiceProvider;

class YunXinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/yunxin.php' => config_path('yunxin.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('YunXinHelper', function () {
            $appKey = config('yunxin.app_key');
            $appSecret = config('yunxin.app_secret');
            return new Entrance($appKey, $appSecret);
        });
    }

}
