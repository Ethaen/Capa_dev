<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Job;
use EpiDev\AdminBundle\Entity\Domain;
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

class JobController extends Controller
{
  public function jobAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $jobs = $em->getRepository('EpiDevAdminBundle:Job')->findAll();
    $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();

    return $this->render('EpiDevAdminBundle:Default:job.html.twig', array('jobs' => $jobs, 'domains' => $domains));
  }

  public function edit_jobAction(Request $request)
  {
    $job = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Job')->find($request->query->get('id'));
    $domains = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Domain')->findAll();

    return $this->render('EpiDevAdminBundle:Default:edit_job.html.twig', array('job' => $job, 'domains' => $domains));
  }

  public function edit_domainAction(Request $request)
  {
    $domain = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Domain')->find($request->query->get('id'));
    $domains = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:Domain')->findAll();

    return $this->render('EpiDevAdminBundle:Default:edit_domain.html.twig', array('domain' => $domain, 'domains' => $domains));
  }

  public function upload_jobAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $job = new Job;

    $job->setName($request->request->get('job'));
    $job->setDomain($request->request->get('domain'));
    $em->persist($job);
    $em->flush();
    return $this->redirectToRoute('job');
  }

  public function upload_domainAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domain = new Domain;

    $domain->setName($request->request->get('domain'));
    $em->persist($domain);
    $em->flush();
    return $this->redirectToRoute('job');
  }

  public function save_jobAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $job = $em->getRepository('EpiDevAdminBundle:Job')->find($request->request->get('id'));

    $job->setName($request->request->get('job'));
    $job->setDomain($request->request->get('domain'));
    $em->flush();
    return $this->redirectToRoute('job');
  }

  public function save_domainAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domain = $em->getRepository('EpiDevAdminBundle:Domain')->find($request->request->get('id'));

    $domain->setName($request->request->get('domain'));
    $em->flush();
    return $this->redirectToRoute('job');
  }

  public function add_jobAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();

    return $this->render('EpiDevAdminBundle:Default:add_job.html.twig', array('domains' => $domains));
  }

  public function add_domainAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domains = $em->getRepository('EpiDevAdminBundle:Domain')->findAll();

    return $this->render('EpiDevAdminBundle:Default:add_domain.html.twig', array('domains' => $domains));
  }

  public function delete_jobAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $job = $em->getRepository('EpiDevAdminBundle:Job')->find($request->query->get('id'));

    $em->remove($job);
    $em->flush();
    return $this->redirectToRoute('job');
  }

  public function delete_domainAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $domain = $em->getRepository('EpiDevAdminBundle:Domain')->find($request->query->get('id'));

    $em->remove($domain);
    $em->flush();
    return $this->redirectToRoute('job');
  }
}
