<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ActualityController extends Controller
{
  public function modifyAction(Request $request)
  {
    $actuality = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));

    return $this->render('EpiDevAdminBundle:Default:modify.html.twig', array('entity' => $actuality));
  }

  public function saveActualityAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = $em->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));
    $title = $request->query->get('title');
    $content = $request->query->get('content');

    $actuality->setTitle($title);
    $actuality->setTexte($content);
    $em->flush();
    return $this->redirectToRoute('actuality');
  }
}
