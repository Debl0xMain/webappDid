<?php

namespace ContainerNMNnWSX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFunctionControllermotosParMarqueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hznGe2U.App\Controller\FunctionController::motosParMarque()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hznGe2U.App\\Controller\\FunctionController::motosParMarque()'] = ($container->privates['.service_locator.hznGe2U'] ?? $container->load('get_ServiceLocator_HznGe2UService'))->withContext('App\\Controller\\FunctionController::motosParMarque()', $container);
    }
}
