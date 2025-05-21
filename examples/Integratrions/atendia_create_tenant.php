<?php
require 'vendor/autoload.php';

use AtendiaSdk\HttpApiClient;
use AtendiaSdk\Models\Administrative;
use AtendiaSdk\AtendiaClient;

$adminApiUrl = 'http://localhost:8104';

$apiClient = new HttpApiClient();
$apiClient->setBaseUrl($adminApiUrl);

$keyResponse = $apiClient->get('key');
$apiKey = $keyResponse['key'];

$cronofyClient = new AtendiaClient($apiKey, $adminApiUrl);

$adminitrative = new Administrative(
    name: 'Admin',
    lastName: 'User',
    email: 'example@atendia.cl',
);

$tenant = $cronofyClient->tenants()->create('testing', 'renca', $adminitrative);

print_r($tenant->toArray());
