<?php

namespace EpiDev\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ActualityController extends Controller
{
    public function modifyAction(Request $request)
    {
      return $this->render('EpiDevAdminBundle:Default:modify.html.twig');
    }
}
