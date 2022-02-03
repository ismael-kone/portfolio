<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @return Response
 * @Route ("/Portfolio", name="portfolio_")
 */
class PortfolioController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('Portfolio/index.html.twig', [
            'website' => 'Portfolio',
            ]);
    }
}
