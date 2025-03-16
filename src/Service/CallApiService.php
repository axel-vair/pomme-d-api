<?php

namespace App\Service;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
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
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ],
        ]);
        return $response->toArray();
    }

    public function getAllSeriesTrend()
    {
        $response = $this->client->request('GET', 'https://api.themoviedb.org/3/trending/tv/day?language=fr-FR', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getMovieDetails($movie_id)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/movie/{$movie_id}?language=fr-FR", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getSeriesDetails($serie_id)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/tv/{$serie_id}?language=fr-FR", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getAllMovies($page = 1)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/movie/popular?language=fr-FR&page={$page}", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ]
        ]);

        return $response->toArray();
    }

    public function getAllSeries($page = 1)
    {
        $response = $this->client->request('GET', "https://api.themoviedb.org/3/tv/popular?language=fr-FR&page={$page}", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',
            ]
        ]);


        return $response->toArray();
    }

    public function addMovieToFavorites()
    {

        $response = $this->client->request('POST', "https://api.themoviedb.org/3/account/21102110/favorite", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NzM2ODU4ZDcwZThjNTQ0ZGZmOTQ4NjQ3NDIxNzQ0NCIsIm5iZiI6MTc0MjE0MjkzMS4wMjksInN1YiI6IjY3ZDZmZGQzMTNkMGU5NmI0MjdiZjAxOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1xJ1_gdhM1bLQKKw2C_OE4bhC_cEwBpxHvoPzJvU3hk',
                'accept' => 'application/json',

            ]]);
    }

}


