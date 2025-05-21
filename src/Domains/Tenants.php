<?php

namespace AtendiaSdk\Domains;

use AtendiaSdk\Models\Tenant;
use AtendiaSdk\HttpApiClient;
use AtendiaSdk\Models\Administrative;

class Tenants
{
    public function __construct(
        private HttpApiClient $httpApiClient
    ) {}

    public function create(
        string $name,
        string $subdomain,
        Administrative $adminitrative,
        array $configs = []
    ): Tenant {
        $data = [
            'name' => $name,
            'subdomain' => $subdomain,
            'administrative' => [
                'name' => $adminitrative->getName(),
                'last_name' => $adminitrative->getLastName(),
                'email' => $adminitrative->getEmail(),
            ],
            'configs' => $configs,
        ];

        $tenantData = $this->httpApiClient->post("admin/tenants", $data);

        return new Tenant(
            $tenantData['id'],
            $tenantData['name'],
            $tenantData['created_at'],
        );
    }
}
