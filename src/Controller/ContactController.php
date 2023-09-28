<?php

namespace App\Controller;

use App\Entity\Commune;
use App\Repository\CommuneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ContactController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Environment $twig, CommuneRepository $CommuneRepository): Response
    {
        return new Response($twig->render('contact/index.html.twig', [
            'communes' => $CommuneRepository->findAll(),
            
            
        ]));
    }

    #[Route('/commune/{id}', name: 'commune')]
    public function show(Environment $twig, Commune $Commune, CommuneRepository $CommuneRepository): Response
    {
        return new Response($twig->render('contact/show.html.twig', [
            'commune' => $Commune,
            'communes' => $CommuneRepository->findBy(['id' => $Commune])
        ]));
    }


    
}
