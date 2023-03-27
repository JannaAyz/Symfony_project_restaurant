<?php
// Controller créé par make:home
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $cookies = $request->cookies;
        if ($cookies->has('launch')) {
            // Exécutez la fonction "launchTruc()"
            
            // Attendre 5 secondes
        }
    

    
        //     // Supprimez le cookie pour qu'il ne soit pas exécuté à chaque visite
        
            
            
        // }

        // $launch = $request->query->get('launch');

        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    
    sleep(5);
    $response = new Response();
    $response->headers->clearCookie('launch');

    return $response;
            // $response->headers->setCookie(new Cookie('launch', 'false'));
               
            
            
            
        // return $response; 
    }
}
