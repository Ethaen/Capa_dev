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
    $keyword = $request->query->get('keyword');
    $city = $request->query->get('city');
    $type = $request->query->get('type');
    $domain = $request->query->get('domain');
    /*if ($keyword) {
    $query = $em->createQuery(
    'SELECT p FROM EpiDevAdminBundle:Offer p WHERE p.city LIKE :keyword'
    )->setParameters(array('keyword' => "%".$keyword."%")
  );
  $offers = $query->getResult();
}*/
if ($city) {
  //var_dump($city);
  $query = $em->createQuery(
    'SELECT p FROM EpiDevAdminBundle:Offer p WHERE p.city = :city'
    )->setParameters(array('city' => $city)
  );
  $offers = $query->getResult();
}
/*if ($type) {
$query = $em->createQuery(
'SELECT p FROM EpiDevAdminBundle:Offer p WHERE p.job_type LIKE :job'
)->setParameters(array('job' => '%'.$type.'%')
);
$offers = $query->getResult();
}
if ($domain) {
$query = $em->createQuery(
'SELECT p FROM EpiDevAdminBundle:Offer p WHERE p.domain LIKE :domain'
)->setParameters(array('domain' => '%'.$domain.'%')
);
$offers = $query->getResult();
}*/

//var_dump($offers);
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

  return new Response(json_encode(array('title' => $title, 'description' => $description, 'id' => $id)));
}

public function detailsAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->query->get('id'));
  $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
  $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();
  $query = $em->createQuery(
    'SELECT p
    FROM EpiDevAdminBundle:Offer p
    ORDER BY p.id DESC'
    )->setMaxResults(4);
    $last_offers = $query->getResult();

    return $this->render('AppBundle::offer_details.html.twig', array('offer' => $offer, 'agencies' => $agencies, 'recruteur' => $cms, 'last_offers' => $last_offers));
  }
}
