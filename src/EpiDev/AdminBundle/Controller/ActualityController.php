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
  public function modifyAction(Request $request)
  {
    $actuality = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));

    return $this->render('EpiDevAdminBundle:Default:modify.html.twig', array('entity' => $actuality));
  }

  public function saveActualityAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $actuality = $em->getRepository('EpiDevAdminBundle:Actuality')->find($request->query->get('id'));

    $actuality->setTitle($request->query->get('title'));
    $actuality->setTexte($request->query->get('content'));
    $actuality->setDate(new \DateTime($request->query->get('date')));
    if ($request->query->get('image_id') && $request->query->get('image_name')) {
      $actuality->setImgId("/admin/img/actuality/".$request->query->get('image_id'));
      $actuality->setImgName($request->query->get('image_name'));
    }
    $em->flush();
    return $this->redirectToRoute('actuality');
  }
}
