<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    public function indexAction()
    {
       if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))  {
        return $this->render('EpiDevAdminBundle:Default:index.html.twig');
      }
      else {
        echo ('NON AUTH');
      }
    }

}
