<?php
namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Lieucamping;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ReservationController extends AbstractController
{
    #[Route('/reservation/{id}', name: 'app_reservation')]
    public function reservation(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $lieuCamping = $entityManager->getRepository(Lieucamping::class)->find($id);

        if (!$lieuCamping) {
            throw $this->createNotFoundException('Lieu de camping non trouvé.');
        }
        if (!$this->getUser()) {
            $this->addFlash('warning', 'Vous devez être connecté pour laisser un avis.');
            return $this->redirectToRoute('app_login');
        }
        $reservation = new Reservation();
        $reservation->setLieuCamping($lieuCamping); 
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setUser($this->getUser());
            $entityManager->persist($reservation);
            $entityManager->flush();
            $this->addFlash('success', 'Votre réservation a été effectuée avec succès !');
            return $this->redirectToRoute('app_lieu_camping_detail', ['id' => $id]);
        }
        return $this->render('reservation/index.html.twig', [
            'form' => $form->createView(),
            'lieu' => $lieuCamping,
        ]);
    }
}