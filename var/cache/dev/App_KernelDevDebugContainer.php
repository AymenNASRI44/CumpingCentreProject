<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEdwdHWz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEdwdHWz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEdwdHWz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEdwdHWz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEdwdHWz\App_KernelDevDebugContainer([
    'container.build_hash' => 'EdwdHWz',
    'container.build_id' => 'e9b8d7c1',
    'container.build_time' => 1736451907,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEdwdHWz');
