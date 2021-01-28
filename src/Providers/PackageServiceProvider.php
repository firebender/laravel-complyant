<?php

namespace FireBender\Laravel\Complyant\Providers;

use Illuminate\Support\ServiceProvider;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicantCommand;
use FireBender\Laravel\Complyant\Console\Commands\CreateApplicationCommand;

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
    }

}
