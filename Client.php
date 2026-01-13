<?php

namespace yadwad\SampleSDK;

use yadwad\SampleSDK\Utils\HttpClient;
use yadwad\SampleSDK\Resources\User;

class Client
{
    private HttpClient $http;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->http = new HttpClient($apiKey, $baseUrl);
    }

    public function users(): User
    {
        return new User($this->http);
    }
}
