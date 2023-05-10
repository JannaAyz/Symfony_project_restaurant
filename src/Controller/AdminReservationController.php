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
        // $reservations = $connection->fetchAllAssociative('SELECT DISTINCT date FROM reservation');
        $reservationsDates = $connection->fetchAllAssociative('SELECT DISTINCT date FROM reservation');
        // $today = date('Y-m-d H:i:s');
        // $date = \DateTime::createFromFormat('Y-m-d H:i:s', $today);
        $date = date('Y-m-d H:i:s');

        return $this->render('admin_reservation/index.html.twig', [
            // 'reservations' => $reservationRepository->findAll(),
            'reservations' => $reservationsDates,
            'selectedDate' => $date,
        ]);
    }

    #[Route('/{date}', name: 'app_admin_reservation_select', methods: ['GET'])]
    public function select(ReservationRepository $reservationRepository, Connection $connection, Request $request): Response
    {   
        $dateString = $request->attributes->get('date');
        $query = 'SELECT * FROM reservation WHERE date = :date';
        $selectedReservations = $connection->fetchAllAssociative($query, ['date' => $dateString]);

        $reservationsDates = $connection->fetchAllAssociative('SELECT DISTINCT date FROM reservation');

        return $this->render('admin_reservation/index.html.twig', [
            'reservations' => $reservationsDates,
            'selectedReservations' => $selectedReservations,
            'selectedDate' => $dateString,
        ]);

    }

    #[Route('/new', name: 'app_admin_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReservationRepository $reservationRepository): Response
{}
 
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
