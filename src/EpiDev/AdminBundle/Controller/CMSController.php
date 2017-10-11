<?php

namespace EpiDev\AdminBundle\Controller;

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

class CMSController extends Controller
{
  public function modifyCMSAction(Request $request)
  {
    $cms = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:CMS')->find($request->query->get('id'));

    return $this->render('EpiDevAdminBundle:Default:cms_modify.html.twig', array('entity' => $cms));
  }

  public function saveCMSAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $cms = $em->getRepository('EpiDevAdminBundle:CMS')->find($request->query->get('id'));

    $cms->setName($request->query->get('name'));
    $cms->setArticleTitle($request->query->get('article_title'));
    $cms->setContent($request->query->get('content'));
    $cms->setUrlName($request->query->get('url_name'));
    $cms->setMetaTitle($request->query->get('meta_title'));
    $cms->setDescription($request->query->get('description'));
    $cms->setIndexed($request->query->get('indexed'));
    $em->flush();
    return $this->redirectToRoute('cms');
  }
}
