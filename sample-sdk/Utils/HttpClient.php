<?php

namespace YourCompany\SampleSDK\Utils;

use GuzzleHttp\Client;

class HttpClient
{
    private Client $client;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->client = new Client([
            'base_uri' => $baseUrl,
            'headers' => [
                'Authorization' => "Bearer {$apiKey}",
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    public function post(string $uri, array $data)
    {
        $response = $this->client->post($uri, [
            'json' => $data
        ]);

        return json_decode($response->getBody(), true);
    }
}
