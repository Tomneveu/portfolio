<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU1vSPKf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU1vSPKf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerU1vSPKf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerU1vSPKf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerU1vSPKf\App_KernelDevDebugContainer([
    'container.build_hash' => 'U1vSPKf',
    'container.build_id' => 'cafa2033',
    'container.build_time' => 1695131776,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU1vSPKf');
