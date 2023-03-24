<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationController extends AbstractController
{

    #[Route('/reservation', name: 'app_reservation')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        
        $reservation = new Reservation();
        if ($this->getUser()) {
            $user = $this->getUser();
            $reservation->setReservationName($user->getFirstname() . ' ' . $user->getLastname());
            $reservation->setEmail($user->getEmail());
            $reservation->setNumber($user->getPhone());
        }
        // Définition de l'heure actuelle pour que les champs date et heure soient pré-remplis au moment de la réservation
        $now = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $reservationTime = DateTime::createFromFormat('H:i', $now->format('H:i'));
        $reservation->setHeure($reservationTime);
        $reservation->setDate($now);
        $heureOptions = $reservation->generateHourOptions();
        $form = $this->createForm(ReservationType::class, $reservation, [
            'available_hours' => $heureOptions,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données de réservation à partir du formulaire
            $reservation = $form->getData();

            // Enregistrer la réservation en base de données
            $entityManager = $doctrine->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();

            // Rediriger l'utilisateur vers une page de confirmation
            return $this->redirectToRoute('app_reservation_confirm', ['id' => $reservation->getId()]);
        }

        return $this->render('reservation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/confirm/{id}', name: 'app_reservation_confirm')]
    public function confirm(Reservation $reservation): Response
    {
        return $this->render('reservation/confirm.html.twig', [
            'reservation' => $reservation,
        ]);
    }
}
