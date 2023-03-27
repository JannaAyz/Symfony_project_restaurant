<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Cookie;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        // to collect what the user entered in the form :
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $address = $data['mail'];
            $message = $data['message'];
            $email = (new Email())
            ->from($address)
            ->to('you@example.com')
            ->text($message);
            //->html('<p>See Twig integration for better HTML integration!</p>');
             
            // $mailer->send($email);
            // $response = $this->redirectToRoute('app_home');
            // $response->headers->setCookie(new Cookie('launch', 'true'));

            echo '<script>setTimeout(() => {
                launchModal();
              }, "300");</script>';
            sleep(6);
            $response = $this->redirectToRoute('app_home');
            
            // Définir la date d'expiration du cookie
            $expireDate = (new \DateTimeImmutable())->modify('+1 minute');

            // Créer un nouveau cookie avec la date d'expiration
            $response->headers->setCookie(new Cookie('launch', 'true', $expireDate)); 
            return $response;
            // $home = (new HomeController());
            // $home->launchModal(); 


            // return $this->redirectToRoute('app_home', ['show_modal' => true]);
            // return $this->redirect($request->getUri());
        }

        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form
        ]);
    }

}
