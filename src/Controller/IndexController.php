<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/theme1', name: 'theme1')]
    public function them1(): Response
    {
        return $this->render('article/theme1.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/theme3', name: 'theme3')]
    public function them3(): Response
    {
        return $this->render('article/theme3.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
