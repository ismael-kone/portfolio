<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @return Response
 * @Route ("/", name="home_")
 */
class HomeController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('Home/index.html.twig', [
            'website' => 'Portfolio',
        ]);
    }
}
