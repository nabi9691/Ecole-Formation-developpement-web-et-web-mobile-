<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfsController extends AbstractController
{
    /**
     * @Route("/profs", name="app_profs")
     */
    public function index(): Response
    {
        return $this->render('profs/index.html.twig', [
            'controller_name' => 'ProfsController',
        ]);
    }
}
