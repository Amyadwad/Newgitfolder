<?php

namespace yadwad\SampleSDK\Resources;

use yadwad\SampleSDK\Utils\HttpClient;

class User
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * Get user by ID
     *
     * @param string $userId
     * @return array
     */
    public function getById(string $userId): array
    {
        return $this->http->get("/v1/users/{$userId}");
    }

    /**
     * List users with query params
     *
     * @param array $filters
     * @return array
     */
    public function list(array $filters = []): array
    {
        return $this->http->get('/v1/users', $filters);
    }
}
