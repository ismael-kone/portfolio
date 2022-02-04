<?php

namespace App\Controller;

use App\Repository\ContentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @return Response
 * @Route ("/about", name="about_")
 */
class AboutController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="index")
     */
    public function index(ContentRepository $contentRepository): Response
    {
        $content = $contentRepository->findBy(['name' => 'Ismael Kone']);
        return $this->render('AboutMe/index.html.twig', [
            'content' => $content,
        ]);
    }
}
