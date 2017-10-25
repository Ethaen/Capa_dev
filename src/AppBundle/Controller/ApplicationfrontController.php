<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EpiDev\AdminBundle\Entity\Application;
use Symfony\Component\Validator\Constraints\DateTime;

class ApplicationfrontController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle::application.html.twig');
    }

    public function apply_offerAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $offer = $em->getRepository('EpiDevAdminBundle:Offer')->find($request->query->get('id'));
      $application = new Application;
      $user = $this->getUser();
      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:UserInfo p
          WHERE p.user_id LIKE :id'
      )->setParameters(array('id' => $user->getId()));
      $user_info = $query->getResult();


      $application->setName($user_info[0]->getName());
      $application->setFirstname($user_info[0]->getFirstname());
      $application->setOfferName($offer->getTitle());
      $application->setApplicationDate(new \DateTime);
      $em->persist($application);
      $em->flush();

      return $this->redirectToRoute('list_offers');
    }

}
