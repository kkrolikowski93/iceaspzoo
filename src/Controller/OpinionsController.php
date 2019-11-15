<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpinionsController extends AbstractController
{
    /**
     * @Route("/opinions", name="opinions")
     */
    public function index()
    {
        return $this->render('opinions/index.html.twig', [
            'controller_name' => 'OpinionsController',
        ]);
    }
}
