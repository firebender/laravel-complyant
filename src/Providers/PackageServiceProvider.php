<?php

namespace FireBender\Laravel\Complyant\Providers;

use Illuminate\Support\ServiceProvider;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicantCommand;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicationCommand;
use GuzzleHttp\Client as GuzzleClient;

class PackageServiceProvider extends ServiceProvider

{
    /**
     * 
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) 
        {
            $this->commands([
                CreateApplicantCommand::class,
                CreateApplicationCommand::class,
            ]);
        }
    }

    /**
     * 
     */
    public function register()
    {
        $this->app->singleton('RestClient', function ($app) {

            $config = [
                'headers' => [
                    'User-Agent' => 'Jay Arabia User Agent'
                ]
            ];

            return new GuzzleClient($config);
        });
    }

}
