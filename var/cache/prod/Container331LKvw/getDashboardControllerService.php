<?php

namespace Container331LKvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\Admin\\DashboardController', $container));

        return $instance;
    }
}
