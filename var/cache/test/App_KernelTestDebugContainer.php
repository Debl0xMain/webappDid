<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMSoiHlr\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMSoiHlr/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerMSoiHlr.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerMSoiHlr\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerMSoiHlr\App_KernelTestDebugContainer([
    'container.build_hash' => 'MSoiHlr',
    'container.build_id' => '6e51649c',
    'container.build_time' => 1717750672,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMSoiHlr');
