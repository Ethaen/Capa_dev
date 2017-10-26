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
use EpiDev\AdminBundle\Entity\UserInfo;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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

    public function updateAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $candidate = $em->getRepository('EpiDevAdminBundle:UserInfo')->find($request->request->get('id'));
      $session = new Session();

      $candidate->setSubscription(new \DateTime($request->request->get('subscription')));
      $candidate->setName($request->request->get('name'));
      $candidate->setFirstname($request->request->get('firstname'));
      $candidate->setCivility($request->request->get('civility'));
      $candidate->setTelephone($request->request->get('telephone'));
      $candidate->setMobilePhone($request->request->get('mobile_phone'));
      $candidate->setEmail($request->request->get('email'));
      $candidate->setAddress($request->request->get('address'));
      $candidate->setPostalCode($request->request->get('postal_code'));
      $candidate->setCity($request->request->get('city'));
      $candidate->setAgency($request->request->get('agency'));
      $candidate->setDomain($request->request->get('domain'));
      $candidate->setJob($request->request->get('job'));
      $candidate->setEmployType($request->request->get('contract_type'));
      $candidate->setUser_id(-1);
      if ($session->get('real_name') != '')
      $candidate->setCv($session->get('real_name'));
      if ($session->get('name') != '')
      $candidate->setCv_generated_name($session->get('name'));

      $session->set('name', '');
      $session->set('real_name', '');
      $em->persist($candidate);
      $em->flush();

      return ($this->redirectToRoute('home'));

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

    public function get_cv_adminAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $user_info = $em->getRepository('EpiDevAdminBundle:UserInfo')->find($request->query->get('id'));

      $file_name = $request->query->get('user_cv');

      if ($user_info->getCv_generated_name() != $file_name)
      return $this->redirectToRoute('candidate');

      $basePath = $this->container->getParameter('kernel.root_dir').'/Resources/CV';
      $filePath = $basePath.'/'.$file_name;
      $fs = new FileSystem();
      if (!$fs->exists($filePath)) {
        throw $this->createNotFoundException();
      }

      // prepare BinaryFileResponse
      $response = new BinaryFileResponse($filePath);
      $response->trustXSendfileTypeHeader();
      $response->setContentDisposition(
        ResponseHeaderBag::DISPOSITION_INLINE,
        $file_name,
        iconv('UTF-8', 'ASCII//TRANSLIT', $file_name)
      );

      return $response;
    }

    public function addAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();

      return $this->render('EpiDevAdminBundle:Default:add_candidate.html.twig', array('agencies' => $agencies, 'domains' => $domains, 'jobs' => $jobs));
    }

    public function cv_uploadAction(Request $request)
    {
      $session = new Session();

      $session->set('name', $request->request->get('name'));
      $session->set('real_name', $request->request->get('real_name'));

      return $this->redirectToRoute('candidate');
    }

    public function uploadAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $candidate = new UserInfo;
      $session = new Session();

      $candidate->setSubscription(new \DateTime($request->request->get('subscription')));
      $candidate->setName($request->request->get('name'));
      $candidate->setFirstname($request->request->get('firstname'));
      $candidate->setCivility($request->request->get('civility'));
      $candidate->setTelephone($request->request->get('telephone'));
      $candidate->setMobilePhone($request->request->get('mobile_phone'));
      $candidate->setEmail($request->request->get('email'));
      $candidate->setAddress($request->request->get('address'));
      $candidate->setPostalCode($request->request->get('postal_code'));
      $candidate->setCity($request->request->get('city'));
      $candidate->setAgency($request->request->get('agency'));
      $candidate->setDomain($request->request->get('domain'));
      $candidate->setJob($request->request->get('job'));
      $candidate->setEmployType($request->request->get('contract_type'));
      $candidate->setUser_id(-1);
      $candidate->setCv($session->get('real_name'));
      $candidate->setCv_generated_name($session->get('name'));

      $session->set('name', '');
      $session->set('real_name', '');
      $em->persist($candidate);
      $em->flush();

      return ($this->redirectToRoute('home'));
    }

  }
