<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ApplicationController extends Controller
{
    public function viewAction(Request $request)
    {
      $applications = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Application')->findAll();

      return $this->render('EpiDevAdminBundle:Default:application.html.twig', array('applications' => $applications) );
    }

    public function addAction()
    {
      return $this->render('EpiDevAdminBundle:Default:add_offer.html.twig');
    }

    public function editAction(Request $request)
    {
      return $this->render('EpiDevAdminBundle:Default:edit_application.html.twig');
    }

    public function duplicateAction(Request $request)
    {
      $id = $request->query->get('id');

      $em = $this->getDoctrine()->getManager();
      $application = $em->getRepository('EpiDevAdminBundle:Application')->find($id);

      $application_copy = clone $application;
      $em->persist($application_copy);
      $em->flush();
      return $this->redirectToRoute('application');
    }

    public function deleteAction(Request $request)
    {
      $id = $request->query->get('id');
      $em = $this->getDoctrine()->getManager();
      $application = $em->getRepository('EpiDevAdminBundle:Application')->find($id);

      $em->remove($application);
      $em->flush();
      return $this->redirectToRoute('application');
    }
}
