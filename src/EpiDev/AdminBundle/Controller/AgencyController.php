<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Agency;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AgencyController extends Controller
{
  public function agencyAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
    $emails = $em->getRepository('EpiDevAdminBundle:email')->findAll();

    return $this->render('EpiDevAdminBundle:Default:agency.html.twig', array('agencies' => $agencies, 'emails' => $emails));
  }

  public function deleteAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $em->remove($em->getRepository('EpiDevAdminBundle:Agency')->find($request->query->get('id')));
    $em->flush();
    return $this->redirectToRoute('agency');
  }

  public function uploadAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $agency = new Agency;

    $agency->setName($request->request->get('name'));
    $agency->setAddress($request->request->get('address'));
    $agency->setCity($request->request->get('city'));
    $agency->setPhone($request->request->get('phone'));
    $em->persist($agency);
    $em->flush();
    return $this->redirectToRoute('agency');
  }

  public function duplicateAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $agency_copy = clone $em->getRepository('EpiDevAdminBundle:Agency')->find($request->query->get('id'));
    $em->persist($agency_copy);
    $em->flush();
    return $this->redirectToRoute('agency');
  }

  public function addAction(Request $request)
  {
    return $this->render('EpiDevAdminBundle:Default:add_agency.html.twig');
  }

  public function editAction(Request $request)
  {
    $agency = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Agency')->find($request->query->get("id"));

    return $this->render('EpiDevAdminBundle:Default:edit_agency.html.twig', array('agency' => $agency));
  }

  public function saveAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $agency = $em->getRepository('EpiDevAdminBundle:Agency')->find($request->request->get('id'));

    $agency->setName($request->request->get('name'));
    $agency->setAddress($request->request->get('address'));
    $agency->setCity($request->request->get('city'));
    $agency->setPhone($request->request->get('phone'));
    $em->flush();
    return $this->redirectToRoute('agency');
  }

}
