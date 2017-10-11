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
}
