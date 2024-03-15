<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/trend', name: 'app_trend')]
    public function getAllTrend(CallApiService $callApiService): Response
    {
        $moviesData = $callApiService->getAllMoviesTrend();
        $seriesData = $callApiService->getAllSeriesTrend();

        return $this->render('movies/index.html.twig', [
            'movies' => $moviesData,
            'series' => $seriesData
        ]);
    }

    #[Route('/movie/details/{movie_id}', name: 'app_movie_details')]
    public function movieDetails($movie_id, CallApiService $callApiService)
    {
        $movie = $callApiService->getMovieDetails($movie_id);

        return $this->render('movies/details.html.twig', [
            'movie' => $movie
        ]);
    }

    #[Route('/movies', name: 'app_movies')]
    public function getAllMovies(Request $request, CallApiService $callApiService)
    {
        $page = $request->query->getInt('page', 1);
        $movies = $callApiService->getAllMovies($page);

        return $this->render('movies/movies.html.twig', [
            'movies' => $movies
        ]);
    }

    #[Route('/series', name: 'app_series')]
    public function getAllSeries(Request $request, CallApiService $callApiService)
    {
        $page = $request->query->getInt('page', 1);
        $series = $callApiService->getAllSeries($page);

        return $this->render('series/series.html.twig', [
            'series' => $series
        ]);
    }

    #[Route('/serie/details/{serie_id}', name: 'app_serie_details')]
    public function seriesDetails($serie_id, CallApiService $callApiService)
    {
        $serie = $callApiService->getSeriesDetails($serie_id);

        return $this->render('series/details.html.twig', [
            'serie' => $serie
        ]);
    }



}
