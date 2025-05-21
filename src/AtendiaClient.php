<?php

namespace AtendiaSdk;

class AtendiaClient
{
    private HttpApiClient $httpApiClient;

    public function __construct(string $apiKey, string $apiUrl)
    {
        $this->httpApiClient = new HttpApiClient();
        $this->httpApiClient->setHeaders([
            'Authorization' => "ApiKey $apiKey",
        ]);
        $this->httpApiClient->setBaseUrl($apiUrl);
    }

    public function tenants(): Domains\Tenants
    {
        return new Domains\Tenants($this->httpApiClient);
    }
}
