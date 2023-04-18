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
             
            //mail sending is limited without a domain       
            // $mailer->send($email); 
            echo '<script>setTimeout(() => {launchModal();}, "300");</script>';
            //so that the modal has time to appear
            sleep(6);
            echo '<script>closeModal();</script>';
            $response = $this->redirectToRoute('app_home');
            return $response;
       
        }

        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form,
        ]);
    }

}
