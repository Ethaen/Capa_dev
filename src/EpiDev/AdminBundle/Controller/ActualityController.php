<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Actuality;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class ActualityController extends Controller
{
  public function modifyActualityAction(Request $request)
  {
    $actuality = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));

    return $this->render('EpiDevAdminBundle:Default:actuality_modify.html.twig', array('entity' => $actuality));
  }

  public function saveActualityAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = $em->getRepository('EpiDevAdminBundle:Actuality')->find($request->request->get('id'));

    $actuality->setTitle($request->request->get('title'));
    $actuality->setTexte($request->request->get('content'));
    $actuality->setDate(new \DateTime($request->request->get('date')));
    if ($request->request->get('image_id') && $request->request->get('image_name')) {
      $actuality->setImg_id("/admin/img/actuality/upload/".$request->request->get('image_id'));
      $actuality->setImg_name($request->request->get('image_name'));
    }
    $em->flush();
    return $this->redirectToRoute('actuality');
  }

  public function uploadActualityAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = new Actuality;

    $actuality->setTitle($request->request->get('title'));
    $actuality->setTexte($request->request->get('content'));
    $actuality->setDate(new \DateTime($request->request->get('date')));
    if ($request->request->get('image_id') && $request->request->get('image_name')) {
      $actuality->setImg_id("/admin/img/actuality/upload/".$request->request->get('image_id'));
      $actuality->setImg_name($request->request->get('image_name'));
    }
    else {
      $actuality->setImg_id("");
      $actuality->setImg_name("");
    }
    $em->persist($actuality);
    $em->flush();
    return $this->redirectToRoute('actuality');
  }

  public function addActualityAction(Request $request)
  {
    return $this->render('EpiDevAdminBundle:Default:add_actuality.html.twig');
  }

  public function duplicateAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->query->get('id'));

    $actuality_copy = clone $actuality;
    $em->persist($actuality_copy);
    $em->flush();
    return $this->redirectToRoute('actuality');
  }

  public function deleteAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = $em->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));

    $em->remove($actuality);
    $em->flush();
    return $this->redirectToRoute('actuality');
  }
}
