<?php

namespace FireBender\Laravel\Complyant\Contracts\Complyant;

use GuzzleHttp\ClientInterface;

abstract class AbstractComplyant 
{
    protected $client;

    /**
     * 
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
        return $this;
    }
}