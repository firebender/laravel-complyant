<?php

namespace FireBender\Laravel\Complyant\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class CreateApplicantTest extends OrchestraTestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();
    }
    
    /**
     * Create an applicant
     * 
     * @test
     */
    function can_create_applicant()
    {
        $this->assertTrue(true);
    }


}