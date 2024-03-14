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

    public function getAllMovies()
    {
        $response = $this->client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ],
        ]);
        return $response->toArray();
    }
}


