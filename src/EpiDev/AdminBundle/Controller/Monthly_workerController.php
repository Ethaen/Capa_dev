<?php

namespace EpiDev\AdminBundle\Controller;

use EpiDev\AdminBundle\Entity\Job;
use EpiDev\AdminBundle\Entity\Domain;
use EpiDev\AdminBundle\Entity\MonthlyWorker;
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

class Monthly_workerController extends Controller
{
  public function listAction()
  {
    $em = $this->getDoctrine()->getManager();

    $workers = $em->getRepository('EpiDevAdminBundle:MonthlyWorker')->findAll();
    return $this->render('EpiDevAdminBundle:Default:monthly_worker.html.twig', array('workers' => $workers));
  }

  public function modifyWorkerAction(Request $request)
  {
    $worker = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:MonthlyWorker')->find($request->query->get('id'));

    return $this->render('EpiDevAdminBundle:Default:worker_modify.html.twig', array('entity' => $worker));
  }

  public function saveWorkerAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $worker = $em->getRepository('EpiDevAdminBundle:MonthlyWorker')->find($request->request->get('id'));

    $worker->setName($request->request->get('name'));
    $worker->setFirstname($request->request->get('firstname'));
    $worker->setAge($request->request->get('age'));
    $worker->setInfo($request->request->get('info'));
    if ($request->request->get('image_id') && $request->request->get('image_name')) {
      $worker->setImg($request->request->get('image_name'));
    }
    $em->flush();
    return $this->redirectToRoute('monthly_worker');
  }

  public function uploadWorkerAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $worker = new MonthlyWorker;

    $worker->setName($request->request->get('name'));
    $worker->setFirstname($request->request->get('firstname'));
    $worker->setAge($request->request->get('age'));
    $worker->setInfo($request->request->get('info'));
    if ($request->request->get('image_id') && $request->request->get('image_name')) {
      $worker->setImg($request->request->get('image_name'));
    }
    else {
      $worker->setImg("");
    }
    $em->persist($worker);
    $em->flush();
    return $this->redirectToRoute('monthly_worker');
  }

  public function addWorkerAction(Request $request)
  {
    return $this->render('EpiDevAdminBundle:Default:add_worker.html.twig');
  }

  public function duplicateWorkerAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $worker = $em->getRepository('EpiDevAdminBundle:MonthlyWorker')->find($request->query->get('id'));

    $worker_copy = clone $worker;
    $em->persist($worker_copy);
    $em->flush();
    return $this->redirectToRoute('monthly_worker');
  }

  public function deleteWorkerAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $worker = $em->getRepository('EpiDevAdminBundle:MonthlyWorker')->find($request->query->get('id'));

    $em->remove($worker);
    $em->flush();
    return $this->redirectToRoute('monthly_worker');
  }

}
