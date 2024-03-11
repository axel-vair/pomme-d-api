<?php

namespace App\Controller;

use App\Service\CallApiService;
use http\Client;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{

    #[Route('/products', name: 'app_products')]
    public function allProducts(\Symfony\Component\HttpFoundation\Request $request, CallApiService $callApiService): Response
    {
        $page = $request->query->getInt('page', 1);
        $products = $callApiService->getAllProducts($page);

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'currentPage' => $page
        ]);
    }

}
