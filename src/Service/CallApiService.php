<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getAllProducts($page = 1): array
    {
        $response = $this->client->request('GET', 'https://world.openfoodfacts.net/api/v2/search', [
            'query' => [
                'page_size' => 2000,
                'page' => $page,
                'fields' => 'product_name,nutrition_grades',
            ]
        ]);

        return $response->toArray();
    }
}