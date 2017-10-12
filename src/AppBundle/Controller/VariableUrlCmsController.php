<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VariableUrlCmsController extends Controller
{
  public function variableUrlCmsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $path = $request->attributes->get('path');

    if ($path == "recruteurs") {
      return $this->render('AppBundle::recruteurs.html.twig', array('entity' => $em->getRepository('EpiDevAdminBundle:CMS')->find(1)));
    }
    else if ($path == "mentions_legales") {
      return $this->render('AppBundle::mentions_legales.html.twig');
    }
    return $this->redirectToRoute('home');
  }
}

?>
