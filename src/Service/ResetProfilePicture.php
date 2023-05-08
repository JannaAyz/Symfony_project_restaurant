<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reservation;

class ResetProfilePicture
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke()
    {
        // $user = new User();
        // $form = $this->createForm(RegistrationFormType::class, $user);
        // $form->handleRequest($request);

        // $usrs = $connection->executeQuery(
        //     'SELECT * FROM reservation WHERE email = ?',
        //     ['admin@mail.fr'],
        //     [\PDO::PARAM_STR]
        // )->fetchAssociative();
        // $setTimeForImage = (new \DateTimeImmutable());
        // Définir l'heure d'expiration en ajoutant 1 minute à l'heure actuelle
        // $expirationTime = $setTimeForImage->modify('+10 minutes');
        // print_r($expirationTime);
        
        // sleep(5);

        // $sql = "UPDATE user SET image_url = 'default.jpg' WHERE email ='admin@mail.fr' AND updated_at < :expiration_time";
        $connection = $this->entityManager->getConnection();   
        $sql = "UPDATE user SET image_url = 'coco-part-64590451d4658.png' WHERE email = 'admin@mail.fr'";
        $stmt = $connection->prepare($sql);
        $stmt->execute();



    
        // $stmt->execute(['expiration_time' => $expirationTime->format('Y-m-d H:i:s')]);

        // $defaulFile = 'public/IMG/default.jpg';
        
        // foreach ($usrs as $usr) {
        //     $reservation = new Reservation();
        //     $reservation->hydrate($usr);
        //     if ($usr->getImageUrl()  !== 'public/IMG/default.jpg' && $usr->getUpdatedAt() < $expirationTime) {
        //         $usr->setImageUrl($defaulFile);
        //         $this->entityManager->persist($usr);
        //     }
        // }

        // if ($usr->getImageUrl() !== 'public/IMG/default.jpg' && $usr->getUpdatedAt() < $expirationTime) {
        //     $usr->setImageUrl('public/IMG/default.jpg');
        //     $this->entityManager->persist($usr);
        // }
        // $this->entityManager->flush();
    }
    };

    

