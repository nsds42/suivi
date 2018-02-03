<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DM3Controller extends Controller
{
    /**
     * @Route("/d/m3", name="d_m3")
     */
    public function index()
    {
        return $this->render('DM3/index.html.twig');
    }
}
