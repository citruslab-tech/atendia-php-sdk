<?php

namespace AtendiaSdk\Tests;

use AtendiaSdk\HttpApiClient;
use PHPUnit\Framework\TestCase;
use AtendiaSdk\AtendiaClient;

class ClientTest extends TestCase
{
    private AtendiaClient $atendiaClient;
    private $httpApiClientMock;

    protected function setUp(): void
    {
        $this->httpApiClientMock = $this->createMock(HttpApiClient::class);

        $this->atendiaClient = new atendiaClient('fake_api_key', 'https://api.example.com');
        $reflection = new \ReflectionClass($this->atendiaClient);
        $httpApiClientProperty = $reflection->getProperty('httpApiClient');
        $httpApiClientProperty->setAccessible(true);
        $httpApiClientProperty->setValue($this->atendiaClient, $this->httpApiClientMock);
    }
}
