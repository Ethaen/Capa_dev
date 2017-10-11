<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountfrontController extends Controller
{
    public function personnal_spaceAction(Request $request)
    {
        return $this->render('AppBundle::personnal_space.html.twig');
    }

    public function login_registerAction(Request $request)
    {
      return $this->render('AppBundle::login_register.html.twig');
    }
}
