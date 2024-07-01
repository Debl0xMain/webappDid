<?php

namespace ContainerXPEiMOI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPumlCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\PumlCommand' shared autowired service.
     *
     * @return \App\Command\PumlCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/PumlCommand.php';

        $container->privates['App\\Command\\PumlCommand'] = $instance = new \App\Command\PumlCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('make:puml');
        $instance->setDescription('Create puml class diagram from Entities declared in `src/Entity`');

        return $instance;
    }
}