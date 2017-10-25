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

    public function detailsAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $actuality = $em->getRepository('EpiDevAdminBundle:Actuality')->findById($request->query->get('id'))[0];
      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:Actuality p
                      ORDER BY p.id DESC'
      )->setMaxResults(3);
      $last_actualities = $query->getResult();
      $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

      return $this->render('AppBundle::actuality_details.html.twig', array('actuality' => $actuality, 'last_actualities' => $last_actualities,
                                                                           'recruteur' => $cms, 'agencies' => $agencies));
    }
}
