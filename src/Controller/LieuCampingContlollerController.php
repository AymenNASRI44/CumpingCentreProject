<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\CommentFormType;
use App\Entity\Reservation;
use App\Entity\Lieucamping;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;

class LieuCampingContlollerController extends AbstractController
{
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
        // Récupérer le lieu de camping par son ID
        $lieuCamping = $entityManager->getRepository(Lieucamping::class)->find($id);
    
        // Vérifier si le lieu de camping existe
        if (!$lieuCamping) {
            throw $this->createNotFoundException('Le lieu de camping demandé n\'existe pas.');
        }
    
        // Calcul des places restantes
        $reservations = $entityManager->getRepository(Reservation::class)->findAll();
        $totalPersonnes = 0;
        foreach ($reservations as $reservation) {
            $datedebut = $reservation->getDateD();
            $datefin = $reservation->getDateF();
    
          
            $totalPersonnes += $reservation->getNombrePersonnes();
        }
        $reste = $lieuCamping->getCapacite() - $totalPersonnes;
        $lieuCamping->setPlacesRestantes($reste);
        $entityManager->flush();
        $avis = $entityManager->getRepository(Avis::class)->findBy(['id_lieu' => $lieuCamping]);

        return $this->render('lieu_camping_contloller/detail.html.twig', [
            'lieuCamping' => $lieuCamping,
            'avis' => $avis, 
        ]);
    }
    
    #[Route('/lieu/{id}/avis', name: 'app_avis')]
    public function donnerAvis(int $id, Request $request,EntityManagerInterface $entityManager ): Response {
        $lieuCamping = $entityManager->getRepository(Lieucamping::class)->find($id);
    
        if (!$lieuCamping) {
            throw $this->createNotFoundException('Lieu de camping non trouvé.');
        }
         if (!$this->getUser()) {
            $this->addFlash('warning', 'Vous devez être connecté pour laisser un avis.');
            return $this->redirectToRoute('app_login');
        }
        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $avis->setUser($this->getUser()); // Associe l'utilisateur connecté
            $avis->setIdLieu($lieuCamping);
            $avis->setDate(new \DateTime());
    
            $entityManager->persist($avis);
            $entityManager->flush();
    
            $this->addFlash('success', 'Votre avis a été enregistré avec succès.');
            return $this->redirectToRoute('app_lieu_camping_detail', ['id' => $lieuCamping->getId()]);
        }
    
        return $this->render('lieu_camping_contloller/avis.html.twig', [
            'lieuCamping' => $lieuCamping,
            'form' => $form->createView(),
        ]);
    }
    

    
}
