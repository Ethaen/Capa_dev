<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Application;
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
      return $this->render('EpiDevAdminBundle:Default:add_application.html.twig');
    }

    public function editAction(Request $request)
    {
      $application = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Application')->find($request->query->get("id"));

      return $this->render('EpiDevAdminBundle:Default:edit_application.html.twig', array('application' => $application));
    }

    public function saveAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $application = $em->getRepository('EpiDevAdminBundle:Application')->find($request->request->get('id'));

      $application->setName($request->request->get('name'));
      $application->setFirstName($request->request->get('firstname'));
      $application->setOfferName($request->request->get('offer_name'));
      $application->setApplicationDate(new \DateTime());
      $em->flush();
      return $this->redirectToRoute('application');
    }

    public function uploadAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $application = new Application;

      $application->setName($request->request->get('name'));
      $application->setFirstname($request->request->get('firstname'));
      $application->setOfferName($request->request->get('offer_name'));
      $application->setApplicationDate(new \DateTime());
      $em->persist($application);
      $em->flush();
      return $this->redirectToRoute('application');
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
