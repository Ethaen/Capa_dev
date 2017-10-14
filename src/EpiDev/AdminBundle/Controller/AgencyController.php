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

    return $this->render('EpiDevAdminBundle:Default:agency.html.twig', array('agencies' => $agencies, 'emails' => $emails) );
  }

  public function addAction(Request $request)
  {
    $agency = new Agency();

    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $agency);
    $formBuilder
    ->add('name',      TextType::class)
    ->add('address',     TextType::class)
    ->add('city',   TextType::class)
    ->add('phone',    TextType::class)
    ->add('save',      SubmitType::class);

    $form = $formBuilder->getForm();
    return $this->render('EpiDevAdminBundle:Default:add_agency.html.twig', array(
      'form' => $form->createView()));
    }

    public function editAction(Request $request)
    {
      $agency = new Agency();

      $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $agency);
      $formBuilder
      ->add('name',      TextType::class)
      ->add('address',     TextType::class)
      ->add('city',   TextType::class)
      ->add('phone',    TextType::class)
      ->add('save',      SubmitType::class);

      $form = $formBuilder->getForm();
      return $this->render('EpiDevAdminBundle:Default:add_agency.html.twig', array(
        'form' => $form->createView()));
      }
    }
