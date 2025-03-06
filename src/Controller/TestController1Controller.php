<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController1Controller extends AbstractController
{
    #[Route('/test/controller1', name: 'app_test_controller1')]
    public function index(): Response
    {
        return $this->render('test_controller1/index.html.twig', [
            'controller_name' => 'TestController1Controller',
        ]);
    }
}
