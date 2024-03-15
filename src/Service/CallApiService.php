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

    public function getAllMoviesTrend()
    {
        $response = $this->client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=fr-FR', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ],
        ]);
        return $response->toArray();
    }

    public function getAllSeriesTrend()
    {
        $response = $this->client->request('GET', 'https://api.themoviedb.org/3/trending/tv/day?language=fr-FR', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getMovieDetails($movie_id)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/movie/{$movie_id}?language=fr-FR", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getSeriesDetails($serie_id)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/tv/{$serie_id}?language=fr-FR", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getAllMovies($page = 1)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/movie/popular?language=fr-FR&page={$page}", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getAllSeries($page = 1)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/tv/popular?language=fr-FR&page={$page}", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1MDhjOWQxMWUwYTcwZmRhZmZkZDI3OTcyY2Y3N2IwMiIsInN1YiI6IjY1ZjJjOTBkNmRlYTNhMDE2MzdhMTZjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fZrs8zPfUYmNGgoKFAfYDLFQTBw8qjzTo7DwNhnb9J8',
                'accept' => 'application/json',
            ]
        ]);


        return $response->toArray();
    }
}


