<?php

namespace Container331LKvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QPQjjMuService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.QPQjjMu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QPQjjMu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lieucampingRepository' => ['privates', 'App\\Repository\\LieucampingRepository', 'getLieucampingRepositoryService', true],
        ], [
            'lieucampingRepository' => 'App\\Repository\\LieucampingRepository',
        ]);
    }
}
