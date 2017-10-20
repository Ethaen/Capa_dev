<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OfferfrontController extends Controller
{
  public function listAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();

    return $this->render('AppBundle::offer.html.twig', array('offers' => $offers));
  }

  public function detailsAction(Request $request)
  {
    return $this->render('AppBundle::offer_details.html.twig');
  }
}
