<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecruteursfrontController extends Controller
{
  public function recruteursAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $recruteurs = $em->getRepository('EpiDevAdminBundle:CMS')->findAll();

    return $this->render('AppBundle::recruteurs.html.twig');
  }
}

?>
