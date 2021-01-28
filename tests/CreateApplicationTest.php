<?php

namespace FireBender\Laravel\Complyant\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class CreateApplicationTest extends OrchestraTestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();
    }
    
    /**
     * Create an application
     * 
     * @test
     */
    function can_create_application()
    {
        $this->assertTrue(true);
    }


}