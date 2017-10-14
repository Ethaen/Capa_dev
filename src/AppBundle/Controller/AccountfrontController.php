<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Service\FileUploader;

class AccountfrontController extends Controller
{
    public function personnal_spaceAction(Request $request)
    {
        $user = $this->getUser();
        if (!($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) && !$user)
        {
          return $this->redirectToRoute('login_register');
        }
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:UserInfo p
            WHERE p.user_id LIKE :id'
        )->setParameters(array('id' => $user->getId()));

        $user_info = $query->getResult();
        return $this->render('AppBundle::personnal_space.html.twig', array('user_info' => $user_info));
    }

    public function get_CVAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();

      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:UserInfo p
          WHERE p.user_id LIKE :id'
      )->setParameters(array('id' => $user->getId()));

      $user_info = $query->getResult();

      $file_name = $request->query->get('user_cv');

      if ($user_info[0]->getCv_generated_name() != $file_name)
        return $this->redirectToRoute('personnal_space');

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

    public function login_registerAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $domain_activity = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

      return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs, 'agencies' => $agencies));
    }

    public function lost_passwordAction(Request $request)
    {
      $this->addFlash("reset_success", "Si cette adresse email est reconnue, un email contenant votre nouveau mot de passe vous sera envoyé.");
      if ($request->get('email_resetted'))
      {


        // Send email
      }
      return $this->render('AppBundle::lost_password.html.twig');
    }

    public function my_alertsAction(Request $request)
    {
      return $this->render('AppBundle::my_alerts.html.twig');
    }

    public function modify_infoAction(Request $request)
    {
      // Check is_connected and fetch user_info
      $user = $this->getUser();
      if (!($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) && !$user)
      {
        return $this->redirectToRoute('login_register');
      }
      $em = $this->getDoctrine()->getManager();

      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:UserInfo p
          WHERE p.user_id LIKE :id'
      )->setParameters(array('id' => $user->getId()));
      $user_info = $query->getResult();

      $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();
      $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();
      $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();
      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:Offer p
                      ORDER BY p.id DESC'
      )->setMaxResults(4);
      $last_offers = $query->getResult();
      $em->flush();
      return $this->render('AppBundle::modify_info.html.twig', array('user_info' => $user_info, 'domains'
                            => $domains, 'jobs' => $jobs, 'agencies' => $agencies, 'last_offers' => $last_offers));
    }

    public function update_infoAction(Request $request)
    {
      $user = $this->getUser();
      if (!($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) && !$user)
      {
        return $this->redirectToRoute('login_register');
      }
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQuery(
          'SELECT p
          FROM EpiDevAdminBundle:UserInfo p
          WHERE p.user_id LIKE :id'
      )->setParameters(array('id' => $user->getId()));
      $user_info = $query->getResult()[0];

      $user_info->setCivility($request->request->get('civility'));
      $user_info->setName($request->request->get('name'));
      $user_info->setFirstname($request->request->get('firstname'));
      $user_info->setEmail($request->request->get('email'));
      $user_info->setTelephone($request->request->get('telephone'));
      $user_info->setMobilePhone($request->request->get('mobile_phone'));
      $user_info->setAddress($request->request->get('address'));
      $user_info->setPostalCode($request->request->get('postal_code'));
      $user_info->setCity($request->request->get('city'));
      $user_info->setDomain($request->request->get('domain'));
      $user_info->setJob($request->request->get('job'));
      $user_info->setEmployType($request->request->get('contract_type'));
      $user_info->setAgency($request->request->get('agency'));

      $em->flush();
      return $this->redirectToRoute('personnal_space');
    }

    public function modify_cvAction(Request $request)
    {
        $request->request->get('user_id');
        $request->request->get('real_name');
        $request->request->get('name');

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:UserInfo p
            WHERE p.user_id LIKE :id'
        )->setParameters(array('id' => $request->request->get('user_id')));

        $user_info = $query->getResult();
        $user_info[0]->setCv_generated_name($request->request->get('name'));
        $user_info[0]->setCv($request->request->get('real_name'));

        $em->flush();
        return $this->redirectToRoute('home');
    }
}
