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
  public function modifyCmsAction(Request $request)
  {
    $cms = $this->getDoctrine()->getManager()->getRepository('EpiDevAdminBundle:CMS')->find($request->query->get('id'));
    return $this->render('EpiDevAdminBundle:Default:cms_modify.html.twig', array('entity' => $cms));
  }

  public function saveCmsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $cms = $em->getRepository('EpiDevAdminBundle:CMS')->find($request->request->get('id'));

    $cms->setName($request->request->get('name'));
    $cms->setArticleTitle($request->request->get('article_title'));
    $cms->setContent($request->request->get('content'));
    $cms->setUrlName($request->request->get('url_name'));
    $cms->setMetaTitle($request->request->get('meta_title'));
    $cms->setMetaDescription($request->request->get('meta_description'));
    $cms->setIndexed($request->request->get('indexed'));
    $em->flush();
    return $this->redirectToRoute('cms');
  }
}
