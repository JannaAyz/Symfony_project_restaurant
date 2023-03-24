<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $userEmail = $user->getEmail();
        
        $reservations = $entityManager->createQueryBuilder()
            ->select('r')
            ->from('App\Entity\Reservation', 'r')
            ->where('r.email = :userEmail')
            ->setParameter('userEmail', $userEmail)
            ->getQuery()
            ->getResult();
        
        return $this->render('account/index.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
        ]);
    }
}
