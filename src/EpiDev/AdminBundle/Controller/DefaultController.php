<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
       if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))  {
        return $this->render('EpiDevAdminBundle:Default:index.html.twig');
      }
      else {
        echo ('NON AUTH');
      }

      $userManager = $this->get('fos_user.user_manager');

      // Le service authentication_utils permet de récupérer le nom d'utilisateur
      // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
      // (mauvais mot de passe par exemple)
      $authenticationUtils = $this->get('security.authentication_utils');

      return $this->render('EpiDevAdminBundle:Default:index.html.twig', array(
        'last_username' => $authenticationUtils->getLastUsername(),
        'error'         => $authenticationUtils->getLastAuthenticationError(),
      ));
      }
}
