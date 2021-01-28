<?php

namespace FireBender\Laravel\Complyant\Console\Commands;

use Illuminate\Console\Command;

class CreateApplicantCommand extends BaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'complyant:apply'; 

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a ComplYant application record';

    /**
     * The UserService
     *
     * @var FireBender\Laravel\PictureWorks\Services\UserService
     */
    protected $service;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    }
}
