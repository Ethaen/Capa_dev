<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home.html.twig');
    }

    public function loginAction(Request $request)
    {
          // Si le visiteur est déjà identifié, on le redirige vers l'accueil
       if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
         return $this->redirectToRoute('app');
       }
       else {
         echo 'NON IDENTIFIED';
       }

       // Le service authentication_utils permet de récupérer le nom d'utilisateur
       // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
       // (mauvais mot de passe par exemple)
       $authenticationUtils = $this->get('security.authentication_utils');

       return $this->render('default/layout.html.twig', array(
         'last_username' => $authenticationUtils->getLastUsername(),
         'error'         => $authenticationUtils->getLastAuthenticationError(),
       ));
    }
}
