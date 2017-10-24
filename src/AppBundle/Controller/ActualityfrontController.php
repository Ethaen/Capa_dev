<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActualityfrontController extends Controller
{
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $actualities = $em->getRepository('EpiDevAdminBundle:Actuality')->findAll();
        $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();
        $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

        return $this->render('AppBundle::actuality.html.twig', array('actualities' => $actualities, 'recruteur' => $cms, 'agencies' => $agencies));
    }

}
