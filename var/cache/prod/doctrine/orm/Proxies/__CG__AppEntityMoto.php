<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Moto extends \App\Entity\Moto implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'marque' => [parent::class, 'marque', null],
        "\0".parent::class."\0".'motoDesc' => [parent::class, 'motoDesc', null],
        "\0".parent::class."\0".'motoName' => [parent::class, 'motoName', null],
        "\0".parent::class."\0".'motoOption' => [parent::class, 'motoOption', null],
        "\0".parent::class."\0".'motoPicture' => [parent::class, 'motoPicture', null],
        "\0".parent::class."\0".'motoPrice' => [parent::class, 'motoPrice', null],
        "\0".parent::class."\0".'motoYear' => [parent::class, 'motoYear', null],
        'id' => [parent::class, 'id', null],
        'marque' => [parent::class, 'marque', null],
        'motoDesc' => [parent::class, 'motoDesc', null],
        'motoName' => [parent::class, 'motoName', null],
        'motoOption' => [parent::class, 'motoOption', null],
        'motoPicture' => [parent::class, 'motoPicture', null],
        'motoPrice' => [parent::class, 'motoPrice', null],
        'motoYear' => [parent::class, 'motoYear', null],
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
