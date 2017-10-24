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
    $pages = $em->getRepository('EpiDevAdminBundle:CMS')->findAll();
    $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
    $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();

    for ($i = 0; $i < count($pages); ++$i)
    {
      if ($path == $pages[$i]->getUrlName())
      {
        if ($pages[$i]->getId() == 1) {
          return $this->render('AppBundle::recruteur.html.twig', array('entity' => $pages[$i], 'agencies' => $agencies, 'recruteur' => $cms));
        }
        if ($pages[$i]->getId() == 2) {
          return $this->render('AppBundle::mentions_legales.html.twig', array('entity' => $pages[$i], 'agencies' => $agencies, 'recruteur' => $cms));
        }
        if ($pages[$i]->getId() == 3) {
          return $this->render('AppBundle::general_sales_conditions.html.twig', array('entity' => $pages[$i], 'agencies' => $agencies, 'recruteur' => $cms));
        }
      }
    }
    return $this->redirectToRoute('home');
  }
}

?>
