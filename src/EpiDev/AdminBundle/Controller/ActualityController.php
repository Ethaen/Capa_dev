<?php

namespace EpiDev\AdminBundle\Controller;

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
      $actuality->setImg_id("/admin/img/actuality/".$request->request->get('image_id'));
      $actuality->setImg_name($request->request->get('image_name'));
    }
    $em->flush();
    return $this->redirectToRoute('actuality');
  }
}
