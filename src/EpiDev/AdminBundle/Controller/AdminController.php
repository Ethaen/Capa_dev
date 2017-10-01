<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function actualityAction()
    {
      $em = $this->getDoctrine()->getManager();

      $actualities = $em->getRepository('EpiDevAdminBundle:Actuality')->findAll();

       return $this->render('EpiDevAdminBundle:Default:actuality.html.twig', array('actualities' => $actualities) );
    }

}
