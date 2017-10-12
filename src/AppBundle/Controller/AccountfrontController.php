<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountfrontController extends Controller
{
    public function personnal_spaceAction(Request $request)
    {
        $user = $this->getUser();
        if (!($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) && !$user)
        {
          return $this->redirectToRoute('login_register');
        }

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:UserInfo p
            WHERE p.user_id LIKE :id'
        )->setParameters(array('id' => $user->getId()));

        $user_info = $query->getResult();
        return $this->render('AppBundle::personnal_space.html.twig', array('user_info' => $user_info));
    }

    public function get_CV(Request $request, $user_id)
    {
      
    }

    public function login_registerAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $domain_activity = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

      return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs, 'agencies' => $agencies));
    }

    public function lost_passwordAction(Request $request)
    {
      return $this->render('AppBundle::lost_password.html.twig');
    }

    public function my_informationsAction(Request $request)
    {
      return $this->render('AppBundle::my_informations.html.twig');
    }

    public function my_alertsAction(Request $request)
    {
      return $this->render('AppBundle::my_alerts.html.twig');
    }

    public function modify_infoAction(Request $request)
    {
      return $this->render('AppBundle::modify_info.html.twig');
    }
}
