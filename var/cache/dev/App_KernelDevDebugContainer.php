<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGzJJxvw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGzJJxvw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGzJJxvw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGzJJxvw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGzJJxvw\App_KernelDevDebugContainer([
    'container.build_hash' => 'GzJJxvw',
    'container.build_id' => 'a9a7025d',
    'container.build_time' => 1680370696,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGzJJxvw');
