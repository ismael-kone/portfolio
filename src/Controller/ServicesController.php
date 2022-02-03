<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @return Response
 * @Route ("/services", name="services_")
 */
class ServicesController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('Services/index.html.twig', [
            'website' => 'Portfolio',
        ]);
    }
}
