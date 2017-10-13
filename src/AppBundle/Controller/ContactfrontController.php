<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactfrontController extends Controller
{
  public function indexAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $agencies = $em->getRepository('EpiDevAdminBundle:CMS')->findAll();

    return $this->render('AppBundle::contact.html.twig', array('agencies' => $agencies));
  }
}
