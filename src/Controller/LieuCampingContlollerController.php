<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Lieucamping;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;

class LieuCampingContlollerController extends AbstractController
{
    // Route pour afficher tous les lieux de camping
    #[Route('/lieu', name: 'app_lieu_camping')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $lieuxCamping = $entityManager->getRepository(Lieucamping::class)->findAll();
        return $this->render('lieu_camping_contloller/index.html.twig', [
            'lieuxCamping' => $lieuxCamping,
        ]);
    }
    #[Route('/lieu/{id}', name: 'app_lieu_camping_detail')]
    public function detail(EntityManagerInterface $entityManager, int $id): Response
    {
        $lieuCamping = $entityManager->getRepository(Lieucamping::class)->find($id);
        if (!$lieuCamping) {
            throw $this->createNotFoundException('Le lieu de camping demandé n\'existe pas.');
        }
        return $this->render('lieu_camping_contloller/detail.html.twig', [
            'lieuCamping' => $lieuCamping,
        ]);
    }

    
}
