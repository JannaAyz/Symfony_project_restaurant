<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerATAAqER\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerATAAqER/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerATAAqER.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerATAAqER\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerATAAqER\App_KernelDevDebugContainer([
    'container.build_hash' => 'ATAAqER',
    'container.build_id' => 'b74caed0',
    'container.build_time' => 1683555333,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerATAAqER');
