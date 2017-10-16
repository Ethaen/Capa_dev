<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactfrontController extends Controller
{
  public function indexAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $agencies = $em->getRepository('EpiDevAdminBundle:Agency')->findAll();

    return $this->render('AppBundle::contact.html.twig', array('agencies' => $agencies));
  }

  public function sendEmail(Request $request, \Swift_Mailer $mailer)
  {
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
  }
}
