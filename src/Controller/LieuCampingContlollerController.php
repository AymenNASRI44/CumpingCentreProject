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
        // Récupérer tous les lieux de camping depuis la base de données
        $lieuxCamping = $entityManager->getRepository(Lieucamping::class)->findAll();

        // Renvoyer les données au template Twig
        return $this->render('lieu_camping_contloller/index.html.twig', [
            'lieuxCamping' => $lieuxCamping,
        ]);
    }
    // Route pour afficher le détail d'un lieu de camping
    #[Route('/lieu/{id}', name: 'app_lieu_camping_detail')]
    public function detail(EntityManagerInterface $entityManager, int $id): Response
    {
        // Récupérer le lieu de camping par son ID
        $lieuCamping = $entityManager->getRepository(Lieucamping::class)->find($id);

        // Si le lieu n'existe pas, renvoyer une erreur 404
        if (!$lieuCamping) {
            throw $this->createNotFoundException('Le lieu de camping demandé n\'existe pas.');
        }

        // Renvoyer les détails du lieu de camping au template Twig
        return $this->render('lieu_camping_contloller/detail.html.twig', [
            'lieuCamping' => $lieuCamping,
        ]);
    }

    
}
