<?php
// src/Controller/Admin/StatisticsController.php

namespace App\Controller\Admin;

use App\Entity\Lieucamping;
use App\Entity\Region;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatisticsController extends AbstractController
{
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

     #[Route('/admin/statistics', name: 'admin_statistics')]
    public function index(): Response
    {
        $lieucampingRepository = $this->entityManager->getRepository(Lieucamping::class);
        $stats = $lieucampingRepository->createQueryBuilder('l')
            ->select('l.nom as lieu_name, COUNT(r.id) as reservation_count')
            ->leftJoin('l.reservations', 'r')
            ->groupBy('l.id') 
            ->orderBy('reservation_count', 'DESC')
            ->getQuery()
            ->getResult();
        $lieuNames = [];
        $reservationCounts = [];

        foreach ($stats as $stat) {
            $lieuNames[] = $stat['lieu_name'];  
            $reservationCounts[] = $stat['reservation_count'];  
        }
         // Statistiques des utilisateurs par région
         $regionRepository = $this->entityManager->getRepository(Region::class);
         $statsByRegion = $regionRepository->createQueryBuilder('r')
             ->select('r.nom_region as region_name, COUNT(u.id) as user_count')
             ->leftJoin('r.users', 'u')  // Assurez-vous que la relation 'users' est correcte
             ->groupBy('r.id')
             ->orderBy('user_count', 'DESC')
             ->getQuery()
             ->getResult();
 
         // Préparer les données pour le graphique des utilisateurs par région
         $regions = [];
         $userCounts = [];
 
         foreach ($statsByRegion as $stat) {
             $regions[] = $stat['region_name'];
             $userCounts[] = $stat['user_count'];
         }
        
        return $this->render('admin/statistics/index.html.twig', [
            'lieuNames' => json_encode($lieuNames),
            'reservationCounts' => json_encode($reservationCounts),
            'regions' => json_encode($regions),
            'userCounts' => json_encode($userCounts),
        ]);
    }
}

