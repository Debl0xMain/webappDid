<?php

namespace ContainerYRiTrul;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProduitsRepository' shared autowired service.
     *
     * @return \App\Repository\ProduitsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProduitsRepository'] = new \App\Repository\ProduitsRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
