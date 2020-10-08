<?php

namespace ContainerZULxbjy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B7Oot3EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b7Oot3E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b7Oot3E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
