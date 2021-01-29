<?php

namespace FireBender\Laravel\Complyant\Providers;

use Illuminate\Support\ServiceProvider;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicantCommand;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicationCommand;
use GuzzleHttp\Client as GuzzleClient;
use FireBender\Laravel\Complyant\Services\ComplyantService;

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
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/complyant.php', 'complyant'
        );

        $this->app->singleton('RestClient', function ($app) {

            $user_agent = config('complyant.user_agent');

            $config = [
                'headers' => [
                    'User-Agent' => $user_agent
                ]
            ];

            return new GuzzleClient($config);
        });

        $this->app->singleton('ComplyantService', function ($app) {

            $client = $app->make('RestClient');

            return new ComplyantService($client);
        });
    }

}
