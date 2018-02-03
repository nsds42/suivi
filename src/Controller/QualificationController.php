<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class QualificationController extends Controller
{
    /**
     * @Route("/qualification", name="qualification")
     */
    public function index()
    {
        return $this->render('Qualification/index.html.twig');
    }
}
