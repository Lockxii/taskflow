<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route(path :'/', name:'home')]
    public function index(): Response
    {
        $this->flashnews('A new way to control your tasks !');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    private function flashnews(string $message): void
    {
        $this->addFlash('success', $message);
    }

    #[Route(path :'/a-propos', name:'a-propos')]
    public function info(): Response
    {
        $this->flashnews('A new way to control your tasks !');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route(path :'/bonjour/{prenom}', name:'bonjour', requirements: ['prenom'=> '[a-z]+'])]
    public function bonjour(string $prenom): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
