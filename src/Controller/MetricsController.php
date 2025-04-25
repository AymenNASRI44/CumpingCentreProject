<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MetricsService;

class MetricsController extends AbstractController
{
    #[Route('/metrics', name: 'app_metrics')]
    public function metrics(MetricsService $metricsService): Response
    {
        $output = $metricsService->renderMetrics();
        return new Response($output, 200, ['Content-Type' => 'text/plain']);
    }
}
