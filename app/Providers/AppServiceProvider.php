<?php

namespace App\Providers;

use App\Contracts\Video\VideoHosting;
use App\Services\Video\Vimeo;
use App\Services\Video\Youtube;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $serviceYoutube = $this->app->make(Youtube::class, [
            'apiToken' => 'test'
        ]);
        $this->app->instance(VideoHosting::class, $serviceYoutube);
        
        $this->app->singleton(VideoHosting::class, function($app){
            return new Youtube;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
