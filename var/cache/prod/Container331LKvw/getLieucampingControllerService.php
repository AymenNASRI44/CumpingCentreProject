<?php

namespace Container331LKvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLieucampingControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LieucampingController' shared autowired service.
     *
     * @return \App\Controller\LieucampingController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LieucampingController'] = $instance = new \App\Controller\LieucampingController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\LieucampingController', $container));

        return $instance;
    }
}
