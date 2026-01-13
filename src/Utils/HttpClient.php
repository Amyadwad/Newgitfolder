<?php

namespace Yadwad\SampleSDK\Utils;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HttpClient
{
    private Client $client;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->client = new Client([
            'base_uri' => rtrim($baseUrl, '/'),
            'headers' => [
                'Authorization' => "Bearer {$apiKey}",
                'Accept'        => 'application/json',
            ],
            'timeout' => 30
        ]);
    }

    public function get(string $uri, array $query = [])
    {
        try {
            $response = $this->client->get($uri, [
                'query' => $query
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception(
                $e->getResponse()
                    ? $e->getResponse()->getBody()->getContents()
                    : $e->getMessage()
            );
        }
    }
}
