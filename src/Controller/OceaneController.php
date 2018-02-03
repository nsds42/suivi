<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class OceaneController extends Controller
{
    /**
     * @Route("/oceane", name="oceane")
     */
    public function index()
    {
        return $this->render('Oceane/index.html.twig');
    }
}
