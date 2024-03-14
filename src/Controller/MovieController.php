<?php
namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/trend', name: 'app_movies')]
    public function allMovies(Request $request, CallApiService $callApiService): Response
    {
        $moviesData = $callApiService->getAllMovies();

        return $this->render('movies/index.html.twig', [
            'movies' => $moviesData,
        ]);
    }
}
