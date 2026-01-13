<?php

namespace YourCompany\SampleSDK;

use YourCompany\SampleSDK\Utils\HttpClient;

class Client
{
    private HttpClient $http;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->http = new HttpClient($apiKey, $baseUrl);
    }

    public function payments()
    {
        return new Resources\Payment($this->http);
    }
}
