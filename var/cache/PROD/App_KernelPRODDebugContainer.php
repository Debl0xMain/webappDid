<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDpX7Ex1\App_KernelPRODDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDpX7Ex1/App_KernelPRODDebugContainer.php') {
    touch(__DIR__.'/ContainerDpX7Ex1.legacy');

    return;
}

if (!\class_exists(App_KernelPRODDebugContainer::class, false)) {
    \class_alias(\ContainerDpX7Ex1\App_KernelPRODDebugContainer::class, App_KernelPRODDebugContainer::class, false);
}

return new \ContainerDpX7Ex1\App_KernelPRODDebugContainer([
    'container.build_hash' => 'DpX7Ex1',
    'container.build_id' => '09d379ee',
    'container.build_time' => 1719906472,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDpX7Ex1');
