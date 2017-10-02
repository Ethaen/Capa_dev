<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AgencyController extends Controller
{
    public function agencyAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $emails = $em->getRepository('EpiDevAdminBundle:email')->findAll();

      return $this->render('EpiDevAdminBundle:Default:agency.html.twig', array('agencies' => $agencies, 'emails' => $emails) );
    }

    public function addAction(Request $request)
    {
      return $this->render('EpiDevAdminBundle:Default:add_agency.html.twig');
    }
}
