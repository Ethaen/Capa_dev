<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Offer;
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
        )->setParameters(array('agency' => $agency, 'domain' => $domain)
      );

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
          )->setParameter('domain', $domain
        );

        $offers = $query->getResult();
      }
      else
      {
        // Do not filter
        $offers = $em->getRepository('EpiDevAdminBundle:Offer')->findAll();
      }

      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      return $this->render('EpiDevAdminBundle:Default:offer.html.twig', array('offers' => $offers, 'agencies' => $agencies, 'domains' => $domains) );
    }

    public function uploadAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $offer = new Offer;

      $offer->setTitle($request->request->get('title'));
      $offer->setRéférence($request->request->get('reference'));
      $offer->setBegin(new \DateTime($request->request->get('begin')));
      $offer->setActive($request->request->get('active'));
      $offer->setDepartment($request->request->get('department'));
      $offer->setCity($request->request->get('city'));
      $offer->setAgency($request->request->get('agency'));
      $offer->setDomain($request->request->get('domain'));
      $offer->setJob($request->request->get('job'));
      $offer->setJob_type($request->request->get('job_type'));
      $offer->setDuration($request->request->get('duration'));
      $offer->setExperience($request->request->get('experience'));
      $offer->setDegree($request->request->get('degree'));
      $offer->setDescription($request->request->get('description'));
      $offer->setDescription_txt($request->request->get('description_txt'));
      if ($request->request->get('img_src')) {
        $offer->setImg_src("img/offer/upload/".$request->request->get('img_src'));
      }
      else {
        $offer->setImg_src("");
      }
      $em->persist($offer);
      $em->flush();


      $alerts = $em->getRepository('EpiDevAdminBundle:Alert')->findAll();

      foreach ($alerts as $alert)
      {
        if ($alert->getJob() == $request->request->get('job') && $alert->getDepartment() == $request->request->get('department'))
        {
          $message = (new \Swift_Message('Alerte nouvelle offre Capa'))
          ->setFrom('guidiv7@gmail.com')
          ->setTo($alert->getUserEmail())
          ->setBody(
              $this->renderView(
                  'Emails/new_offer.html.twig',
                  array('domain' => $request->request->get('domain'), 'job' => $request->request->get('job'), 'agency' => $request->request->get('agency'),
                        'department' => $request->request->get('department'), 'offer_id' => $offer->getId())
              ),
              'text/html'
          );
          $this->get('mailer')->send($message);
        }
    }
      return $this->redirectToRoute('offer');
    }

    public function addAction()
    {
      $em = $this->getDoctrine()->getManager();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();

      return $this->render('EpiDevAdminBundle:Default:add_offer.html.twig', array('agencies' => $agencies, 'domains' => $domains, 'jobs' => $jobs));
    }

    public function editAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->query->get('id'));
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();

      return $this->render('EpiDevAdminBundle:Default:edit_offer.html.twig', array('offer' => $offer, 'agencies' => $agencies, 'domains' => $domains, 'jobs' => $jobs));
    }

    public function saveAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->request->get('id'));

      $offer->setTitle($request->request->get('title'));
      $offer->setRéférence($request->request->get('reference'));
      $offer->setBegin(new \DateTime($request->request->get('begin')));
      $offer->setActive($request->request->get('active'));
      $offer->setDepartment($request->request->get('department'));
      $offer->setCity($request->request->get('city'));
      $offer->setAgency($request->request->get('agency'));
      $offer->setDomain($request->request->get('domain'));
      $offer->setJob($request->request->get('job'));
      $offer->setJob_type($request->request->get('job_type'));
      $offer->setDuration($request->request->get('duration'));
      $offer->setExperience($request->request->get('experience'));
      $offer->setDegree($request->request->get('degree'));
      $offer->setDescription($request->request->get('description'));
      //$offer->setDescription_txt($request->request->get('description_txt'));
      $offer->setDescription_txt(strip_tags($request->request->get('description'), "<div><br>"));
      if ($request->request->get('img_src')) {
        $offer->setImg_src("img/offer/upload/".$request->request->get('img_src'));
      }
      $em->flush();
      return $this->redirectToRoute('offer');
    }

    public function duplicateAction(Request $request)
    {
      $id = $request->query->get('id');

      $em = $this->getDoctrine()->getManager();
      $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($id);

      $offer_copy = clone $offer;
      $em->persist($offer_copy);
      $em->flush();
      return $this->redirectToRoute('offer');
    }

    public function deleteAction(Request $request)
    {
      $id = $request->query->get('id');
      $em = $this->getDoctrine()->getManager();
      $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($id);

      $em->remove($offer);
      $em->flush();
      return $this->redirectToRoute('offer');
    }
  }
