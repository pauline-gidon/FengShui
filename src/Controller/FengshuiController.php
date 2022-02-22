<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FengshuiController extends AbstractController
{
    #[Route('/feng-shui', name: 'fengshui')]
    public function fengshui(): Response
    {
        return $this->render('fengshui/fengshui.html.twig');
    }
    
    #[Route('/offre', name: 'offre')]
    public function offre(): Response
    {
        return $this->render('fengshui/offre.html.twig');
    }

    #[Route('/a-propos', name: 'aPropos')]
    public function aPropos(): Response
    {
        return $this->render('fengshui/aPropos.html.twig');
    }
}
