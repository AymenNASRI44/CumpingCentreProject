<?php

namespace ContainerAfbJls7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JtI7UnbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jtI7Unb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jtI7Unb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.jtI7Unb.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.jtI7Unb": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
