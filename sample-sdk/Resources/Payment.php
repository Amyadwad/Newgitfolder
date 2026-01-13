<?php

namespace YourCompany\SampleSDK\Resources;

use YourCompany\SampleSDK\Utils\HttpClient;

class Payment
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    public function create(array $payload)
    {
        return $this->http->post('/payments', $payload);
    }
}
