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
      $agencies = $em->getRepository('AppBundle:Agency')->findAll();

      return $this->render('EpiDevAdminBundle:Default:agency.html.twig', array('agencies' => $agencies) );
    }

}
