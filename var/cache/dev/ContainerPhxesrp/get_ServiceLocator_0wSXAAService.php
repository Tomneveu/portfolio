<?php

namespace ContainerPhxesrp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0wSXAAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0wS_xAA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0wS_xAA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService', true],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
            'passwordEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
        ], [
            'authenticator' => 'App\\Security\\LoginFormAuthenticator',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
