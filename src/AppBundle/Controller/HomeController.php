<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $available_offer = 0;
        $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();

        foreach ($offers as $offer)
        {
          if ( $offer->getActive())
            $available_offer++;
        }
        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Offer p
                        ORDER BY p.id DESC'
        )->setMaxResults(3);
        $last_offers = $query->getResult();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:MonthlyWorker p'
        )->setMaxResults(3);
        $month_workers = $query->getResult();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Actuality p
            ORDER BY p.id DESC'
        )->setMaxResults(3);
        $actualities = $query->getResult();

        $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
        $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();
        return $this->render('AppBundle::home.html.twig', array('available_offer' => $available_offer,
                             'last_offers' => $last_offers, 'month_workers' => $month_workers,
                             'actualities' => $actualities, 'recruteur' => $cms, 'agencies' => $agencies) );
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
