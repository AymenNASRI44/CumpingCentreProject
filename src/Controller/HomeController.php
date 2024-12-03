<?php
// src/Controller/HomeController.php

namespace App\Controller;

use App\Entity\Lieucamping;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer quelques lieux de camping (par exemple, les 5 premiers)
        $lieuxCamping = $entityManager->getRepository(Lieucamping::class)->findBy([], null, 2);

        return $this->render('home/index.html.twig', [
            'lieuxCamping' => $lieuxCamping,
        ]);
    }
}
