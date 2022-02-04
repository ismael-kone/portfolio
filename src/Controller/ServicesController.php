<?php

namespace App\Controller;

use App\Repository\ContentRepository;
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
    public function index(ContentRepository $contentRepository): Response
    {

        $html = $contentRepository->findBy(['name' => 'Front-End']);
        $back = $contentRepository->findBy(['name' => 'Back-End']);

        return $this->render('Services/index.html.twig', [
            'html' => $html,
            'back' => $back,
        ]);
    }
}
