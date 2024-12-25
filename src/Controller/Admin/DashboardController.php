<?php
// src/Controller/Admin/DashboardController.php

namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reservation;
use App\Entity\Lieucamping;
use App\Entity\Region;

class DashboardController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservationsCount = $entityManager->getRepository(Reservation::class)->count([]);
        $lieuxCampingCount = $entityManager->getRepository(Lieucamping::class)->count([]);
        $utilisateursCount = $entityManager->getRepository(User::class)->count([]);
        $regionRepository = $entityManager->getRepository(Region::class);
        $statsByRegion = $regionRepository->createQueryBuilder('r')
            ->select('r.nom_region as region_name, COUNT(u.id) as user_count')
            ->leftJoin('r.users', 'u')  // Assurez-vous que la relation 'users' est correcte
            ->groupBy('r.id')
            ->orderBy('user_count', 'DESC')
            ->getQuery()
            ->getResult();
            $lieucampingRepository = $entityManager->getRepository(Lieucamping::class);
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
        // Préparer les données pour le graphique des utilisateurs par région
        $regions = [];
        $userCounts = [];

        foreach ($statsByRegion as $stat) {
            $regions[] = $stat['region_name'];
            $userCounts[] = $stat['user_count'];
        }

        return $this->render('admin/dashboard/index.html.twig', [
            'reservationsCount' => $reservationsCount,
            'lieuxCampingCount' => $lieuxCampingCount,
            'utilisateursCount' => $utilisateursCount,
            'regions' => json_encode($regions),
            'userCounts' => json_encode($userCounts),
            'lieuNames' => json_encode($lieuNames),
            'reservationCounts' => json_encode($reservationCounts),

        ]);
    }
}
