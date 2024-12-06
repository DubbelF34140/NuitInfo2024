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

    #[Route('/theme2', name: 'theme2')]
    public function them2(): Response
    {
        return $this->render('article/theme2.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
