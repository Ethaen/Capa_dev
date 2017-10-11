<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountfrontController extends Controller
{
    public function personnal_spaceAction(Request $request)
    {
        return $this->render('AppBundle::personnal_space.html.twig');
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
