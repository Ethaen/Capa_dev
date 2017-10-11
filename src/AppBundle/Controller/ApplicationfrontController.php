<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplicationfrontController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle::spontaneous_application.html.twig');
    }

}
