<?php

namespace App\Service;

use App\Entity\Lieucamping;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;

class PlaceManager
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Calculer les places disponibles pour un lieu et une période.
     */
    public function calculerPlacesDisponibles(Lieucamping $lieu, \DateTime $dated, \DateTime $datef): int
    {
        // Récupérer les réservations pour ce lieu
        $reservations = $this->entityManager->getRepository(Reservation::class)
            ->findBy(['lieuCamping' => $lieu]);

        $placesUtilisées = 0;

        foreach ($reservations as $reservation) {
            $datedExistante = $reservation->getDateD();
            $datefExistante = $reservation->getDateF();

            // Vérification des chevauchements
            if ($dated < $datefExistante && $datef > $datedExistante) {
                $placesUtilisées += $reservation->getNombrePersonnes();
            }
        }

        return max(0, $lieu->getCapacite() - $placesUtilisées);
    }
    public function peutFaireReservation(Lieucamping $lieu, \DateTime $dated, \DateTime $datef, int $placesDemandées): bool
    {
        $placesDisponibles = $this->calculerPlacesDisponibles($lieu, $dated, $datef);
        return $placesDemandées <= $placesDisponibles;
    }
}
