<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Service\FileUploader;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\HttpFoundation\Session\Session;
use EpiDev\AdminBundle\Entity\UserInfo;
use EpiDev\AdminBundle\Entity\Alert;

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

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Alert p
            WHERE p.userEmail LIKE :email'
        )->setParameters(array('email' => $user->getEmail()));

        $alerts = $query->getResult();
        $domains = $this->getDoctrine()->getRepository('EpiDevAdminBundle:Domain')->findAll();
        $jobs = $this->getDoctrine()->getRepository('EpiDevAdminBundle:Job')->findAll();
        $agencies = $this->getDoctrine()->getRepository('EpiDevAdminBundle:Agency')->findAll();
        $cms = $em->getRepository('EpiDevAdminBundle:CMS')->findAll()[0]->getUrlName();
        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Offer p WHERE p.active = 1
                        ORDER BY p.id DESC'
        )->setMaxResults(4);
        $last_offers = $query->getResult();

        $query = $em->createQuery(
            'SELECT p
            FROM EpiDevAdminBundle:Application p
            WHERE p.userId LIKE :id'
        )->setParameters(array('id' => $user_info[0]->getId()));
        $applications = $query->getResult();
        return $this->render('AppBundle::personnal_space.html.twig', array('user_info' => $user_info, 'alerts' => $alerts, 'domains' => $domains
                              , 'jobs' => $jobs, 'agencies' => $agencies, 'recruteur' => $cms, 'last_offers' => $last_offers, 'applications' => $applications));
    }

    public function set_alertAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();
      $alert = new Alert();

      $alert->setName($request->query->get('alert_name'));
      $alert->setDomain($request->query->get('alert_domain'));
      $alert->setJob($request->query->get('alert_job'));
      $alert->setDepartment($request->query->get('alert_department'));
      $alert->setAgency($request->query->get('alert_agency'));
      $alert->setUserEmail($user->getEmail());
      $em->persist($alert);
      $em->flush();

      return $this->redirectToRoute('personnal_space');
    }

    public function delete_alertAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $alert = $this->getDoctrine()->getRepository('EpiDevAdminBundle:Alert')->find($request->query->get('alert_id'));

      $em->remove($alert);
      $em->flush();

      return $this->redirectToRoute('personnal_space');
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
      $password_ok = 0;
      $invalid_credential = 0;

      $login_email = $request->get('login_email');
      $login_password = $request->get('login_password');

      if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
      {
          return $this->redirectToRoute('home');
      }

      if ($login_email && $login_password && !$request->query->get('account_create'))
      {
        // hash password and compare to db password
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('email' => $login_email) );
        if (!$user)
        {
          $flashbag = $this->get('session')->getFlashBag();
          $flashbag->get("invalid_credential");
          $this->addFlash("invalid_credential", "L'email ou le mot de passe entré n'est pas reconnu.");
          return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs, 'agencies' => $agencies,
                                                                   'invalid_credential' => 1, 'email_exist' => 0, 'account_created' => 0));
        }
        $encoder = new MessageDigestPasswordEncoder();
        $password = $encoder->encodePassword($login_password, $user->getSalt());
        if ($password == $user->getPassword() && $user)
          $password_ok = 1;
        if ($password_ok)
        {
          $token = new UsernamePasswordToken($user, $user->getPassword(), 'main', $user->getRoles());
          $context = $this->get('security.token_storage');
          $context->setToken($token);
          $router = $this->get('router');
          return $this->redirectToRoute('home');
        }
        else if (!$password_ok || !$user)
          {
            //flashbag invalid credential
            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->get("invalid_credential");
            $this->addFlash("invalid_credential", "L'email ou le mot de passe entré n'est pas reconnu.");
            $invalid_credential = 1;
          }
      }
      else if ($request->query->get('account_create'))
      {
        $session = new Session();
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('email' => $request->get('register_email')) );
        if ($user)
        {
          $flashbag = $this->get('session')->getFlashBag();
          $flashbag->get("email_exist");
          $this->addFlash("email_exist", "Un compte est déjà associé à cet email");
          return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs,
                               'agencies' => $agencies, 'email_exist' => 1, 'invalid_credential' => 0, 'account_created' => 1));
        }
        // If user doesn't exist, create it
       $user = $userManager->createUser();
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $charactersLength = strlen($characters);
       $randomString = '';
       for ($i = 0; $i < 10; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
       }

       $user->setUsername($randomString);
       $user->setEmail($request->query->get('register_email'));
       $user->setEmailCanonical($request->query->get('register_email'));
       // this method will encrypt the password with the default settings :)
       $user->setPlainPassword($request->query->get('register_password'));
       $userManager->updateUser($user);
       // Create associated user_info
       $session = new Session();
       $user_info = new UserInfo();
       $user_info->setCivility($request->query->get('register_civility'));
       $user_info->setName($request->query->get('register_name'));
       $user_info->setFirstname($request->query->get('register_firstname'));
       $user_info->setEmail($request->query->get('register_email'));
       $user_info->setTelephone($request->query->get('register_telephone'));
       $user_info->setMobilePhone($request->query->get('register_mobile'));
       $user_info->setAddress($request->query->get('register_address'));
       $user_info->setPostalCode($request->query->get('register_code'));
       $user_info->setCity($request->query->get('register_city'));
       $user_info->setDomain($request->query->get('register_domain'));
       $user_info->setJob($request->query->get('register_job'));
       $user_info->setEmployType($request->query->get('register_contract_type'));
       $user_info->setCv($session->get('real_name'));
       $user_info->setCv_generated_name($session->get('name'));
       $user_info->setUser_id($user->getId());
       $user_info->setAgency($request->query->get('register_agency'));
       $user_info->setSubscription(new \DateTime("now"));
       $em->persist($user_info);
       $em->flush();
       $flashbag = $this->get('session')->getFlashBag();
       $flashbag->get("account_created");
       $this->addFlash("account_created", "Nous avons bien enregistré votre profil. Nous vous suggérons de créer des alertes via votre compte
afin d’être prévenu des offres correspondantes à votre profil.");
       return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs,
                                                                          'agencies' => $agencies, 'invalid_credential' => 0, 'email_exist' => 0,
                                                                          'account_created' => 1));
      }


      if (!$invalid_credential)
        return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs,
                                                                           'agencies' => $agencies, 'invalid_credential' => 0, 'email_exist' => 0,
                                                                           'account_created' => 0));
      else
        return $this->render('AppBundle::login_register.html.twig',  array('domain_activity' => $domain_activity, 'jobs' => $jobs, 'agencies' => $agencies,
                                                                           'invalid_credential' => 1, 'email_exist' => 0, 'account_created' => 0));
    }



    public function lost_passwordAction(Request $request, \Swift_Mailer $mailer)
    {
      $flashbag = $this->get('session')->getFlashBag();
      $flashbag->get("reset_success");
      $this->addFlash("reset_success", "Si cette adresse email est reconnue, un email contenant votre nouveau mot de passe vous sera envoyé.");
      if ($request->get('email_resetted'))
      {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('email' => $request->get('email')) );
        $new_password = $randomString;
        $user->setPlainPassword($new_password);
        $userManager->updateUser($user, true);

        $message = (new \Swift_Message('Modification du mot de passe'))
        ->setFrom('guidiv7@gmail.com')
        ->setTo('guidiv7@gmail.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/reset_password.html.twig',
                array('new_password' => $new_password)
            ),
            'text/html'
        );
        $mailer->send($message);

        return $this->render('AppBundle::lost_password.html.twig', array('success' => 1 ));
      }
      return $this->render('AppBundle::lost_password.html.twig', array('success' => 0 ));
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
      $user_info->setEmail(preg_replace('/\s+/', '', $request->request->get('email')));
      $user_info->setTelephone($request->request->get('telephone'));
      $user_info->setMobilePhone($request->request->get('mobile_phone'));
      $user_info->setAddress($request->request->get('address'));
      $user_info->setPostalCode($request->request->get('postal_code'));
      $user_info->setCity($request->request->get('city'));
      $user_info->setDomain($request->request->get('domain'));
      $user_info->setJob($request->request->get('job'));
      $user_info->setEmployType($request->request->get('contract_type'));
      $user_info->setAgency($request->request->get('agency'));

      $userManager = $this->get('fos_user.user_manager');

      // Pour charger un utilisateur
      $user = $userManager->findUserBy(array('id' => $request->get('id')));
      $user->setEmail($request->request->get('email'));

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

    public function register_cv_uploadAction(Request $request)
    {
      $session = new Session();

      $session->set('name', $request->request->get('name'));
      $session->set('real_name', $request->request->get('real_name'));

      return $this->redirectToRoute('login_register');
    }
}
