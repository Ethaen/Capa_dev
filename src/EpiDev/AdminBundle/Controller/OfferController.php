<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OfferController extends Controller
{
    public function offerAction(Request $request)
    {
      $agency = $request->query->get('agency');
      $domain = $request->query->get('domain');

      $em = $this->getDoctrine()->getManager();
      if ( (isset($agency) && isset($domain)) && ($agency != "agence" && $domain != "activity") )
        {
          // Filter from agency and domain
          $query = $em->createQuery(
              'SELECT p
              FROM EpiDevAdminBundle:Offer p
              WHERE p.agency LIKE :agency
              AND p.domain LIKE :domain
              ORDER BY p.id ASC'
          )->setParameters(array('agency' => $agency, 'domain' => $domain));

          $offers = $query->getResult();
        }
      else if ( isset($agency) && $agency != "agence")
      {
        // Filter from agency
        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Offer p
            WHERE p.agency LIKE :agency
            ORDER BY p.id ASC'
        )->setParameter('agency', $agency);

        $offers = $query->getResult();
      }
      else if ( isset($domain) && $domain != "activity")
      {
        // Filter from domain
        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Offer p
            WHERE p.domain LIKE :domain
            ORDER BY p.id ASC'
        )->setParameter('domain', $domain);

        $offers = $query->getResult();
      }
      else
      {
        // Do not filter
        $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();
      }
      return $this->render('EpiDevAdminBundle:Default:offer.html.twig', array('offers' => $offers) );
    }

}
