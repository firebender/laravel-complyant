<?php

namespace FireBender\Laravel\Complyant\Tests;

class ClientTest extends TestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();
    }
    
    /**
     * Create rest client
     * 
     * @test
     */
    function can_create_client()
    {
        $client = app('RestClient');

        $this->assertInstanceOf('GuzzleHttp\Client', $client);

        $user_agent = config('complyant.user_agent');

        $this->assertEquals($user_agent, $client->getConfig()['headers']['User-Agent']);
    }


}