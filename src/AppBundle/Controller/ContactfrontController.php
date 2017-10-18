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
    $emails = $em->getRepository('EpiDevAdminBundle:email')->findAll();

    return $this->render('AppBundle::contact.html.twig', array('agencies' => $agencies, 'emails' => $emails));
  }

  public function sendEmailAction(Request $request, \Swift_Mailer $mailer)
  {
    $user_message = $request->request->get('message');
    $lname = $request->request->get('lname');
    $fname = $request->request->get('fname');
    $message = (new \Swift_Message('Message utilisateur'))
    ->setFrom($request->request->get('user_email'))
    ->setTo($request->request->get('agency_email'))
    ->setBody(
      $this->renderView(
        'Emails/send_user_email.html.twig',
        array('message' => $user_message, 'lname' => $lname, 'fname' => $fname, 'mail')
      ),
      'text/html'
    );
    $mailer->send($message);
    return $this->redirectToRoute('contact');
  }
}
