<?php

namespace Yadwad\SampleSDK;

use Yadwad\SampleSDK\Utils\HttpClient;
use Yadwad\SampleSDK\Resources\User;

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
