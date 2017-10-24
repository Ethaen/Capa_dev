<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class OfferfrontController extends Controller
{
  public function listAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();

    return $this->render('AppBundle::offers.html.twig', array('offers' => $offers));
  }

  public function inc_i_offerAction(Request $request)
  {
    $i = $request->request->get('i');
    $em = $this->getDoctrine()->getManager();
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();
    $title = $offers[$i]->getTitle();
    $id = $offers[$i]->getId();
    $description = $offers[$i]->getDescription_txt();
    $city = $offers[$i]->getCity();
    $type = $offers[$i]->getJob_type();
    $domain = $offers[$i]->getDomain();

    return new Response(json_encode(array('title' => $title, 'description' => $description, 'id' => $id, 'city' => $city, 'type' => $type, 'domain' => $domain)));
  }

  public function detailsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->query->get('id'));
    $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

    return $this->render('AppBundle::offer_details.html.twig', array('offer' => $offer, 'agencies' => $agencies));
  }
}
