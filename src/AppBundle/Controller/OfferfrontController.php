<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;


class OfferfrontController extends Controller
{
  public function checkKeyword($title, $keyword)
  {
    $keywordKeys = preg_split("/\s*[" . preg_quote(implode("", array(" ")), "/") . "]+\s*/", $keyword);
    $titleKeys = preg_split("/\s*[" . preg_quote(implode("", array(" ")), "/") . "]+\s*/", $title);

    for ($i = 0; $i < count($keywordKeys); ++$i)
    {
      $found = 0;
      for ($t = 0; $t < count($titleKeys); ++$t)
      {
        if (strtolower($keywordKeys[$i]) == strtolower($titleKeys[$t]))
        {
          $found = 1;
        }
      }
      if (!$found)
      {
        return 1;
      }
    }
    return 0;
  }

  public function listAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $keyword = $request->query->get('keyword');
    $city = $request->query->get('city');
    $type = $request->query->get('type');
    $domain = $request->query->get('domain');
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();
    $query = $em->createQuery('SELECT p FROM EpiDevAdminBundle:Offer p ORDER BY p.id DESC')->setMaxResults(4);
    $last_offers = $query->getResult();
    $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();

    return $this->render('AppBundle::offers.html.twig', array('keyword' => $keyword, 'city' => $city, 'type' => $type, 'domain' => $domain, 'last_offers' => $last_offers, 'recruteur' => $cms));
  }

  public function inc_i_offerAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();
    $current = $request->request->get('i');
    $keyword = $request->request->get('keyword');
    $city = $request->request->get('city');
    $type = $request->request->get('type');
    $type = ($type == "cdd" || $type == "interim" ? 1 : 0);
    $domain = $request->request->get('domain');
    $title = "";
    $id = "";
    $description = "";

    for ($i = 0; $i < count($offers); ++$i)
    {
      while ($keyword && $i < count($offers) && $this->checkKeyword($offers[$i]->getTitle(), $keyword)) {
        array_splice($offers, $i, 1);
      }
    }
    for ($i = 0; $i < count($offers); ++$i)
    {
      while ($city && $i < count($offers) && strtolower($offers[$i]->getCity()) != strtolower($city)) {
        array_splice($offers, $i, 1);
      }
    }
    for ($i = 0; $i < count($offers); ++$i)
    {
      while ($type && $i < count($offers) && strtolower($offers[$i]->getJob_type()) != strtolower($type)) {
        array_splice($offers, $i, 1);
      }
    }
    for ($i = 0; $i < count($offers); ++$i)
    {
      while ($domain && $i < count($offers) && strtolower($offers[$i]->getDomain()) != strtolower($domain)) {
        array_splice($offers, $i, 1);
      }
    }

    $ko = 0;
    if ($current < count($offers)) {
      $title = $offers[$current]->getTitle();
      $id = $offers[$current]->getId();
      $description = $offers[$current]->getDescription_txt();
    }
    else {
      $ko = 1;
    }
    return new Response(json_encode(array('title' => $title, 'description' => $description, 'id' => $id, 'ko' => $ko)));
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
