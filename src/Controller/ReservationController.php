<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Form\EditReservationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\DBAL\Connection;


class ReservationController extends AbstractController
{

    #[Route('/reservation', name: 'app_reservation')]
    public function index(Request $request, ManagerRegistry $doctrine, Connection $connection): Response
    {  
        $reservation = new Reservation();
        if ($this->getUser()) {
            $user = $this->getUser();
            $reservation->setReservationName($user->getFirstname() . ' ' . $user->getLastname());
            $reservation->setEmail($user->getEmail());
        }
        // Définition de l'heure actuelle pour que les champs date et heure soient pré-remplis au moment de la réservation
        $now = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $reservationTime = DateTime::createFromFormat('H:i', $now->format('H:i'));
        // $reservation->setHeure($reservationTime);
        $reservation->setDate($now);
        $heureOptions = $reservation->generateHourOptions();
        $form = $this->createForm(ReservationType::class, $reservation, [
            'available_hours' => $heureOptions,
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
        
            $reservationDate = $form->get('date')->getData();
            // Récupérer les données de réservation à partir du formulaire
            $reservation-> setDate($reservationDate);
            $reservation = $form->getData();
            
           
            // Enregistrer la réservation en base de données
            $entityManager = $doctrine->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();


            // if the VIP option exists
            if ($form->has('vip')) {
            $vipChecked = $form->get('vip')->getData();
            } else {
                $vipChecked = null;
            }
            

        if ($vipChecked) {
            $reservation->setVip(1);
            $vipOption = $request->attributes->get('vip');
    
            // Recherche de l'utilisateur correspondant à la réservation
            $user = $connection->fetchAssociative(
                // 'SELECT * FROM reservation WHERE reservation_name = ?',
                // array($reservation->getReservationName())
                'SELECT * FROM reservation WHERE id = ?',
                array($reservation->getId())
            );
    
            if ($user) {
                // Exécution de la requête SQL pour mettre à jour la colonne 'VIP'
                $connection->executeUpdate(
                'UPDATE reservation SET vip = ? WHERE id = ?',
                array(1, $user['id'])
            );}
            } else {
                $reservation->setVip(0);
            };

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

    
    #[Route("/reservation/{id}/edit", name:"app_reservation_edit")]
    public function editReservation(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $reservation = $entityManager->getRepository(Reservation::class)->find($id);    
        if (!$reservation) {
            throw $this->createNotFoundException('Cette réservation n\'existe pas.');
        }
        if ($this->getUser()) {
            $user = $this->getUser();
            $reservation->setReservationName($user->getFirstname() . ' ' . $user->getLastname());
            $reservation->setEmail($user->getEmail());
        }
        // Définition de l'heure actuelle pour que les champs date et heure soient pré-remplis au moment de la réservation
        $now = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $reservationTime = DateTime::createFromFormat('H:i', $now->format('H:i'));
        // $reservation->setHeure($reservationTime);
        $reservation->setDate($now);
        $heureOptions = $reservation->generateHourOptions();
        $form = $this->createForm(EditReservationType::class, $reservation, [
            'available_hours' => $heureOptions,
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationDate = $form->get('date')->getData();
            // Récupérer les données de réservation à partir du formulaire
            $reservation->setDate($reservationDate);
            $reservation = $form->getData();
        
            // Enregistrer la réservation en base de données
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
        
            // Rediriger l'utilisateur vers une page de confirmation
            return $this->redirectToRoute('app_reservation_confirm', ['id' => $reservation->getId()]);
        }
        return $this->render('reservation/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/confirm/{id}', name: 'app_reservation_confirm')]
    public function confirmUpdate(Reservation $reservation): Response
    {
        return $this->render('reservation/confirm.html.twig', [
            'reservation' => $reservation,
        ]);
    }
}
