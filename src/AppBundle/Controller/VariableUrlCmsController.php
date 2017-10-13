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

    for ($i = 0; $i < count($pages); ++$i)
    {
      if ($path == "mentions_legales")
      {
        return $this->render('AppBundle::mentions_legales.html.twig');
      }
      else if ($path == $pages[$i]->getUrlName())
      {
        if ($pages[$i]->getId() == 1)
          return $this->render('AppBundle::recruteurs.html.twig', array('recruteurs' => $pages[$i]));
      }
    }
    return $this->redirectToRoute('home');
  }
}

?>
