<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OfferfrontController extends Controller
{

    public function listAction(Request $request)
    {
      return $this->render('AppBundle::offer.html.twig', );
    }

    public function detailsAction(Request $request)
    {
      return $this->render('AppBundle::offer_details.html.twig');
    }

}
