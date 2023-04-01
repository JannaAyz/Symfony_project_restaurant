<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\Reservation1Type;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Connection;
use DateTime;

#[Route('/admin/reservation')]
class AdminReservationController extends AbstractController
{
    #[Route('/', name: 'app_admin_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository,Connection $connection): Response
    {
        $reservations = $connection->fetchAllAssociative('SELECT DISTINCT date FROM reservation');
        $today = date('Y-m-d H:i:s');
        $date = \DateTime::createFromFormat('Y-m-d H:i:s', $today);

        return $this->render('admin_reservation/index.html.twig', [
            // 'reservations' => $reservationRepository->findAll(),
            'reservations' => $reservations,
            'selectedDate' => $date,
        ]);
    }

    #[Route('/{date}', name: 'app_admin_reservation_select', methods: ['GET'])]
    public function select(ReservationRepository $reservationRepository, Connection $connection, Request $request): Response
    {
        $dateString = $request->attributes->get('date');
        $reservations = $connection->fetchAllAssociative('SELECT DISTINCT date FROM reservation');
        
        $date = \DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
        $selectedReservations = $reservationRepository->findBy(['date' => $date]);

        return $this->render('admin_reservation/index.html.twig', [
            'reservations' => $reservations,
            'selectedReservations' => $selectedReservations,
            'selectedDate' => $date,
        ]);

    }

    #[Route('/new', name: 'app_admin_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_admin_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        
        return $this->render('admin_reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_admin_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_admin_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
