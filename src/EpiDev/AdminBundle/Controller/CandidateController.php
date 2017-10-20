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


class CandidateController extends Controller
{
  public function indexAction(Request $request)
  {
    $agency = $request->query->get('agency');
    $name = $request->query->get('name');

    $em = $this->getDoctrine()->getManager();
    if ( isset($agency) && $agency != "agence")
    {
      // Filter from agency
      echo $agency;
      $query = $em->createQuery(
        'SELECT p
        FROM EpiDevAdminBundle:UserInfo p
        WHERE p.agency LIKE :agency
        ORDER BY p.id ASC'
        )->setParameter('agency', $agency);

        $user_infos = $query->getResult();
      }
      else if ( isset($name) && $name != "")
      {
        // Filter from domain
        $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:UserInfo p
          WHERE p.name LIKE :name
          ORDER BY p.id ASC'
          )->setParameter('name', $name
        );
        $user_infos = $query->getResult();
      }
      else
      {
        $user_infos = $em->getRepository('EpiDevAdminBundle:UserInfo')->findAll();
      }

      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();


    return $this->render('EpiDevAdminBundle:Default:candidate.html.twig', array('user_infos' => $user_infos, 'agencies' => $agencies, 'domains' => $domains) );
  }

  public function editAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $user_infos = $em->getRepository('EpiDevAdminBundle:UserInfo')->find($request->query->get('id'));
    $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
    $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
    $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();

    return $this->render('EpiDevAdminBundle:Default:edit_candidate.html.twig', array('user_infos' => $user_infos, 'agencies' => $agencies, 'domains' => $domains, 'jobs' => $jobs));
  }

  public function duplicateAction(Request $request)
  {
    $id = $request->query->get('id');

    $em = $this->getDoctrine()->getManager();
    $user_info = $em->getRepository('EpiDevAdminBundle:UserInfo')->find($id);

    $user_copy = clone $user_info;
    $em->persist($user_copy);
    $em->flush();
    return $this->redirectToRoute('candidate');
  }

  public function deleteAction(Request $request)
  {
    $id = $request->query->get('id');
    $em = $this->getDoctrine()->getManager();
    $user_info = $em->getRepository('EpiDevAdminBundle:UserInfo')->find($id);

    $em->remove($user_info);
    $em->flush();
    return $this->redirectToRoute('candidate');
  }
}
