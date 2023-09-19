<?php

namespace ContainerU1vSPKf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OH5CAGzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oH5CAGz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oH5CAGz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'skillsRepository' => ['privates', 'App\\Repository\\SkillsRepository', 'getSkillsRepositoryService', true],
        ], [
            'skillsRepository' => 'App\\Repository\\SkillsRepository',
        ]);
    }
}
