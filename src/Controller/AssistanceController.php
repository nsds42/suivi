<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AssistanceController extends Controller
{
    /**
     * @Route("/assistance", name="assistance")
     */
    public function index()
    {
        return $this->render('Assistance/index.html.twig');
    }
}
