<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTz2xRht\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTz2xRht/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTz2xRht.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTz2xRht\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTz2xRht\App_KernelDevDebugContainer([
    'container.build_hash' => 'Tz2xRht',
    'container.build_id' => 'a93196aa',
    'container.build_time' => 1590855120,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTz2xRht');