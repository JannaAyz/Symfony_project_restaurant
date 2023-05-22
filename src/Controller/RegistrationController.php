<?php
// Controller créé par make:registration
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\UserAuthenticator;
use App\Form\EditRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    // private $profilePicReset;

    // public function __construct(ResetProfilePicture $profilePicReset)
    // {
    //     $this->profilePicReset = $profilePicReset;
    // }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setCreatedAt(new \DateTimeImmutable());
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/register/{id}/edit', name: 'app_register_edit')]
    public function updateAccount(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, ManagerRegistry $doctrine, int $id , SluggerInterface $slugger): Response
    {
        $entityManager = $doctrine->getManager();
        $user = $entityManager->getRepository(User::class)->find($id); 

        if (!$user) {
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas.');
        }

        $formSubmittedAndValid = false;

        $form = $this->createForm(EditRegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formSubmittedAndValid = true;

            if ($form->get('password')->getData()) {
          
                    $password = $userPasswordHasher->hashPassword($user, 'jesuisadmin');
                    $user->setPassword($password);
                
            }


            $file = $form->get('imageUrl')->getData();
            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
                    $file->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );

                $user->setImageUrl($newFilename);
                
            }
            $user->setCreatedAt($user->getCreatedAt());
            $user->setUpdatedAt(new \DateTime());

            // remove plain password and createdAt from form data

            // encode the plain password
            // $password = $userPasswordHasher->hashPassword($user, $form->get('password')->getData());
            // $user->setPassword($password);

            $entityManager->persist($user);
            $entityManager->flush();
            
            // do anything else you need here, like send an email
            // reset profile picture if needed

            // return $this->redirectToRoute('app_account');
        }

        return $this->render('registration/edit.html.twig', [
            'registrationForm' => $form->createView(),
            'formSubmittedAndValid' => $formSubmittedAndValid,
        ]);
    }

    }
