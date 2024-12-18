<?php

namespace ContainerE1YSxnZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BgOZrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bgO__Zr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bgO__Zr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'context' => ['privates', '.errored..service_locator.bgO__Zr.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.bgO__Zr": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
            'entityDto' => ['privates', '.errored..service_locator.bgO__Zr.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.bgO__Zr": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'formOptions' => ['privates', '.errored..service_locator.bgO__Zr.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.bgO__Zr": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'formOptions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }
}
