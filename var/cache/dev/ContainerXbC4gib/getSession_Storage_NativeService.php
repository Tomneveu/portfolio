<?php

namespace ContainerXbC4gib;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_NativeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session.storage.native" service is deprecated, use "session.storage.factory.native" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session.storage.native" service is deprecated, use "session.storage.factory.native" instead.');

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StrictSessionHandler.php';

        return $container->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($container->parameters['session.storage.options'], new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \SessionHandler()), $container->load('getSession_Storage_MetadataBagService'));
    }
}
