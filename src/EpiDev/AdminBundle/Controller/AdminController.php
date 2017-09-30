<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function actualityAction()
    {
       return $this->render('EpiDevAdminBundle:Default:actuality.html.twig');
    }
}
