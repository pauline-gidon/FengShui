<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FengshuiController extends AbstractController
{
    #[Route('/feng-shui', name: 'fengshui')]
    public function index(): Response
    {
        return $this->render('fengshui/index.html.twig', [
            'controller_name' => 'FengshuiController',
        ]);
    }

}
