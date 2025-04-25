<?php

namespace App\Service;

use Prometheus\CollectorRegistry;
use Prometheus\Storage\InMemory;

class MetricsService
{
    private CollectorRegistry $registry;

    public function __construct()
    {
        $this->registry = new CollectorRegistry(new InMemory());
    }

    public function incrementHttpRequests()
    {
        $counter = $this->registry->getOrRegisterCounter(
            'app',
            'http_requests_total',
            'Nombre total de requêtes HTTP',
            ['route']
        );

        $counter->inc(['home']); // tu peux dynamiquement mettre le nom de la route
    }

    public function renderMetrics(): string
    {
        $renderer = new \Prometheus\RenderTextFormat();
        $metrics = $this->registry->getMetricFamilySamples();
        return $renderer->render($metrics);
    }
}
