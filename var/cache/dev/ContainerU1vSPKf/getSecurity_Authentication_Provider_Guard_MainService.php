<?php

namespace ContainerU1vSPKf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Guard_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.provider.guard.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.provider.guard.main" service is deprecated, use the new authenticator system instead.');

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'InMemoryUserChecker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasher.php';

        return $container->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Security\\LoginFormAuthenticator'] ?? $container->load('getLoginFormAuthenticatorService'));
        }, 1), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), 'main', new \Symfony\Component\Security\Core\User\InMemoryUserChecker(), new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))));
    }
}
