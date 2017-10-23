<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OfferfrontController extends Controller
{
  public $i = 0;

  public function listAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();

    return $this->render('AppBundle::offer.html.twig', array('offers' => $offers));
  }

  public function inc_i_offerAction()
  {
    $this->i = $this->i+1;
    return $this->render('AppBundle::offer.html.twig');
  }

  public function detailsAction(Request $request)
  {
    return $this->render('AppBundle::offer_details.html.twig');
  }
}
