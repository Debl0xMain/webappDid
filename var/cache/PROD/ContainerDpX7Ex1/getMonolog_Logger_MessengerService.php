<?php

namespace ContainerDpX7Ex1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_MessengerService extends App_KernelPRODDebugContainer
{
    /**
     * Gets the private 'monolog.logger.messenger' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.messenger'] = $instance = new \Monolog\Logger('messenger');

        $instance->pushHandler(($container->privates['monolog.handler.null_internal'] ??= new \Monolog\Handler\NullHandler()));

        return $instance;
    }
}
