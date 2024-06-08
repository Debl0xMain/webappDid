<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subcategory extends \App\Entity\Subcategory implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lien' => [parent::class, 'lien', null],
        "\0".parent::class."\0".'produits' => [parent::class, 'produits', null],
        "\0".parent::class."\0".'subName' => [parent::class, 'subName', null],
        "\0".parent::class."\0".'subPictureName' => [parent::class, 'subPictureName', null],
        'id' => [parent::class, 'id', null],
        'lien' => [parent::class, 'lien', null],
        'produits' => [parent::class, 'produits', null],
        'subName' => [parent::class, 'subName', null],
        'subPictureName' => [parent::class, 'subPictureName', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}