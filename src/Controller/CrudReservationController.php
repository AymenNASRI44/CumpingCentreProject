<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\Reservation1Type;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/crud/reservation')]
class CrudReservationController extends AbstractController
{
    #[Route('/', name: 'app_crud_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('crud_reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_crud_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_crud_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud_reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_crud_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('crud_reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_crud_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_crud_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud_reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_crud_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_crud_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
