<?php

namespace ContainerMSoiHlr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_RemotePackageStorageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.remote_package_storage' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/RemotePackageStorage.php';

        return $container->privates['asset_mapper.importmap.remote_package_storage'] = new \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage((\dirname(__DIR__, 4).'/assets/vendor'));
    }
}
