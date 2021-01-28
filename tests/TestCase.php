<?php

namespace FireBender\Laravel\Complyant\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use FireBender\Laravel\Widgets\Providers\PackageServiceProvider;

class TestCase extends OrchestraTestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    /**
     * 
     */
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

}