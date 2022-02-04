<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Content;
use App\Form\ContentType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @return Response
 * @Route ("/portfolio", name="portfolio_")
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

    /**
     * @return Response
     * @Route ("/new", name="new")
     */
    public function new(): Response
    {
        $content = new Content();
        $form = $this->createForm(ContentType::class, $content);

        return $this->render('Portfolio/new.html.twig', [
            "form" => $form->createView(),
        ]);
    }
}
